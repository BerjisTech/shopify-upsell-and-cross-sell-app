<?php $duka = $shop . '.myshopify.com'; ?>
<div class="btn btn-primary" onclick="window.history.back();" style="display: table; position: absolute; top: 10px; right: 30px; z-index: 2000000;"><span class="entypo-home"> BACK</span></div>
<h2 style="margin-top: -10px; text-align: center;">General stats for <?php echo $shop; ?> offers</h2>
<script type="text/javascript">
    jQuery(document).ready(function() {
        // Sparkline Charts
        jQuery(".sales").sparkline([0,
            <?php
            foreach ($this->db->select('sum(price) as stat, date_format(from_unixtime(date), "%d") as day, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'purchase')->group_by('day')->order_by('year', 'asc')->limit('30')->get('stats')->result_array() as $fetch) {
                echo $fetch['stat'] . ',';
            }
            ?>
        ], {
            type: 'line',
            width: '100%',
            height: '55',
            lineColor: '#e8b51b',
            fillColor: '',
            lineWidth: 2,
            spotColor: '#344e86',
            minSpotColor: '#344e86',
            maxSpotColor: '#344e86',
            highlightSpotColor: '#344e86',
            highlightLineColor: '#30487b',
            spotRadius: 2,
            drawNormalOnTop: true
        });


        jQuery(".customer-reach").sparkline([0,
            <?php
            foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%d") as day, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'impression')->group_by('day')->order_by('year', 'asc')->limit('30')->get('stats')->result_array() as $fetch) {
                echo $fetch['stat'] . ',';
            }
            ?>
        ], {
            type: 'line',
            width: '100%',
            height: '55',
            lineColor: '#ec3b83',
            fillColor: '',
            lineWidth: 2,
            spotColor: '#344e86',
            minSpotColor: '#344e86',
            maxSpotColor: '#344e86',
            highlightSpotColor: '#344e86',
            highlightLineColor: '#30487b',
            spotRadius: 2,
            drawNormalOnTop: true
        });

        $(".monthly-sales").sparkline([0,
            <?php
            foreach ($this->db->select('sum(price) as stat, date_format(from_unixtime(date), "%d") as day, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'purchase')->group_by('day')->order_by('year', 'asc')->limit('30')->get('stats')->result_array() as $fetch) {
                echo $fetch['stat'] . ',';
            }
            ?>
        ], {
            type: 'bar',
            barColor: '#ff4e50',
            height: '55px',
            width: '100%',
            barWidth: 8,
            barSpacing: 1
        });

        jQuery(".all-time-sales").sparkline([0,
            <?php
            foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%d") as day, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'show')->group_by('day')->order_by('year', 'asc')->limit('30')->get('stats')->result_array() as $fetch) {
                echo $fetch['stat'] . ',';
            }
            ?>
        ], {
            type: 'line',
            width: '100%',
            height: '55',
            lineColor: '#00acd6',
            fillColor: '',
            lineWidth: 2,
            spotColor: '#344e86',
            minSpotColor: '#344e86',
            maxSpotColor: '#344e86',
            highlightSpotColor: '#344e86',
            highlightLineColor: '#30487b',
            spotRadius: 2,
            drawNormalOnTop: true
        });

        $('.inlinebar').sparkline('html', {
            type: 'bar',
            barColor: '#ff6264'
        });
        $('.inlinebar-2').sparkline('html', {
            type: 'bar',
            barColor: '#445982'
        });
        $('.inlinebar-3').sparkline('html', {
            type: 'bar',
            barColor: '#00b19d'
        });

        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        var line_chart_demo = $("#line-chart-demo");

        last_30_days();
        $('.adjust-stats').change(function() {
            $("#line-chart-demo").empty();
            if ($(this).val() == "0") {
                today();
            }
            if ($(this).val() == "1") {
                yesterday();
            }
            if ($(this).val() == "7") {
                last_7_days();
            }
            if ($(this).val() == "30") {
                last_30_days();
            }
            if ($(this).val() == "90") {
                last_90_days();
            }
            if ($(this).val() == "365") {
                last_365_days();
            }
            if ($(this).val() == "31") {
                last_month();
            }
            if ($(this).val() == "366") {
                last_year()
            }
            if ($(this).val() == "all") {
                all_time();
            }
            if ($(this).val() == "") {
                last_30_days();
            }
        });


        function yesterday() {

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 48; $m > 23; $m--) {
                        $nowmonth = strtotime(date('Y-m-d H:m:s', strtotime('-' . $m . ' hours')));
                        $lastmonth = strtotime(date('Y-m-d H:m:s', strtotime('-' . ($m - 1) . ' hours'))); ?> {

                            y: '<?php echo date('Y-m-d H:m:s', strtotime('-' . $m . ' hours')); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                resize: true,
                smooth: true,
                xLabelFormat: function(x) {
                    let shit = new Date(x);
                    let date = x.getDate();
                    let monthy = months[x.getMonth()];
                    let hours = x.getHours();
                    let minutes = x.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    let date = shit.getDate();
                    let monthy = months[shit.getMonth()];
                    let hours = shit.getHours();
                    let minutes = shit.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function today() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 24; $m > -1; $m--) {
                        $nowmonth = strtotime(date('Y-m-d H:m:s', strtotime('-' . $m . ' hours')));
                        $lastmonth = strtotime(date('Y-m-d H:m:s', strtotime('-' . ($m - 1) . ' hours'))); ?> {

                            y: '<?php echo date('Y-m-d H:m:s', strtotime('-' . $m . ' hours')); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                resize: true,
                xLabelFormat: function(x) {
                    let shit = new Date(x);
                    let date = x.getDate();
                    let monthy = months[x.getMonth()];
                    let hours = x.getHours();
                    let minutes = x.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    let date = shit.getDate();
                    let monthy = months[shit.getMonth()];
                    let hours = shit.getHours();
                    let minutes = shit.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_30_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 30; $m > -1; $m--) {
                        $nowmonth = strtotime(date('d-M-Y', strtotime('-' . $m . ' days')));
                        $lastmonth = strtotime(date('d-M-Y', strtotime('-' . ($m - 1) . ' days'))); ?> {

                            y: '<?php echo date('Y-m-d', strtotime('-' . $m . ' days')); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                pointSize: 0,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_7_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 7; $m > -1; $m--) {
                        $nowmonth = strtotime(date('d-M-Y', strtotime('-' . $m . ' days')));
                        $lastmonth = strtotime(date('d-M-Y', strtotime('-' . ($m - 1) . ' days'))); ?> {

                            y: '<?php echo date('Y-m-d', strtotime('-' . $m . ' days')); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_90_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 90; $m > -1; $m--) {
                        $nowmonth = strtotime(date('d-M-Y', strtotime('-' . $m . ' days')));
                        $lastmonth = strtotime(date('d-M-Y', strtotime('-' . ($m - 1) . ' days'))); ?> {

                            y: '<?php echo date('Y-m-d', strtotime('-' . $m . ' days')); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                pointSize: 0,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_365_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 12; $m > -1; $m--) {
                        $nowmonth = strtotime(date('d-M-Y', strtotime('-' . $m . ' months')));
                        $lastmonth = strtotime(date('d-M-Y', strtotime('-' . ($m - 1) . ' months'))); ?> {

                            y: '<?php echo date('Y-m', $nowmonth); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(x) {
                    var month = months[x.getMonth()] + ' ' + x.getFullYear();
                    return month;
                },
                dateFormat: function(x) {
                    let d = new Date(x)
                    var month = months[d.getMonth()] + ' ' + d.getFullYear();;
                    return month;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_month() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 60; $m > 29; $m--) {
                        $nowmonth = strtotime(date('d-M-Y', strtotime('-' . $m . ' days')));
                        $lastmonth = strtotime(date('d-M-Y', strtotime('-' . ($m - 1) . ' days'))); ?> {

                            y: '<?php echo date('Y-m-d', strtotime('-' . $m . ' days')); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                pointSize: 0,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_year() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = 24; $m > 11; $m--) {
                        $nowmonth = strtotime(date('d-M-Y', strtotime('-' . $m . ' months')));
                        $lastmonth = strtotime(date('d-M-Y', strtotime('-' . ($m - 1) . ' months'))); ?> {

                            y: '<?php echo date('Y-m', $nowmonth); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(x) {
                    var month = months[x.getMonth()] + ' ' + x.getFullYear();
                    return month;
                },
                dateFormat: function(x) {
                    let d = new Date(x)
                    var month = months[d.getMonth()] + ' ' + d.getFullYear();;
                    return month;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function all_time() {
            // Line Charts
            <?php
            $ts1 = $this->db->where('shop', $shop)->get('shops')->row()->date;
            $ts2 = time();

            $year1 = date('Y', $ts1);
            $year2 = date('Y', $ts2);

            $month1 = date('m', $ts1);
            $month2 = date('m', $ts2);

            $diff = ((($year2 - $year1) * 12) + ($month2 - $month1));
            ?>
            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [
                    <?php
                    for ($m = $diff; $m > -1; $m--) {
                        $nowmonth = strtotime(date('d-M-Y', strtotime('-' . $m . ' months')));
                        $lastmonth = strtotime(date('d-M-Y', strtotime('-' . ($m - 1) . ' months'))); ?> {

                            y: '<?php echo date('Y-m', $nowmonth); ?>',
                            a: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $shown = $this->db->where($where)->get('stats')->num_rows();
                                if ($shown == '') {
                                    echo '0';
                                } else {
                                    echo $shown;
                                }
                                ?>,
                            b: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'impression' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $impressions = $this->db->where($where)->get('stats')->num_rows();
                                if ($impressions == '') {
                                    echo '0';
                                } else {
                                    echo $impressions;
                                }
                                ?>,
                            c: <?php
                                $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $lastmonth . "'";
                                $purchases = $this->db->where($where)->get('stats')->num_rows();
                                if ($purchases == '') {
                                    echo '0';
                                } else {
                                    echo $purchases;
                                }
                                ?>
                        },

                    <?php } #echo $this->db->last_query(); 
                    ?>
                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(x) {
                    var month = months[x.getMonth()] + ' ' + x.getFullYear();
                    return month;
                },
                dateFormat: function(x) {
                    let d = new Date(x)
                    var month = months[d.getMonth()] + ' ' + d.getFullYear();;
                    return month;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        // Donut Chart
        var donut_chart_demo = $("#donut-chart-demo");
        donut_chart_demo.parent().show();
        var donut_chart = Morris.Donut({
            element: 'donut-chart-demo',
            data: [{
                    label: "ATC ($ <?php echo number_format($this->db->select('sum(price) as total')->where('shop', $duka)->where('type', 'purchase')->get('stats')->row()->total); ?>)",
                    value: <?php echo number_format($this->db->where('shop', $duka)->where('type', 'purchase')->get('stats')->num_rows()); ?>
                },
                {
                    label: "Impressions",
                    value: <?php echo number_format($this->db->where('shop', $duka)->where('type', 'impression')->get('stats')->num_rows()); ?>
                },
                {
                    label: "Shown",
                    value: <?php echo number_format($this->db->where('shop', $duka)->where('type', 'show')->get('stats')->num_rows()); ?>
                }
            ],
            colors: ['#EC3B83', '#00ACD6', '#E8B51B', '#002A5A']
        });
        donut_chart_demo.parent().attr('style', '');
    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>

<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="tile-stats tile-white stat-tile">
            <h3><?php echo number_format($this->db->where('shop', $duka)->where('type', 'show')->get('stats')->num_rows()); ?></h3>
            <p>Shown</p> <span class="all-time-sales"></span>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tile-stats tile-white stat-tile">
            <h3><?php echo number_format($this->db->where('shop', $duka)->where('type', 'impression')->get('stats')->num_rows()); ?></h3>
            <p>Customer impression</p> <span class="customer-reach"></span>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tile-stats tile-white stat-tile">
            <h3>$ <?php echo number_format($this->db->select('sum(price) as total')->where('shop', $duka)->where('type', 'purchase')->get('stats')->row()->total); ?></h3>
            <p>ATC</p> <span class="sales"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary" id="charts_env">
            <div class="panel-heading">
                <div class="panel-title">
                    <div class="input-group">
                        <select class="form-control adjust-stats">
                            <option value="">Choose stats time</option>
                            <option value="0">Last 24 hours</option>
                            <option value="1">Yesterday</option>
                            <option value="7">Last 7 days</option>
                            <option value="30">Lat 30 days</option>
                            <option value="90">Last 90 days</option>
                            <option value="365">Last 365 days</option>
                            <option value="31">Last month</option>
                            <option value="366">Last year</option>
                            <option value="all">All Time</option>
                        </select>
                    </div>
                </div>
                <div class="panel-options">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#line-chart" data-toggle="tab">Shown vs ATC</a></li>
                        <li class=""><a href="#pie-chart" data-toggle="tab">Comparison Chart</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="line-chart">
                        <div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
                    </div>
                    <div class="tab-pane" id="pie-chart">
                        <div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-primary">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th class="padding-bottom-none text-center"> <br> <br> <span class="monthly-sales"><canvas width="262" height="80" style="display: inline-block; width: 262px; height: 80px; vertical-align: top;"></canvas></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="panel-heading">
                            <h4>Monthly Sales</h4>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Top 3 offers</div>
            </div>
            <div class="panel-body with-table">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Offer</th>
                            <th>CTR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total_stats = $this->db->where('shop', $duka)->get('stats')->num_rows();
                        $top_stats = $this->db->where('shop', $duka)->select('*, count(stat_id) as reach')->group_by('offer')->limit(3)->order_by('reach', 'desc')->get('stats')->result_array();
                        foreach ($top_stats as $key => $fetch) :
                        ?>
                            <tr>
                                <td><?php echo $fetch['offer']; ?></td>
                                <td><?php
                                    if ($fetch['offer'] == 'collection') {
                                        echo "Auto-Collections";
                                    } else {
                                        $title = $this->db->where('offer_id', $fetch['offer'])->get('offers')->row()->title;
                                        if ($title == '') {
                                            echo ' Offer #' . $fetch['offer'];
                                        } else {
                                            echo ' ' . $title;
                                        }
                                    }
                                    ?></td>
                                <td><?php echo number_format(($fetch['reach'] * 100) / $total_stats); ?>% ($<?php echo number_format($this->db->select('sum(price) as total')->where('shop', $duka)->where('type', 'purchase')->where('offer', $fetch['offer'])->get('stats')->row()->total); ?>)</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

// $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '1614155168' AND '1614155705'";
// $shown = $this->db->where($where)->get('stats')->num_rows();
// echo $shown;
// echo '<br />'.$this->db->last_query();

/* var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        // Line Charts
        var line_chart_demo = $("#line-chart-demo");
        var line_chart = Morris.Line({
            element: 'line-chart-demo',
            data: [
                <?php
                $gyear = date('Y');
                for ($month = 01; $month <= 12; $month++) {
                    if ($month == '01') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('31-' . $month . '-' . $gyear);
                    }
                    if ($month == '02') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('28-' . $month . '-' . $gyear);
                    }
                    if ($month == '03') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('31-' . $month . '-' . $gyear);
                    }
                    if ($month == '04') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('30-' . $month . '-' . $gyear);
                    }
                    if ($month == '05') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('31-' . $month . '-' . $gyear);
                    }
                    if ($month == '06') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('30-' . $month . '-' . $gyear);
                    }
                    if ($month == '07') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('31-' . $month . '-' . $gyear);
                    }
                    if ($month == '08') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('31-' . $month . '-' . $gyear);
                    }
                    if ($month == '09') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('30-' . $month . '-' . $gyear);
                    }
                    if ($month == '10') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('31-' . $month . '-' . $gyear);
                    }
                    if ($month == '11') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('30-' . $month . '-' . $gyear);
                    }
                    if ($month == '12') {
                        $nowmonth = strtotime('01-' . $month . '-' . $gyear);
                        $newmonth = strtotime('31-' . $month . '-' . $gyear);
                    }
                    #echo '01-'.$month.'-'.$gyear;
                ?> {
                        y: '<?php echo date('Y'); ?>-<?php echo $month; ?>',
                        a: <?php
                            $where = "`shop` = '" . $duka . "' AND `type` = 'show' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $newmonth . "'";
                            $shown = $this->db->where($where)->get('stats')->num_rows();
                            if ($shown == '') {
                                echo '0';
                            } else {
                                echo $shown;
                            }
                            ?>,
                        b: <?php
                            $where = "`shop` = '" . $duka . "' AND `type` = 'purchase' AND `date` BETWEEN '" . $nowmonth . "' AND '" . $newmonth . "'";
                            $purchases = $this->db->where($where)->get('stats')->num_rows();
                            if ($purchases == '') {
                                echo '0';
                            } else {
                                echo $purchases;
                            }
                            ?>
                    },

                <?php } #echo $this->db->last_query(); 
                ?>
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Shown', 'Purchased'],
            lineColors: ['#ec3b83', '#00acd6'],
            xLabelFormat: function(x) {
                var month = months[x.getMonth()];
                return month;
            },
            dateFormat: function(x) {
                var month = months[new Date(x).getMonth()];
                return month;
            },
            redraw: true
        });
        line_chart_demo.parent().attr('style', '');

        */
?>