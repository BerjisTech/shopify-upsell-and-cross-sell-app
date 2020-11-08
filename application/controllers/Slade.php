<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slade extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2025 05:00:00 GMT");
        date_default_timezone_set("Africa/Nairobi");
        header('Access-Control-Allow-Origin: *');
    }

    public function index()
    {
        if (isset($_GET['hmac'])) {
            $requests = $_GET;
            $hmac = $_GET['hmac'];
            $serializeArray = serialize($requests);
            $requests = array_diff_key($requests, array('hmac' => ''));
            ksort($requests);
        }
        if (!isset($_GET['shop'])) {
            die('stop');
        }

        $this_shop = str_replace(".myshopify.com", "", $_GET['shop']);

        if ($this->db->table_exists('shops')) {
        } else {
            echo '<script>window.location.href = "' . base_url() . 'install?shop=' . $this_shop . '";</script>';
        }

        if ($this->db->where('shop', $this_shop)->get('shops')->num_rows() == 0) {
            echo '<script>window.location.href = "' . base_url() . 'install?shop=' . $this_shop . '";</script>';
        }

        $shop_data = $this->db->where('shop', $this_shop)->get('shops')->row();

        $token = $shop_data->token;
        $shop = $shop_data->shop;
        $this_script = '/admin/api/2020-10/script_tags.json';
        $script_tags_url = "/admin/api/2020-10/script_tags.json";

        $script_exists = $this->Shopify->shopify_call($token, $this_shop, $this_script, array('fields' => 'id,src,event,created_at,updated_at,'), 'GET');
        $script_exists = json_decode($script_exists['response'], true);


        if (!isset($script_exists['script_tags'])) {
            echo '<script>window.location.href = "' . base_url() . 'install?shop=' . $this_shop . '";</script>';
        }
        // CREATE NEW SCRIPT TAG
        if (count($script_exists['script_tags']) == 0) {
            $script_array = array(
                'script_tag' => array(
                    'event' => 'onload',
                    'src' => base_url() . 'assets/js/shopify.js',
                ),
            );

            $scriptTag = $this->Shopify->shopify_call($token, $this_shop, $script_tags_url, $script_array, 'POST');
            $scriptTag = json_decode($scriptTag['response'], JSON_PRETTY_PRINT);
        } else {
            echo '<script>console.log(' . json_encode($script_exists) . ');</script>';
        }

        // REMOVE OLD SCRIPT TAGS
        if (count($script_exists['script_tags']) > 1) {
            foreach ($script_exists['script_tags'] as $key => $fetch) {
                $delete_script = $this->Shopify->shopify_call($token, $this_shop, '/admin/api/2020-10/script_tags/' . $fetch['id'] . '.json', array('fields' => 'id,src,event,created_at,updated_at,'), 'DELETE');
                $delete_script = json_decode($delete_script['response'], true);
                echo '<script>console.log(' . json_encode($delete_script) . ');</script>';
            }

            $script_array = array(
                'script_tag' => array(
                    'event' => 'onload',
                    'src' => base_url() . 'assets/js/shopify.js',
                ),
            );

            $scriptTag = $this->Shopify->shopify_call($token, $this_shop, $script_tags_url, $script_array, 'POST');
            $scriptTag = json_decode($scriptTag['response'], JSON_PRETTY_PRINT);
        }

        $offers = $this->db->where('shop', $shop)->get('offers')->result_array();

        foreach ($offers as $key => $value) {
            $oid = $value['offer_id'];
            $data['offer'][$oid]['offer'] = $this->db->where('offer_id', $oid)->get('offers')->result_array();
            $data['offer'][$oid]['products'] = $this->db->where('offer', $oid)->get('products')->result_array();
            $data['offer'][$oid]['variants'] = $this->db->where('oid', $oid)->get('variants')->result_array();
            $data['offer'][$oid]['blocks'] = $this->db->where('oid', $oid)->get('cbs')->result_array();
            $data['offer'][$oid]['conditions'] = $this->db->where('oid', $oid)->get('ocs')->result_array();
            $data['offer'][$oid]['fields'] = $this->db->where('oid', $oid)->get('cfs')->result_array();
            $data['offer'][$oid]['choices'] = $this->db->where('oid', $oid)->get('choices')->result_array();
        }

        $data['shop'] = $shop;
        $data['token'] = $token;
        $data['page_name'] = 'dashboard';
        $this->load->view('index', $data);
    }

    public function generate_token()
    {
        $api_key = $this->config->item('shopify_api_key');
        $shared_secret = $this->config->item('shopify_secret');
        $params = $_GET; // Retrieve all request parameters
        $hmac = $_GET['hmac']; // Retrieve HMAC request parameter

        $params = array_diff_key($params, array('hmac' => '')); // Remove hmac from params
        ksort($params); // Sort params lexographically

        $computed_hmac = hash_hmac('sha256', http_build_query($params), $shared_secret);

        // Use hmac data to check that the response is from Shopify or not
        if (hash_equals($hmac, $computed_hmac)) {

            // Set variables for our request
            $query = array(
                "client_id" => $api_key, // Your API key
                "client_secret" => $shared_secret, // Your app credentials (secret key)
                "code" => $params['code'], // Grab the access key from the URL
            );

            // Generate access token URL
            $access_token_url = "https://" . $params['shop'] . "/admin/oauth/access_token";

            // Configure curl client and execute request
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $access_token_url);
            curl_setopt($ch, CURLOPT_POST, count($query));
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
            $result = curl_exec($ch);
            curl_close($ch);

            // Store the access token
            $result = json_decode($result, true);
            $access_token = $result['access_token'];

            // Show the access token (don't do this in production!)

            //echo $access_token;

            $shop = str_replace(".myshopify.com", "", $params['shop']);

            $shop_data = array(
                'shop' => $shop,
                'token' => $access_token,
                'date' => time(),
            );

            if ($this->db->table_exists('shops')) {
                if ($this->db->where('shop', $shop)->get('shops')->num_rows() == 0) {
                    $this->db->insert('shops', $shop_data);
                } else {
                    $this->db->where('shop', $shop)->update('shops', array('token' => $access_token, 'date' => time()));
                }
            } else {
                $this->load->dbforge();
                $fields = array(
                    'shop_id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => true,
                        'auto_increment' => true,
                    ),
                    'shop' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'unique' => true,
                    ),
                    'token' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'default' => '',
                    ),
                    'date' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'null' => true,
                    ),
                );
                $this->dbforge->add_field($fields);
                $this->dbforge->add_key('shop_id', true);
                $this->dbforge->create_table('shops');

                $this->db->insert('shops', $shop_data);
            }
            echo '<script>window.location.href = "https://' . $params['shop'] . '/admin/apps/sleek-upsell";</script>';
        } else {
            // Someone is trying to be shady!
            header("Location: http://ebonymgp.com");
            die('This request is NOT from Shopify!');
        }
    }

    public function api_call_write_products()
    {
        $shop = $this->session->userdata('shop');
        $token = $this->session->userdata('token');

        $query = array(
            "Content-type" => "application/json", // Tell Shopify that we're expecting a response in JSON format
        );

        // Run API call to get products
        $products = $this->Shopify->shopify_call($token, $shop, "/admin/products.json", array(), 'GET');

        // Convert product JSON information into an array
        $products = json_decode($products['response'], true);

        // Get the ID of the first product
        $product_id = $products['products'][0]['id'];

        // Modify product data
        $modify_data = array(
            "product" => array(
                "id" => $product_id,
                "title" => "My New Title",
            ),
        );

        // Run API call to modify the product
        $modified_product = $this->Shopify->shopify_call($token, $shop, "/admin/products/" . $product_id . ".json", $modify_data, 'PUT');

        // Storage response
        $modified_product_response = $modified_product['response'];
    }

    public function install()
    {
        $shop = $_GET['shop'];
        $api_key = $this->config->item('shopify_api_key');
        $scopes = "read_orders,write_orders,read_draft_orders,read_content,write_content,read_products,write_products,read_product_listings,read_customers,write_customers,read_inventory,write_inventory,read_locations,read_script_tags,write_script_tags,read_themes,write_themes,read_shipping,write_shipping,read_analytics,read_checkouts,write_checkouts,read_reports,write_reports,read_price_rules,write_price_rules,read_discounts,write_discounts,read_resource_feedbacks,write_resource_feedbacks,read_translations,write_translations,read_locales,write_locales";
        $redirect_uri = "https://sleek-upsell.herokuapp.com/generate_token";

        // Build install/approval URL to redirect to
        $install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);
        // Redirect
        header("Location: " . $install_url);
        die();
    }

    public function new_offer($shop, $token)
    {
        if ($this->db->where('shop', $shop)->get('shops')->num_rows() == 0) {
            echo '<script>window.location.href = "' . base_url() . 'install?shop=' . $_GET['shop'] . '";</script>';
        }

        $shop_data = $this->db->where('shop', $shop)->get('shops')->row();

        $data['token'] = $shop_data->token;
        $data['shop'] = $shop_data->shop;

        $data['page_name'] = 'create_offer';
        $this->load->view('index', $data);
    }

    public function edit_offer($shop, $token, $offer)
    {
        if ($this->db->where('shop', $shop)->get('shops')->num_rows() == 0) {
            echo '<script>window.location.href = "' . base_url() . 'install?shop=' . $_GET['shop'] . '";</script>';
        }

        $shop_data = $this->db->where('shop', $shop)->get('shops')->row();

        $data['offer'] = $this->db->where('offer_id', $offer)->get('offers')->result_array();
        $data['products'] = $this->db->where('offer', $offer)->get('products')->result_array();
        $data['variants'] = $this->db->where('oid', $offer)->get('variants')->result_array();
        $data['blocks'] = $this->db->where('oid', $offer)->get('cbs')->result_array();
        $data['conditions'] = $this->db->where('oid', $offer)->get('ocs')->result_array();
        $data['fields'] = $this->db->where('oid', $offer)->get('cfs')->result_array();
        $data['choices'] = $this->db->where('oid', $offer)->get('choices')->result_array();

        $data['token'] = $shop_data->token;
        $data['shop'] = $shop_data->shop;

        $data['page_name'] = 'edit_offer';
        $this->load->view('index', $data);
    }

    public function settings($shop, $token)
    {
        $data['token'] = $token;
        $data['shop'] = $shop;

        $data['page_name'] = 'settings';
        $this->load->view('index', $data);
    }

    public function offers($shop)
    {
        $shop_name = str_replace(".myshopify.com", "", $shop);
        $products_json = '/admin/api/2020-10/products.json';
        $collections_json = '/admin/api/2020-10/custom_collections.json';
        $collects_json = '/admin/api/2020-10/collects.json';
        $themes_json = '/admin/api/2020-10/themes.json';

        if ($this->db->where('shop', $shop_name)->get('shops')->num_rows() == 0) {
            $offers = array();
        } else {
            $token = $this->db->where('shop', $shop_name)->get('shops')->row()->token;
            $i = 0;

            $data['shop'] = $shop_name;
            $data['token'] = $token;
            $collects = $this->Shopify->shopify_call($token, $shop_name, $collects_json, array(), 'GET');
            $collections = $this->Shopify->shopify_call($token, $shop_name, $collections_json, array(), 'GET');
            $products = $this->Shopify->shopify_call($token, $shop_name, $products_json, array(), 'GET');
            $themes = $this->Shopify->shopify_call($token, $shop_name, $themes_json, array(), 'GET');
        }

        $sid = $this->db->where('shop', $shop_name)->get('shops')->row()->shop_id;

        $params['products'] = json_decode($products['response'], true);
        $params['collections'] = json_decode($collections['response'], true);
        $params['collects'] = json_decode($collects['response'], true);
        $params['themes'] = json_decode($themes['response'], true);

        $offers = $this->db->where('shop', $shop_name)->get('offers')->result_array();

        foreach ($offers as $key => $value) {
            $oid = $value['offer_id'];
            $data['offer'][$oid]['offer'] = $this->db->where('offer_id', $oid)->get('offers')->result_array();
            $data['offer'][$oid]['products'] = $this->db->where('offer', $oid)->get('products')->result_array();
            $data['offer'][$oid]['variants'] = $this->db->where('oid', $oid)->get('variants')->result_array();
            $data['offer'][$oid]['blocks'] = $this->db->where('oid', $oid)->get('cbs')->result_array();
            $data['offer'][$oid]['conditions'] = $this->db->where('oid', $oid)->get('ocs')->result_array();
            $data['offer'][$oid]['fields'] = $this->db->where('oid', $oid)->get('cfs')->result_array();
            $data['offer'][$oid]['choices'] = $this->db->where('oid', $oid)->get('choices')->result_array();
        }


        $data['products'] = $params['products']['products'];
        $data['collections'] = $params['collections']['custom_collections'];
        $data['collects'] = $params['collects']['collects'];
        $data['themes'] = $params['themes']['themes'];

        header('Content-Type: application/json');
        header('X-Shopify-Access-Token: ' . $token);
        echo json_encode($data);
    }

    public function variants($product, $token, $shop)
    {
        $variants = $this->Shopify->shopify_call($token, $shop, "/admin/api/2020-10/products/" . $product . "/variants.json", array('fields' => 'id,title'), 'GET');
        $variants = json_decode($variants['response'], JSON_PRETTY_PRINT);

        header('Content-Type: application/json');
        header('X-Shopify-Access-Token: ' . $token);
        echo json_encode($variants);
    }

    public function product_details($product, $token, $shop)
    {
        $product_url = '/admin/api/2020-10/products/' . $product . '.json';
        $product_data = $this->Shopify->shopify_call($token, $shop, $product_url, array('fields' => 'id,title,image,variants'), 'GET');
        $product_data = json_decode($product_data['response'], JSON_PRETTY_PRINT);
        $shop_url = '/admin/api/2020-10/shop.json';
        $shop_data = $this->Shopify->shopify_call($token, $shop, $shop_url, array(), 'GET');
        $shop_data = json_decode($shop_data['response'], JSON_PRETTY_PRINT);
        $product_data['shop'] = $shop_data['shop'];

        header('Content-Type: application/json');
        header('X-Shopify-Access-Token: ' . $token);
        echo json_encode($product_data);
    }

    public function shop_data($token, $shop)
    {
        $product_url = '/admin/api/2020-10/shop.json';
        $product_data = $this->Shopify->shopify_call($token, $shop, $product_url, array(), 'GET');
        $product_data = json_decode($product_data['response'], JSON_PRETTY_PRINT);

        header('Content-Type: application/json');
        header('X-Shopify-Access-Token: ' . $token);
        echo json_encode($product_data);
    }

    public function search_products()
    {
        $html = '';
        $search_term = $this->input->post('term');
        $shop = $this->input->post('shop');
        $token = $this->input->post('token'); //replace with your access token

        if ($search_term == "") {
            $products = $this->Shopify->shopify_call($token, $shop, '/admin/api/2020-10/products.json', array('limit' => '10'), 'GET');
            $products = json_decode($products['response'], JSON_PRETTY_PRINT);
        } else {
            $array = array(
                'limit' => '10',
                'fields' => 'id,title,variants',
            );
            $products = $this->Shopify->shopify_call($token, $shop, "/admin/api/2020-10/products.json", $array, 'GET');
            $products = json_decode($products['response'], JSON_PRETTY_PRINT);
        }

        if (empty($products)) {
            $html = "<p>There's no product matching $search_term </p>";
        } else {
            foreach ($products as $product) {
                foreach ($product as $key => $value) {
                    if (stripos($value['title'], $search_term) !== false) {
                        $images = $this->Shopify->shopify_call($token, $shop, "/admin/api/2020-10/products/" . $value['id'] . "/images.json", array(), 'GET');
                        $images = json_decode($images['response'], JSON_PRETTY_PRINT);
                        $item_default_image = $images['images'][0]['src'];

                        $html .= '<div class="col-xs-12" style="margin-top: 10px; padding-bottom: 5px; border-bottom: 1px solid #C0C0C0;">';
                        $html .= '<div class="col-xs-12"><span class="pull-left" style="font-weight: bold; font-size: 18px; color: #333333;">' . $value['title'] . '</span> <span class="pull-right btn btn-primary btn-sm btn-icon icon-right" onclick="addAll(\'' . $value['id'] . '\')"><i style="color: #fff;" class="entypo-plus"></i> Add All variants</span></div>';
                        $html .= '<div class="col-xs-4" style="vertical-align: middle;"><img src="' . $item_default_image . '" class="img-rounded img-responsive" /></div>';
                        $html .= '<div class="col-xs-8" style="vertical-align: middle;">';

                        foreach ($value['variants'] as $variant) {
                            $html .= '
                                        <div class="col-xs-12" style="padding-top: 5px; paddign-bottom: 5px;">
                                            <div class="col-xs-10">' . $value['title'] . '-' . $variant['title'] . '</div>
                                            <div class="col-xs-2">
                                                <span class="btn btn-info btn-xs entypo-plus" style="color: #fff;" onclick="addVariant(\'' . $value['id'] . '\', \'' . $variant['id'] . '\')"></span>
                                            </div>
                                        </div>';
                        }

                        $html .= '</div>';
                        $html .= '</div>';
                        // print_r($value);

                        // foreach($value['variants'] as $variant){
                        //         $html .= '
                        //         <div class="col-xs-12" style="padding-top: 5px; paddign-bottom: 5px;">
                        //                 <div class="col-xs-10">'.$value['title'] .'-'. $variant['title'].'</div>
                        //                 <div class="col-xs-2">
                        //                         <span class="btn btn-info btn-sm entypo-plus" style="color: #fff;" onclick="addVariant('.$variant['id'].')"></span>
                        //                 </div>
                        //         </div>';
                        // }
                    }
                }
            }
        }

        echo $html;
    }

    public function search_condition()
    {
        $html = '';
        $type = $this->input->post('type');
        $search_term = $this->input->post('item');
        $shop = $this->input->post('shop');
        $token = $this->input->post('token'); //replace with your access token

        if ($search_term == "") {
        } else {
            $array = array(
                'limit' => '10',
                'fields' => 'id,title,variants',
            );
            if ($type == 'product') {
                $products = $this->Shopify->shopify_call($token, $shop, "/admin/api/2020-10/products.json", $array, 'GET');
                $products = json_decode($products['response'], JSON_PRETTY_PRINT);
                if (empty($products)) {
                    $html = "<p>There's no product matching $search_term </p>";
                } else {
                    foreach ($products as $product) {
                        foreach ($product as $key => $value) {
                            if (stripos($value['title'], $search_term) !== false) {
                                $html .= '<div onclick="$(\'.occ\').val(\'' . $value['id'] . '\');$(\'.c_i\').html(\'\');$(\'#ocContent\').val(\'' . $value['title'] . '\');" class="col-xs-12" style="cursor: pointer; margin-top: 10px; padding-bottom: 5px; border-bottom: 1px solid #C0C0C0;"><span class="pull-left" style="color: #333333;">' . $value['title'] . '</span></div>';
                            }
                        }
                    }
                }
            }
            if ($type == 'variant') {
                $products = $this->Shopify->shopify_call($token, $shop, "/admin/api/2020-10/products.json", $array, 'GET');
                $products = json_decode($products['response'], JSON_PRETTY_PRINT);
                if (empty($products)) {
                    $html = "<p>There's no variant matching $search_term </p>";
                } else {
                    foreach ($products as $product) {
                        foreach ($product as $key => $value) {
                            if (stripos($value['title'], $search_term) !== false) {
                                foreach ($value['variants'] as $variant) {
                                    $html .= '<div onclick="$(\'.occ\').val(\'' . $variant['id'] . '\');$(\'.c_i\').html(\'\');$(\'#ocContent\').val(\'' . $value['title'] . ' ' . $variant['title'] . '\');" class="col-xs-12" style="cursor: pointer; margin-top: 10px; padding-bottom: 5px; border-bottom: 1px solid #C0C0C0;"><span class="pull-left" style="color: #333333;">' . $value['title'] . ' ' . $variant['title'] . '</span></div>';
                                }
                            }
                        }
                    }
                }
            }
            if ($type == 'collection') {
                $collections = $this->Shopify->shopify_call($token, $shop, "/admin/api/2020-10/custom_collections.json", $array, 'GET');
                $collections = json_decode($collections['response'], JSON_PRETTY_PRINT);
                if (empty($collections)) {
                    $html = "<p>There's no collection matching $search_term </p>";
                } else {
                    foreach ($collections as $collection) {
                        foreach ($collection as $key => $value) {
                            if (stripos($value['title'], $search_term) !== false) {
                                $html .= '<div onclick="$(\'.occ\').val(\'' . $value['id'] . '\');$(\'.c_i\').html(\'\');$(\'#ocContent\').val(\'' . $value['title'] . '\');" class="col-xs-12" style="cursor: pointer; margin-top: 10px; padding-bottom: 5px; border-bottom: 1px solid #C0C0C0;"><span class="pull-left" style="color: #333333;">' . $value['title'] . '</span></div>';
                            }
                        }
                    }
                }
            }
        }

        echo $html;
    }

    public function create_offers()
    {
        $offer_data = $_POST;

        foreach ($offer_data['offer'] as $o) {
            $this->db->insert('offers', $o);
        }

        $oid = $this->db->limit('1')->order_by('offer_id', 'DESC')->get('offers')->row()->offer_id;

        if (array_key_exists('products', $offer_data)) {
            foreach ($offer_data['products'] as $p) {
                $p['offer'] = $oid;
                $this->db->insert('products', $p);
            }
        }
        if (array_key_exists('variants', $offer_data)) {
            foreach ($offer_data['variants'] as $v) {
                $v['oid'] = $oid;
                $this->db->insert('variants', $v);
            }
        }
        if (array_key_exists('blocks', $offer_data)) {
            foreach ($offer_data['blocks'] as $b) {
                $b['oid'] = $oid;
                $this->db->insert('cbs', $b);
            }
        }
        if (array_key_exists('conditions', $offer_data)) {
            foreach ($offer_data['conditions'] as $c) {
                $c['oid'] = $oid;
                $this->db->insert('ocs', $c);
            }
        }
        if (array_key_exists('fields', $offer_data)) {
            foreach ($offer_data['fields'] as $f) {
                $f['oid'] = $oid;
                $this->db->insert('cfs', $f);
            }
        }
        if (array_key_exists('choices', $offer_data)) {
            foreach ($offer_data['choices'] as $ch) {
                $ch['oid'] = $oid;
                $this->db->insert('choices', $ch);
            }
        }

        echo $oid;
    }
    public function update_offers()
    {
        $offer_data = $_POST;

        foreach ($offer_data['offer'] as $o) {
            $this->db->insert('offers', $o);
        }

        $oid = $this->db->limit('1')->order_by('offer_id', 'DESC')->get('offers')->row()->offer_id;

        if (array_key_exists('products', $offer_data)) {
            foreach ($offer_data['products'] as $p) {
                $p['offer'] = $oid;
                $this->db->insert('products', $p);
            }
        }
        if (array_key_exists('variants', $offer_data)) {
            foreach ($offer_data['variants'] as $v) {
                $v['oid'] = $oid;
                $this->db->insert('variants', $v);
            }
        }
        if (array_key_exists('blocks', $offer_data)) {
            foreach ($offer_data['blocks'] as $b) {
                $b['oid'] = $oid;
                $this->db->insert('cbs', $b);
            }
        }
        if (array_key_exists('conditions', $offer_data)) {
            foreach ($offer_data['conditions'] as $c) {
                $c['oid'] = $oid;
                $this->db->insert('ocs', $c);
            }
        }
        if (array_key_exists('fields', $offer_data)) {
            foreach ($offer_data['fields'] as $f) {
                $f['oid'] = $oid;
                $this->db->insert('cfs', $f);
            }
        }
        if (array_key_exists('choices', $offer_data)) {
            foreach ($offer_data['choices'] as $ch) {
                $ch['oid'] = $oid;
                $this->db->insert('choices', $ch);
            }
        }

        echo $oid;
    }

    public function new_table()
    {
        $this->db->query('DROP TABLE IF EXISTS `offers`');
        $query = '   
        CREATE TABLE IF NOT EXISTS `offers` (
          `offer_id` int(11) NOT NULL AUTO_INCREMENT,
          `offer_title` text NOT NULL,
          `offer_shop` text NOT NULL,
          `offer_text` longtext NOT NULL,
          `offer_button_text` text NOT NULL,
          `offer_color_scheme` text NOT NULL,
          `offer_layout` text NOT NULL,
          `offer_products` longtext NOT NULL,
          `offer_product_image` text NOT NULL,
          `offer_product_title` text NOT NULL,
          `offer_product_price` text NOT NULL,
          `offer_compare_at_price` text NOT NULL,
          `offer_variant_price` text NOT NULL,
          `offer_linked` text NOT NULL,
          `offer_closable` text NOT NULL,
          `offer_quantity_chooser` text NOT NULL,
          `offer_condition_rule` text NOT NULL,
          `offer_conditions` longtext NOT NULL,
          `offer_show_after_accepted` text NOT NULL,
          `offer_required_for_checkout` text NOT NULL,
          `offer_automatically_remove` text NOT NULL,
          `offer_apply_discount` text NOT NULL,
          `offer_discount_code` text NOT NULL,
          `offer_to_checkout` text NOT NULL,
          `offer_ab_text` text NOT NULL,
          `offer_ab_test` text NOT NULL,
          `offer_ab_button` text NOT NULL,
          `offer_status` text NOT NULL,
          `offer_date` int(11) NOT NULL,
          `offer_custom_fields` longtext NOT NULL,
          PRIMARY KEY (`offer_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;';

        if ($this->db->query($query)) {
            $this->db->query('TRUNCATE TABLE `offers`');
            $this->db->query('COMMIT;');
            echo 'table created';
        }
    }

    public function stats($shop)
    {
        if ($this->db->where('shop', $shop)->get('shops')->num_rows() == 0) {
            echo '<script>window.location.href = "' . base_url() . 'install?shop=' . $_GET['shop'] . '";</script>';
        }

        $shop_data = $this->db->where('shop', $shop)->get('shops')->row();

        $data['token'] = $shop_data->token;
        $data['shop'] = $shop_data->shop;

        $data['page_name'] = 'stats';
        $this->load->view('index', $data);
    }

    public function offer_stats($shop, $offer)
    {
        if ($this->db->where('shop', $shop)->get('shops')->num_rows() == 0) {
            echo '<script>window.location.href = "' . base_url() . 'install?shop=' . $_GET['shop'] . '";</script>';
        }

        $shop_data = $this->db->where('shop', $shop)->get('shops')->row();

        $data['offer'] = $offer;
        $data['token'] = $shop_data->token;
        $data['shop'] = $shop_data->shop;

        $data['page_name'] = 'offer_stats';
        $this->load->view('index', $data);
    }

    public function delete_offer($oid)
    {
        $this->db->where('offer_id', $oid)->delete('offers');
        $this->db->where('offer', $oid)->delete('products');
        $this->db->where('oid', $oid)->delete('variants');
        $this->db->where('oid', $oid)->delete('cbs');
        $this->db->where('oid', $oid)->delete('ocs');
        $this->db->where('oid', $oid)->delete('cfs');
        $this->db->where('oid', $oid)->delete('choices');
    }

    public function brgxczvy()
    {
        $this->db->insert('stats', $_POST);
        print_r("post <br />");
        print_r($_POST);
    }
}
