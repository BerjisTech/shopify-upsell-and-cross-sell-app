<!DOCTYPE html>
<html>

<head>
    <?php include 'header.php'; ?>

    <!--script src="https://cdn.shopify.com/s/assets/external/app.js"></script>
	<script type="text/javascript">
		ShopifyApp.init({
			apiKey: '<?php #echo $api_key; ?>',
			shopOrigin: '<?php #echo 'https://'  . $_COOKIE['shop']. '.myshopify.com'; ?>' 
            });
	</script>
	<script type="text/javascript">
		ShopifyApp.ready(function () {
			ShopifyApp.Bar.initialize({
				buttons: {
					primary: {
						label: 'Save',
						message: 'unicorn_form_submit',
						loading: true
					}
				}
			});
		});
	</script-->
</head>

<body class="page-body skin-blue gray" data-url="<?php echo base_url(); ?>"
    data-shop-url="https://<?php echo $shop; ?>.myshopify.com/">

    <style>
    .tha_loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        margin: 250px auto;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>

    <div class="ficha_hii"
        style="width: 100%; height: 100vh; display: table; background: #FFFFFF; z-index: 20000; position: fixed; text-align: center; vertical-align: middle;">
        <div class="tha_loader"></div>
    </div>

    <script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var shop_url = 'https://<?php echo $shop; ?>.myshopify.com';
    $(window).load(function() {
        $('.ficha_hii').hide(300);
    });
    </script>
    <div class="page-container">
        <div class="main-content">
            <div class="row"><?php if ($page_name=='dashboard'): ?><div class="col-md-6 col-sm-8 clearfix">
                    <ul class="user-info pull-left pull-none-xsm">
                        <li class="profile-info dropdown"><span
                                class="btn btn-primary btn-sm btn-icon icon-right dropdown-toggle"
                                data-toggle="dropdown"><i class="entypo-cog"></i>Settings</span>
                            <ul class="dropdown-menu">
                                < !-- Reverse Caret -->
                                    <li class="caret"></li>
                                    < !-- Profile sub-links -->
                                        <li><a href="#"><i class="entypo-user"></i>Offer settings </a></li>
                                        <li><a href="#"><i class="entypo-mail"></i>Set up wizard </a></li>
                                        <li><a href="#"><i class="entypo-calendar"></i>Subscription </a></li>
                                        <li><a href="#"><i class="entypo-clipboard"></i>Catalog </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="user-info pull-left pull-right-xs pull-none-xsm">
                        <li><a href="<?php echo base_url(); ?>new_offer/<?php echo $shop; ?>/<?php echo $token; ?>"><span
                                    class="btn btn-success btn-sm btn-icon icon-right"><i class="entypo-plus"></i>New
                                    Offer</span></a></li>
                        <li><a href="<?php echo base_url(); ?>stats/<?php echo $shop; ?>/<?php echo $token; ?>"><span
                                    class="btn btn-info btn-sm btn-icon icon-right"><i
                                        class="entypo-chart-line"></i>Stats</span></a></li>
                    </ul>
                </div>
                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                    <ul class="list-inline links-list pull-right">
                        <li class="dropdown language-selector hidden">Language: &nbsp;
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true"><img
                                    src="https://demo.neontheme.com/assets/images/flags/flag-uk.png" width="16"
                                    height="16" /></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-de.png"
                                            width="16" height="16" /><span>Deutsch</span></a></li>
                                <li class="active"><a href="#"><img
                                            src="https://demo.neontheme.com/assets/images/flags/flag-uk.png" width="16"
                                            height="16" /><span>English</span></a></li>
                                <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-fr.png"
                                            width="16" height="16" /><span>François</span></a></li>
                                <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-al.png"
                                            width="16" height="16" /><span>Shqip</span></a></li>
                                <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-es.png"
                                            width="16" height="16" /><span>Español</span></a></li>
                            </ul>
                        </li>
                        <li class="sep"></li>
                        <li><a href="#" data-toggle="chat" data-collapse-sidebar="1"><i class="entypo-chat"></i>Chat
                                <span class="badge badge-success chat-notifications-badge is-hidden">0</span></a>
                        </li>
                        <li class="sep"></li>
                        <li class="btn btn-primary btn-sm btn-icon icon-right">Need help <i
                                class="entypo-help right"></i></a></li>
                    </ul>
                </div><?php endif;
    ?><?php if ($page_name == 'stats'): ?><div class="col-md-6 col-sm-8 clearfix">
                    <ul class="user-info pull-left pull-right-xs pull-none-xsm">
                        <li><span class="btn btn-success btn-sm btn-icon icon-left" onclick="window.history.back();"><i
                                    class="entypo-back"></i>BACK</span></li>
                    </ul>
                </div>
                < !-- Raw Links --><?php endif;
    ?>
            </div>
            <hr /><?php include $page_name.'.php';
    ?>
        </div>
    </div><?php include 'footer.php';
    ?>
</body>

</html>