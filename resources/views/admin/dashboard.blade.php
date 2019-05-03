@extends('admin.parent')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.fullscreen/dist/leaflet.fullscreen.css"/>
@stop

@section('content')
    <!-- region Page Content -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Yönetici Anasayfa</h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <span class="active">Yönetici Anasayfa</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{ $users->count() }}">0</span>
                            </div>
                            <div class="desc"> Kullanıcı Sayısı </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="{{ action('Admin\SectorController@index') }}">
                        <div class="visual">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="0">0</span> </div>
                            <div class="desc"> Etkinlik Sayısı</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{ $sectors->count() }}">0</span>
                            </div>
                            <div class="desc"> Sektörler</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="0"></span></div>
                            <div class="desc"> Online Kullanıcı</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- region Kullanıcı Etkinliği Katılım Listesi -->
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class=" icon-social-twitter font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Kullanıcı Etkinlik Katılım Listesi</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_actions_pending" data-toggle="tab" aria-expanded="true"> Devam Eden </a>
                                </li>
                                <li class="">
                                    <a href="#tab_actions_completed" data-toggle="tab" aria-expanded="false"> Tamamlanan </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body" style="height: 307px; overflow-y: scroll;">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_actions_pending">
                                    @for($i = 0; $i < 50; $i++)
                                    <!-- BEGIN: Actions -->
                                        <div class="mt-actions" style="width: 99%;">
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="{{ admin_asset('pages/media/users/avatar1.jpg')  }}" />
                                                </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="fa fa-calendar-o"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Mesut Polat</span>
                                                                <p class="mt-action-desc">Android 101</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">20 Ekim</span>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Actions -->
                                    @endfor
                                </div>
                                <div class="tab-pane" id="tab_actions_completed">
                                    @for($i = 0; $i < 20; $i++)
                                    <!-- BEGIN:Completed-->
                                        <div class="mt-actions" style="width: 99%;">
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="{{ admin_asset('pages/media/users/avatar1.jpg') }}">
                                                </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-action-redo"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Muharrem Özdemir</span>
                                                                <p class="mt-action-desc">Android 101</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">20 Ekim</span>
                                                            <span class="mt-action-dot bg-red"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END: Completed -->
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- endregion -->
                    <!-- region Online Kullanıcı Sayısı-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Online Kullanıcı Konumları</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="online-user-maps" style="height: 300px;"></div>
                        </div>
                    </div>
                    <!-- region Kullanıcı Edinimi-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Kullanıcı Edinimi</span>
                                <span class="caption-helper">aylık bazda...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_statistics_loading">
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading" /> </div>
                            <div id="site_statistics_content" class="display-none">
                                <div id="kullanici_edinimi" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- endregion-->
                    <!-- region Etkinlik İstatistiği-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Etkinlik İstatistiği</span>
                                <span class="caption-helper">aylık bazda...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="etkinlik_istatistigi_loading">
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading" /> </div>
                            <div id="etkinlik_istatistigi_content" class="display-none">
                                <div id="etkinlik_istatistigi" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- endregion-->
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- region Yorumlar -->
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Yorumlar</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_comments_1" data-toggle="tab"> Onay Bekleyen </a>
                                </li>
                                <li>
                                    <a href="#portlet_comments_2" data-toggle="tab"> Onaylanan </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content"  style="height: 300px; overflow-y: scroll;">
                                <div class="tab-pane active" id="portlet_comments_1">
                                @for($i = 0; $i < 10; $i++)
                                    <!-- BEGIN: Comments -->
                                        <div class="mt-comments" style="width: 99%">
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="{{ admin_asset('pages/media/users/avatar1.jpg') }}"> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                        <span class="mt-comment-date">21 Nisan</span>
                                                    </div>
                                                    <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">Arşivle</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Comments -->
                                    @endfor
                                </div>
                                <div class="tab-pane" id="portlet_comments_2">
                                @for($i = 0; $i < 10; $i++)
                                    <!-- BEGIN: Comments -->
                                        <div class="mt-comments">
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="{{ admin_asset('pages/media/users/avatar4.jpg') }}"> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">Michael Baker</span>
                                                        <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">Quick Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">View</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Comments -->
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- endregion -->
                    <!-- region Online Kullanıcı Sayısı-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Online Kullanıcı Sayısı</span>
                                <span class="caption-helper">saatlik bazda...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="online_user_statistics_loading">
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading" /> </div>
                            <div id="online_user_statistics_content" class="display-none">
                                <div id="online_user" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- endregion-->

                    <!-- region Sektör İstatistiği-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Sektör İstatistiği</span>
                                <span class="caption-helper">aylık bazda...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="sektor_istatistigi_loading">
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading" /> </div>
                            <div id="sektor_istatistigi_content" class="display-none">
                                <div id="sektor_istatistigi" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- endregion-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- endregion -->

@stop

@section('js')
{{--    <script>--}}
{{--        $(document).ready(function (){--}}
{{--            $('.portlet-body').slimScroll({--}}
{{--                height: '250px',--}}
{{--                wheelStep: 5,--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
<script src="{{ admin_asset('global/plugins/leaflet/Leaflet.fullscreen.js') }}" ></script>
<script src="{{ admin_asset('geojson.js') }}" type="text/javascript"></script>
<script>
    var map = L.map('online-user-maps', {
        fullscreenControl: true,
        fullscreenControlOptions: {
            position: 'topright',
            title: 'Tam Ekran Modu'
        }
    }).setView([41.0448525, 29.0204335], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var LeafIcon = L.Icon.extend({
        options: {
            iconSize:     [38, 95],
            shadowSize:   [50, 64],
            iconAnchor:   [22, 94],
            shadowAnchor: [4, 62],
            popupAnchor:  [-3, -76]
        }
    });

    var greenIcon = new LeafIcon({iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-red.png'});

    L.marker([41.0322435, 29.0275606], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);
    L.marker([41.0403672, 28.9132088], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);

</script>
<script>
    var Dashboard = function() {

        return {

            initCharts: function() {
                if (!jQuery.plot) {
                    return;
                }

                function showChartTooltip(x, y, xValue, yValue) {
                    $('<div id="tooltip" class="chart-tooltip">' + yValue + '<\/div>').css({
                        position: 'absolute',
                        display: 'none',
                        top: y - 40,
                        left: x - 40,
                        border: '0px solid #ccc',
                        padding: '2px 6px',
                        'background-color': '#fff'
                    }).appendTo("body").fadeIn(200);
                }

                var data = [];
                var totalPoints = 250;

                // random data generator for plot charts

                function getRandomData() {
                    if (data.length > 0) data = data.slice(1);
                    // do a random walk
                    while (data.length < totalPoints) {
                        var prev = data.length > 0 ? data[data.length - 1] : 50;
                        var y = prev + Math.random() * 10 - 5;
                        if (y < 0) y = 0;
                        if (y > 100) y = 100;
                        data.push(y);
                    }
                    // zip the generated y values with the x values
                    var res = [];
                    for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
                    return res;
                }

                function randValue() {
                    return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
                }

                var visitors = [
                    ['02/2013', 1500],
                    ['03/2013', 2500],
                    ['04/2013', 1700],
                    ['05/2013', 800],
                    ['06/2013', 1500],
                    ['07/2013', 2350],
                    ['08/2013', 1500],
                    ['09/2013', 1300],
                    ['10/2013', 4600]
                ];

                var visitors2 = [
                    ['02/2013', 1500],
                    ['03/2013', 2500],
                    ['04/2013', 1700],
                    ['05/2013', 800],
                    ['06/2013', 1500],
                    ['07/2013', 2350],
                    ['08/2013', 1500],
                    ['09/2013', 1300],
                    ['11/2013', 4600]
                ];

                var visitors3 = [
                    ['02/2013', 1500],
                    ['03/2013', 2500],
                    ['04/2013', 1700],
                    ['05/2013', 800],
                    ['06/2013', 1500],
                    ['07/2013', 2350],
                    ['08/2013', 1500],
                    ['09/2013', 1300],
                    ['11/2013', 4600]
                ];

                var visitors4 = [
                    ['02/2013', 1500],
                    ['03/2013', 2500],
                    ['04/2013', 1700],
                    ['05/2013', 800],
                    ['06/2013', 1500],
                    ['07/2013', 2350],
                    ['08/2013', 1500],
                    ['09/2013', 1300],
                    ['11/2013', 4600]
                ];


                if ($('#kullanici_edinimi').size() != 0) {

                    $('#site_statistics_loading').hide();
                    $('#site_statistics_content').show();

                    var plot_statistics = $.plot($("#kullanici_edinimi"), [{
                            data: visitors,
                            lines: {
                                fill: 0.6,
                                lineWidth: 0
                            },
                            color: ['#f89f9f']
                        }, {
                            data: visitors,
                            points: {
                                show: true,
                                fill: true,
                                radius: 5,
                                fillColor: "#f89f9f",
                                lineWidth: 3
                            },
                            color: '#fff',
                            shadowSize: 0
                        }],

                        {
                            xaxis: {
                                tickLength: 0,
                                tickDecimals: 0,
                                mode: "categories",
                                min: 0,
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            yaxis: {
                                ticks: 5,
                                tickDecimals: 0,
                                tickColor: "#eee",
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                tickColor: "#eee",
                                borderColor: "#eee",
                                borderWidth: 1
                            }
                        });

                    var previousPoint = null;
                    $("#kullanici_edinimi").bind("plothover", function(event, pos, item) {
                        $("#x").text(pos.x.toFixed(2));
                        $("#y").text(pos.y.toFixed(2));
                        if (item) {
                            if (previousPoint != item.dataIndex) {
                                previousPoint = item.dataIndex;

                                $("#tooltip").remove();
                                var x = item.datapoint[0].toFixed(2),
                                    y = item.datapoint[1].toFixed(2);

                                showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' visits');
                            }
                        } else {
                            $("#tooltip").remove();
                            previousPoint = null;
                        }
                    });
                }

                if ($('#etkinlik_istatistigi').size() != 0) {

                    $('#etkinlik_istatistigi_loading').hide();
                    $('#etkinlik_istatistigi_content').show();

                    var plot_statistics2 = $.plot($("#etkinlik_istatistigi"), [{
                            data: visitors2,
                            lines: {
                                fill: 0.6,
                                lineWidth: 0
                            },
                            color: ['#f89f9f']
                        }, {
                            data: visitors2,
                            points: {
                                show: true,
                                fill: true,
                                radius: 5,
                                fillColor: "#f89f9f",
                                lineWidth: 3
                            },
                            color: '#fff',
                            shadowSize: 0
                        }],

                        {
                            xaxis: {
                                tickLength: 0,
                                tickDecimals: 0,
                                mode: "categories",
                                min: 0,
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            yaxis: {
                                ticks: 5,
                                tickDecimals: 0,
                                tickColor: "#eee",
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                tickColor: "#eee",
                                borderColor: "#eee",
                                borderWidth: 1
                            }
                        });

                    var previousPoint2 = null;
                    $("#etkinlik_istatistigi").bind("plothover", function(event, pos, item) {
                        $("#x").text(pos.x.toFixed(2));
                        $("#y").text(pos.y.toFixed(2));
                        if (item) {
                            if (previousPoint2 != item.dataIndex) {
                                previousPoint2 = item.dataIndex;

                                $("#tooltip").remove();
                                var x = item.datapoint[0].toFixed(2),
                                    y = item.datapoint[1].toFixed(2);

                                showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' visits');
                            }
                        } else {
                            $("#tooltip").remove();
                            previousPoint2 = null;
                        }
                    });
                }

                if ($('#sektor_istatistigi').size() != 0) {

                    $('#sektor_istatistigi_loading').hide();
                    $('#sektor_istatistigi_content').show();

                    var plot_statistics3 = $.plot($("#sektor_istatistigi"), [{
                            data: visitors3,
                            lines: {
                                fill: 0.6,
                                lineWidth: 0
                            },
                            color: ['#f89f9f']
                        }, {
                            data: visitors3,
                            points: {
                                show: true,
                                fill: true,
                                radius: 5,
                                fillColor: "#f89f9f",
                                lineWidth: 3
                            },
                            color: '#fff',
                            shadowSize: 0
                        }],

                        {
                            xaxis: {
                                tickLength: 0,
                                tickDecimals: 0,
                                mode: "categories",
                                min: 0,
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            yaxis: {
                                ticks: 5,
                                tickDecimals: 0,
                                tickColor: "#eee",
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                tickColor: "#eee",
                                borderColor: "#eee",
                                borderWidth: 1
                            }
                        });

                    var previousPoint3 = null;
                    $("#sektor_istatistigi").bind("plothover", function(event, pos, item) {
                        $("#x").text(pos.x.toFixed(2));
                        $("#y").text(pos.y.toFixed(2));
                        if (item) {
                            if (previousPoint3 != item.dataIndex) {
                                previousPoint3 = item.dataIndex;

                                $("#tooltip").remove();
                                var x = item.datapoint[0].toFixed(2),
                                    y = item.datapoint[1].toFixed(2);

                                showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' visits');
                            }
                        } else {
                            $("#tooltip").remove();
                            previousPoint3 = null;
                        }
                    });
                }

                if ($('#online_user').size() != 0) {

                    $('#online_user_statistics_loading').hide();
                    $('#online_user_statistics_content').show();

                    var plot_statistics4 = $.plot($("#online_user"), [{
                            data: visitors4,
                            lines: {
                                fill: 0.6,
                                lineWidth: 0
                            },
                            color: ['#f89f9f']
                        }, {
                            data: visitors4,
                            points: {
                                show: true,
                                fill: true,
                                radius: 5,
                                fillColor: "#f89f9f",
                                lineWidth: 3
                            },
                            color: '#fff',
                            shadowSize: 0
                        }],

                        {
                            xaxis: {
                                tickLength: 0,
                                tickDecimals: 0,
                                mode: "categories",
                                min: 0,
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            yaxis: {
                                ticks: 5,
                                tickDecimals: 0,
                                tickColor: "#eee",
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                tickColor: "#eee",
                                borderColor: "#eee",
                                borderWidth: 1
                            }
                        });

                    var previousPoint4 = null;
                    $("#online_user").bind("plothover", function(event, pos, item) {
                        $("#x").text(pos.x.toFixed(2));
                        $("#y").text(pos.y.toFixed(2));
                        if (item) {
                            if (previousPoint4 != item.dataIndex) {
                                previousPoint4 = item.dataIndex;

                                $("#tooltip").remove();
                                var x = item.datapoint[0].toFixed(2),
                                    y = item.datapoint[1].toFixed(2);

                                showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' visits');
                            }
                        } else {
                            $("#tooltip").remove();
                            previousPoint4 = null;
                        }
                    });
                }


            },

            init: function() {
                this.initCharts();
            }
        };

    }();

    if (App.isAngularJsApp() === false) {
        jQuery(document).ready(function() {
            Dashboard.init(); // init metronic core componets
        });
    }
</script>
@stop