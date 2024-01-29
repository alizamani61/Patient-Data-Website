<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="overflow: visible;">
<!--        <span class="count_top"><i class="fa fa-user"></i> Total Patients</span>
        <div class="count"><?= $TotalPatientCount ?></div>
        <span class="count_bottom"><i class="green"></i> </span>-->
        <span class="count_top"><i class="fa fa-user"></i> Total Patients</span>
        <br/><br/>
        <div class="btn-group">
            <button type="button" class="btn btn-default"><i class="fa fa-user"></i>&nbsp;<?= $TotalPatientCount ?></button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" style="z-index: 1002">
                <li><a href="#">Male&nbsp;&nbsp;<span class="badge"><?= $TotalMalePatients ?></span></a></li>
                <li><a href="#">Female&nbsp;&nbsp;<span class="badge"><?= $TotalFemalePatients ?></span></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="overflow: visible;">
        <span class="count_top"><i class="fa fa-user"></i> Operated Patients</span>
        <br/><br/>
        <div class="btn-group">
            <button type="button" class="btn btn-default"><i class="fa fa-user"></i>&nbsp;<?= $OperatedPatientCount[0] ?></button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" style="z-index: 1002">
                <li><a href="#">Male&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["total_operated_male"] ?></span></a></li>
                <li><a href="#">Female&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["total_operated_female"] ?></span></a></li>
                <li><a href="#">Sleeve Gastrectomy&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["sleeve_gas_count"] ?></span></a></li>
                <li><a href="#">Gastric Bypass&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["gastric_bypass"] ?></span></a></li>
                <li><a href="#">Sasi Bypass&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["sasibypass_count"] ?></span></a></li>
                <li><a href="#">Sadi Bypass&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["sadibypass_count"] ?></span></a></li>
                <li><a href="#">Mini Bypass&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["minibypass_count"] ?></span></a></li>
                <li><a href="#">Vertical band gastroplasty&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["vertical_band_gastroplasty"] ?></span></a></li>
                <li><a href="#">Duodenal Switch&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["duodenal_switch"] ?></span></a></li>
                <li><a href="#">Redo Sleeve&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["redo_count"] ?></span></a></li>
                <li><a href="#">Redo Bypass&nbsp;&nbsp;<span class="badge"><?= $OperatedPatientDetailCount[0]["redobypass_count"] ?></span></a></li>

            </ul>
        </div>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Comorbidity</span>
        <br/><br/>
        <div class="btn-group">
            <button type="button" class="btn btn-default"><i class="fa fa-user"></i>&nbsp;<?= $TotalMorbid[0][0] ?></button>

        </div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Mortality</span>
        <br/><br/>
        <div class="btn-group">
            <button type="button" class="btn btn-default"><i class="fa fa-user"></i>&nbsp;<?= $TotalMortality[0][0] ?></button>
        </div>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Mortality</span>
        <br/><br/>
        <div class="btn-group">
            <button type="button" class="btn btn-default"><i class="fa fa-user"></i>&nbsp;<?= $TotalMortality[0][0] ?></button>

        </div>
    </div>
</div>
<!-- /top tiles -->

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph x_panel">
            <div class="row x_title">
                <div class="col-md-6">
                    <h3>Average Weight Loss</h3>
                </div>
                <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                </div>
            </div>
            <div class="x_content">
                <div class="demo-container" style="height:250px">
                    <div id="placeholder3xx3" class="demo-placeholder" style="width: 100%; height:250px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<div class="row">


    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320">
            <div class="x_title">
                <h2>App Versions</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h4>App Usage across versions</h4>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
            <div class="x_title">
                <h2>Diabetic patients</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="diabetic-chart" style="width:100%">
                    <tr>
                        <th style="width:37%;">
                    <p></p>
                    </th>
                    <th>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <p class=""></p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <p class="">Count</p>
                    </div>
                    </th>
                    </tr>
                    <tr>
                        <td>
                            <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                        </td>
                        <td>
                            <table class="tile_info">

                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320">
            <div class="x_title">
                <h2>Quick Settings</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="dashboard-widget-content">
                    <ul class="quick-list">
                        <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                        </li>
                        <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                        </li>
                        <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                        <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                        </li>
                        <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                        <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                        </li>
                        <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                        </li>
                    </ul>

                    <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                            <span class="gauge-value pull-left">$</span>
                            <span id="gauge-text" class="gauge-value pull-left">3,200</span>
                            <span id="goal-text" class="goal-value pull-right">$5,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tooltip" style="position: absolute"></div>
</div>


<script>
    $(document).ready(function () {

        $.ajax({
            url: "/ObesityPortal/process.php?getlossweight=1",
            type: "GET",
            contentType: 'JSON',
            success: function (result) {
                var rs = $.parseJSON(result);
                var options = {
                    series: {
                        bars: {
                            show: true
                        }
                    },
                    bars: {
                        align: "center",
                        barWidth: 0.5
                    },
                    xaxis: {
                        mode: "categories",
                        tickLength: 0, // hide gridlines
                        axisLabelUseCanvas: true,
                        axisLabelFontSizePixels: 12,
                        axisLabelFontFamily: 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
                        axisLabelPadding: 5,
                    },
                    yaxis: {
                        axisLabel: '%',
                        axisLabelUseCanvas: true,
                        axisLabelFontSizePixels: 12,
                        axisLabelFontFamily: 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
                        axisLabelPadding: 5,
                        tickSize: 10,
                        tickFormatter: function (val, axis) {
                            return val + "";
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: false,
                        borderWidth: 0,
                        borderColor: '#f0f0f0',
                        labelMargin: 8,
                    }, legend: {
                        show: false,
                    },
                    tooltip: true,
                    tooltipOpts: {
                        id: "chart-tooltip",
                        content: "<p><b>20</b> Outgoing Filings</p>" +
                                "<p>Out of <b>10</b> committed;</p>" +
                                "<br />" +
                                "<p><b>30%</b>% Ratio</p>",
                        shifts: {
                            x: -74,
                            y: -125
                        },
                        lines: {
                            track: true
                        },
                        compat: true,
                    },
                };
                var plot = $.plot($("#placeholder3xx3"), [rs], options);

//                $("#placeholder3xx3").bind("plothover", function (event, pos, item) {
//                    // if the mouse is over a point
//                    // the callback function will get an item (the point)
//                    // if the mouse is not over a point it will be null
//                    if (item) {
//                        // x, y are the graph coordinates in your x/y axis units
//                        var x = item.datapoint[0].toFixed(2),
//                                y = item.datapoint[1].toFixed(2);
//                        // pageY, pageX are the screen coordinates in pixels
//                        // this will set the tooltip div's html
//                        // then set the position of the div on the screen
//                        // then show it
//                        $("#tooltip").html(y)
//                                .css({top: item.pageY, left: item.pageX - (window.clientWidth - item.pageX)})
//                                .fadeIn(200);
//                    } else {
//                        // if you aren't over a point
//                        // item is null, so hide the tooltip
//                        $("#tooltip").hide();
//                    }
//                })
            }

        });
//        $.getJSON("/ObesityPortal/process.php?getlossweight=1", function (data) {
//            alert(data)
//            //var d1 = [["1395/01", 10], ["1395/02", 8], ["1395/03", 4], ["1395/04", 13], ["1395/05", 17], ["1395/06", 9]];
//
//            //flot options
//            
//        }
    });</script>
<!-- /Flot -->

<!-- JQVMap -->
<script>
    $(document).ready(function () {
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
    });</script>
<!-- /JQVMap -->

<!-- Skycons -->
<script>
    $(document).ready(function () {
        var icons = new Skycons({
            "color": "#73879C"
        }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;
        for (i = list.length; i--; )
            icons.set(list[i], list[i]);
        icons.play();
    });</script>
<!-- /Skycons -->

<!-- Doughnut Chart -->
<script>
    $(document).ready(function () {
        var options = {
            legend: true,
            responsive: false
        };
        $.getJSON("/ObesityPortal/process.php?getdiabet=1", function (data) {
            new Chart(document.getElementById("canvas1"), {
                type: 'doughnut',
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                data: data,
                options: options
            });
            var $tile_info = $(".diabetic-chart").find(".tile_info");
            $tile_info.empty();
            $.each(data.labels, function (i, el) {
                //alert(data.datasets[0].backgroundColor[i])
                $tile_info.append("<tr><td><p><i class='fa fa-square' style='color:" + data.datasets[0].backgroundColor[i] + "' ></i>" + el + "</p></td><td>" + data.datasets[0].data[i] + "</td></tr>");
            })
        });
    });</script>
<!-- /Doughnut Chart -->

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function () {

        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };
        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function () {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function () {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function () {
            $('#reportrange').data('daterangepicker').remove();
        });
    });</script>
<!-- /bootstrap-daterangepicker -->

<!-- gauge.js -->
<script>
    var opts = {
        lines: 12,
        angle: 0,
        lineWidth: 0.4,
        pointer: {
            length: 0.75,
            strokeWidth: 0.042,
            color: '#1D212A'
        },
        limitMax: 'false',
        colorStart: '#1ABC9C',
        colorStop: '#1ABC9C',
        strokeColor: '#F0F3F3',
        generateGradient: true
    };
    var target = document.getElementById('foo'),
            gauge = new Gauge(target).setOptions(opts);
    gauge.maxValue = 6000;
    gauge.animationSpeed = 32;
    gauge.set(3200);
    gauge.setTextField(document.getElementById("gauge-text"));
</script>
<!-- /gauge.js -->
