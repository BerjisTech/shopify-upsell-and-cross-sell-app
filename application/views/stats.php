<script type="text/javascript">
jQuery(document).ready(function() {
    // Sparkline Charts
    jQuery(".sales").sparkline([80, 65, 12, 10, 10, 8, 4, 11, 6, 1, 6, 7, ], {
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
    jQuery(".pie-chart").sparkline([1806600,
        1733190,
        580300
    ], {
        type: 'pie',
        width: '95',
        height: '95',
        sliceColors: ['#ec3b83', '#00acd6', '#e8b51b']
    });


    jQuery(".customer-reach").sparkline([8500, 31000, 50400, 46200, 41650, 104200, 67850, 61200, 120700, 97550,
        116850, 134480, 101900, 114600, 135400, 118400, 100350, 176120, 97840, 8000,
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

    $(".monthly-sales").sparkline([80, 65, 12, 10, 10, 8, 4, 11, 6, 1, 6, 7, ], {
        type: 'bar',
        barColor: '#ff4e50',
        height: '55px',
        width: '100%',
        barWidth: 8,
        barSpacing: 1
    });

    jQuery(".all-time-sales").sparkline([40200, 77300, 36700, 27800, 30200, 61400, 67800, 29000, 35400, 39300,
        11500, 8850, 11000, 26000, 21000, 13500, 6500, 21850, 15000,
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
    // Line Charts
    var line_chart_demo = $("#line-chart-demo");
    var line_chart = Morris.Line({
        element: 'line-chart-demo',
        data: [{
                y: '2006',
                a: 100,
                b: 90
            },
            {
                y: '2007',
                a: 75,
                b: 65
            },
            {
                y: '2008',
                a: 50,
                b: 40
            },
            {
                y: '2009',
                a: 75,
                b: 65
            },
            {
                y: '2010',
                a: 50,
                b: 40
            },
            {
                y: '2011',
                a: 75,
                b: 65
            },
            {
                y: '2012',
                a: 100,
                b: 90
            }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['October 2013', 'November 2013'],
        redraw: true
    });
    line_chart_demo.parent().attr('style', '');

    // Donut Chart
    var donut_chart_demo = $("#donut-chart-demo");
    donut_chart_demo.parent().show();
    var donut_chart = Morris.Donut({
        element: 'donut-chart-demo',
        data: [{
                label: "Download Sales",
                value: getRandomInt(10, 50)
            },
            {
                label: "In-Store Sales",
                value: getRandomInt(10, 50)
            },
            {
                label: "Mail-Order Sales",
                value: getRandomInt(10, 50)
            }
        ],
        colors: ['#707f9b', '#455064', '#242d3c']
    });
    donut_chart_demo.parent().attr('style', '');

    // Area Chart
    var area_chart_demo = $("#area-chart-demo");
    area_chart_demo.parent().show();
    var area_chart = Morris.Area({
        element: 'area-chart-demo',
        data: [{
                y: '2006',
                a: 100,
                b: 90
            },
            {
                y: '2007',
                a: 75,
                b: 65
            },
            {
                y: '2008',
                a: 50,
                b: 40
            },
            {
                y: '2009',
                a: 75,
                b: 65
            },
            {
                y: '2010',
                a: 50,
                b: 40
            },
            {
                y: '2011',
                a: 75,
                b: 65
            },
            {
                y: '2012',
                a: 100,
                b: 90
            }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        lineColors: ['#303641', '#576277']
    });
    area_chart_demo.parent().attr('style', '');


    // Rickshaw
    var seriesData = [
        [],
        []
    ];
    var random = new Rickshaw.Fixtures.RandomData(50);
    for (var i = 0; i < 50; i++) {
        random.addData(seriesData);
    }
    var graph = new Rickshaw.Graph({
        element: document.getElementById("rickshaw-chart-demo"),
        height: 193,
        renderer: 'area',
        stroke: false,
        preserve: true,
        series: [{
            color: '#73c8ff',
            data: seriesData[0],
            name: 'Upload'
        }, {
            color: '#e0f2ff',
            data: seriesData[1],
            name: 'Download'
        }]
    });
    graph.render();
    var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        xFormatter: function(x) {
            return new Date(x * 1000).toString();
        }
    });
    var legend = new Rickshaw.Graph.Legend({
        graph: graph,
        element: document.getElementById('rickshaw-legend')
    });
    var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
        graph: graph,
        legend: legend
    });
    setInterval(function() {
        random.removeData(seriesData);
        random.addData(seriesData);
        graph.update();
    }, 500);
});

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>

<div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="tile-stats tile-white stat-tile">
            <h3>33,190</h3>
            <p>Customer Reach This Month</p> <span class="customer-reach"></span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tile-stats tile-white stat-tile">
            <h3>217 (345,567)</h3>
            <p>Sales this month</p> <span class="sales"></span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tile-stats tile-white stat-tile">
            <h3>1,580,300</h3>
            <p>All Time Sales</p> <span class="all-time-sales"></span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tile-stats tile-white stat-tile">
            <p>
                <span style="color: #ec3b83;">Clicked & Bought 43.8%</span> <br />
                <span style="color: #00acd6;">Clicked & Deleted 42.1%</span> <br />
                <span style="color: #e8b51b;">No Clicked 14.1%</span>
            </p> <span class="pie-chart"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary" id="charts_env">
            <div class="panel-heading">
                <div class="panel-title">Statistics</div>
                <div class="panel-options">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#area-chart" data-toggle="tab">Best vs Worst</a></li>
                        <li class="active"><a href="#line-chart" data-toggle="tab">Shown vs Clicked</a></li>
                        <li class=""><a href="#pie-chart" data-toggle="tab">Comparison Chart</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane" id="area-chart">
                        <div id="area-chart-demo" class="morrischart" style="height: 300px"></div>
                    </div>
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
                        <th class="padding-bottom-none text-center"> <br> <br> <span class="monthly-sales"><canvas
                                    width="262" height="80"
                                    style="display: inline-block; width: 262px; height: 80px; vertical-align: top;"></canvas></span>
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
                <div class="panel-options"> <a href="#sample-modal" data-toggle="modal"
                        data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#"
                        data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i
                            class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i
                            class="entypo-cancel"></i></a> </div>
            </div>
            <div class="panel-body with-table">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Offer</th>
                            <th>CTR</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Halloween</td>
                            <td>95%</td>
                            <td class="text-center"><span class="inlinebar">1,4,6,8,12,34,56</canvas></span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kiddo</td>
                            <td>93%</td>
                            <td class="text-center"><span class="inlinebar-2">4,7,10,5,12,15,19,25</span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>25% Discount</td>
                            <td>87%</td>
                            <td class="text-center"><span class="inlinebar-3">0,0,10,19,27,29</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>