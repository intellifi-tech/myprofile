@extends('admin.parent')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.fullscreen/dist/leaflet.fullscreen.css"/>
    <style>
        .leaflet-fade-anim .leaflet-map-pane .leaflet-popup {
            bottom: -28px !important;
        }
    </style>
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
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ action('Admin\UserController@index') }}">
                        <div class="visual">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{ $users->count() }}">0</span>
                            </div>
                            <div class="desc"> Kullanıcı Sayısı</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="{{ action('Admin\EventController@index') }}">
                        <div class="visual">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="0">0</span></div>
                            <div class="desc"> Etkinlik Sayısı</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="{{ action('Admin\SectorController@index') }}">
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
                                    <a href="#tab_actions_pending" data-toggle="tab" aria-expanded="true"> Devam
                                        Eden </a>
                                </li>
                                <li class="">
                                    <a href="#tab_actions_completed" data-toggle="tab" aria-expanded="false">
                                        Tamamlanan </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body" style="height: 350px; overflow-y: scroll;">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_actions_pending">
                                    @if($userOngoingsEvents->count() > 0)
                                        @foreach($userOngoingsEvents as $userOngoingsEvent)
                                            <div class="mt-actions" style="width: 99%;">
                                                <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        @if(is_null($userOngoingsEvent->user->profile_photo))
                                                            <img src="{{ user_profile_image_path() . "no-profile.png"  }}" style="width: 50px; height: 50px" class="img-circle" />
                                                        @else
                                                            <img src="{{ user_profile_image_path() . $userOngoingsEvent->user->profile_photo  }}" style="width: 50px; height: 50px" class="img-circle" />
                                                        @endif
                                                    </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">{!! $userOngoingsEvent->user->name .' '. $userOngoingsEvent->user->surname!!}</span>
                                                                    <p class="mt-action-desc">{!! $userOngoingsEvent->event->title !!}</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt-action-date">{!! \Carbon\Carbon::parse($userOngoingsEvent->date_of_participation)->format('Y-d-m') !!}</span>
                                                                <span class="mt-action-dot bg-green"></span>
                                                                <span class="mt=action-time">{!! \Carbon\Carbon::parse($userOngoingsEvent->date_of_participation)->format('H:i') !!}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Şu an devam eden herhangi bir etkinlik bulunmuyor.</p>
                                    @endif
                                </div>
                                <div class="tab-pane" id="tab_actions_completed">
                                    @if($completedOngoingsEvents->count() > 0)
                                        @foreach($completedOngoingsEvents as $completedOngoingsEvent)
                                            <div class="mt-actions" style="width: 99%;">
                                                <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        @if(is_null($completedOngoingsEvent->user->profile_photo))
                                                            <img src="{{ user_profile_image_path() . "no-profile.png"  }}" style="width: 50px; height: 50px" class="img-circle" />
                                                        @else
                                                            <img src="{{ user_profile_image_path() . $completedOngoingsEvent->user->profile_photo  }}" style="width: 50px; height: 50px" class="img-circle" />
                                                        @endif
                                                    </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">{!! $completedOngoingsEvent->user->name .' '. $completedOngoingsEvent->user->surname!!}</span>
                                                                    <p class="mt-action-desc">{!! $completedOngoingsEvent->event->title !!}</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt-action-date">{!! \Carbon\Carbon::parse($completedOngoingsEvent->date_of_participation)->format('Y-d-m') !!}</span>
                                                                <span class="mt-action-dot bg-red"></span>
                                                                <span class="mt=action-time">{!! \Carbon\Carbon::parse($completedOngoingsEvent->date_of_participation)->format('H:i') !!}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Şu an devam eden herhangi bir etkinlik bulunmuyor.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- endregion -->
                    <!-- region Kullanıcı Etkinliği Katılım Listesi -->
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class=" icon-social-twitter font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Online Kullanıcı Konumları</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active" onclick="five()">
                                    <a href="#five_seconds" data-toggle="tab" aria-expanded="true"> 5 saniye </a>
                                </li>
                                <li class="" onclick="thirty()">
                                    <a href="#ten_seconds" data-toggle="tab" aria-expanded="false"> 30 saniye </a>
                                </li>
                                <li class="" onclick="one()">
                                    <a href="#one_minute" data-toggle="tab" aria-expanded="false"> 1 dakika</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body" style="height: 307px">
                            <div class="tab-content">
                                <div class="tab-pane active" id="five_seconds">
                                    <div id="five_seconds_online_user_maps" style="height: 300px;"></div>
                                </div>
                                <div class="tab-pane" id="ten_seconds">
                                    <div id="thirty_seconds_online_user_maps" style="height: 300px;"></div>
                                </div>
                                <div class="tab-pane" id="one_minute">
                                    <div id="one_minutes_online_user_maps" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Kullanıcı Edinimi</span>
                                <span class="caption-helper">aylık bazda...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="kullanici_edinimi_loading">
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading"/></div>
                            <div id="kullanici_edinimi_content" class="display-none">
                                <div id="kullanici_edinimi" class="chart"></div>
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
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading"/></div>
                            <div id="etkinlik_istatistigi_content" class="display-none">
                                <div id="etkinlik_istatistigi" class="chart"></div>
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
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content" style="height: 344px; overflow-y: scroll;">
                                <div class="tab-pane active" id="portlet_comments_1">
                                @if($comments->count() > 0)
                                    @foreach($comments as $comment)
                                        <!-- BEGIN: Comments -->
                                            <div class="mt-comments" style="width: 99%">
                                                <div class="mt-comment">
                                                    <div class="mt-comment-img">
                                                        @if(is_null($comment->user->profile_photo))
                                                            <img src="{{ user_profile_image_path() . "no-profile.png"  }}" style="width: 50px; height: 50px" class="img-circle" />
                                                        @else
                                                            <img src="{{ user_profile_image_path() . $comment->user->profile_photo  }}" style="width: 50px; height: 50px" class="img-circle" />
                                                        @endif
                                                    </div>
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{!! $comment->event->title !!}</span>
                                                            <span class="mt-comment-date">{!! \Carbon\Carbon::parse($comment->created_at)->format('d-M') !!}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> {!! $comment->comment !!} </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END: Comments -->
                                        @endforeach
                                    @else
                                        Bu kullanıcı henüz bir yorum yapmamış.
                                    @endif

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
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading"/></div>
                            <div id="online_user_statistics_content" class="display-none">
                                <div id="online_user" class="chart"></div>
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
                                <img src="{{ admin_asset('global/img/loading.gif') }}" alt="loading"/></div>
                            <div id="sektor_istatistigi_content" class="display-none">
                                <div id="sektor_istatistigi" class="chart"></div>
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

    <script>
        function hourlyOnlineUserCount() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.hourlyOnlineUserCount')}}",
                type: "POST",
                timeout: 10000,
                data: {1: 1},
                success: function (response) {
                    var a1 = [];

                    var onlineUser = [];
                    Object.keys(response).sort().forEach(function(key) {
                        a1.push(key, response[key]);
                        onlineUser.push(a1);
                        a1 = [];
                    });

                    if ($('#online_user').size() != 0) {

                        $('#online_user_statistics_loading').hide();
                        $('#online_user_statistics_content').show();

                        $.plot($("#online_user"), [{
                                data: onlineUser,
                                lines: {
                                    fill: 0.6,
                                    lineWidth: 0
                                },
                                color: ['#f89f9f'] // Çizginin oluşturduğu alanın resmi
                            }, {
                                data: onlineUser,
                                points: {
                                    show: true,
                                    fill: true,
                                    radius: 5,
                                    fillColor: "#FF0000", // Noktaların rengi
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

                        $("#online_user").bind("plothover", function (event, pos, item) {
                            $("#x").text(pos.x.toFixed(2));
                            $("#y").text(pos.y.toFixed(2));
                            if (item) {
                                if (previousPoint4 != item.dataIndex) {
                                    previousPoint4 = item.dataIndex;

                                    $("#tooltip").remove();
                                    var x = item.datapoint[0].toFixed(2),
                                        y = item.datapoint[1].toFixed(2);

                                    showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' kişi');
                                }
                            } else {
                                $("#tooltip").remove();
                                previousPoint4 = null;
                            }
                        });
                    }
                }
            });
        }

        function monthlyUserAcquisition() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.monthlyUserAcquisition')}}",
                type: "POST",
                timeout: 10000,
                data: {1: 1},
                success: function (response) {
                    var a1 = [];

                    var mounthUserCounts = [];
                    Object.keys(response).sort().forEach(function(key) {
                        a1.push(key, response[key]);
                        mounthUserCounts.push(a1);
                        a1 = [];
                    });

                    if ($('#kullanici_edinimi').size() != 0) {

                        $('#kullanici_edinimi_loading').hide();
                        $('#kullanici_edinimi_content').show();

                        $.plot($("#kullanici_edinimi"), [{
                                data: mounthUserCounts,
                                lines: {
                                    fill: 0.6,
                                    lineWidth: 0
                                },
                                color: ['#f89f9f'] // Çizginin oluşturduğu alanın resmi
                            }, {
                                data: mounthUserCounts,
                                points: {
                                    show: true,
                                    fill: true,
                                    radius: 5,
                                    fillColor: "#FF0000", // Noktaların rengi
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

                        $("#kullanici_edinimi").bind("plothover", function (event, pos, item) {
                            $("#x").text(pos.x.toFixed(2));
                            $("#y").text(pos.y.toFixed(2));
                            if (item) {
                                if (previousPoint4 != item.dataIndex) {
                                    previousPoint4 = item.dataIndex;

                                    $("#tooltip").remove();
                                    var x = item.datapoint[0].toFixed(2),
                                        y = item.datapoint[1].toFixed(2);

                                    showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' kişi');
                                }
                            } else {
                                $("#tooltip").remove();
                                previousPoint4 = null;
                            }
                        });
                    }
                }
            });
        }

        function sectorStatistics() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.hourlyOnlineUserCount')}}",
                type: "POST",
                timeout: 10000,
                data: {1: 1},
                success: function (response) {
                    var a1 = [];

                    var onlineUser = [];
                    Object.keys(response).sort().forEach(function(key) {
                        a1.push(key, response[key]);
                        onlineUser.push(a1);
                        a1 = [];
                    });

                    if ($('#sektor_istatistigi').size() != 0) {

                        $('#sektor_istatistigi_loading').hide();
                        $('#sektor_istatistigi_content').show();

                        $.plot($("#sektor_istatistigi"), [{
                                data: onlineUser,
                                lines: {
                                    fill: 0.6,
                                    lineWidth: 0
                                },
                                color: ['#f89f9f'] // Çizginin oluşturduğu alanın resmi
                            }, {
                                data: onlineUser,
                                points: {
                                    show: true,
                                    fill: true,
                                    radius: 5,
                                    fillColor: "#FF0000", // Noktaların rengi
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

                        $("#online_user").bind("plothover", function (event, pos, item) {
                            $("#x").text(pos.x.toFixed(2));
                            $("#y").text(pos.y.toFixed(2));
                            if (item) {
                                if (previousPoint4 != item.dataIndex) {
                                    previousPoint4 = item.dataIndex;

                                    $("#tooltip").remove();
                                    var x = item.datapoint[0].toFixed(2),
                                        y = item.datapoint[1].toFixed(2);

                                    showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' kişi');
                                }
                            } else {
                                $("#tooltip").remove();
                                previousPoint4 = null;
                            }
                        });
                    }
                }
            });
        }

        function eventStatistics() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.hourlyOnlineUserCount')}}",
                type: "POST",
                timeout: 10000,
                data: {1: 1},
                success: function (response) {
                    var a1 = [];

                    var onlineUser = [];
                    Object.keys(response).sort().forEach(function(key) {
                        a1.push(key, response[key]);
                        onlineUser.push(a1);
                        a1 = [];
                    });

                    if ($('#etkinlik_istatistigi').size() != 0) {

                        $('#etkinlik_istatistigi_loading').hide();
                        $('#etkinlik_istatistigi_content').show();

                        $.plot($("#etkinlik_istatistigi"), [{
                                data: onlineUser,
                                lines: {
                                    fill: 0.6,
                                    lineWidth: 0
                                },
                                color: ['#f89f9f'] // Çizginin oluşturduğu alanın resmi
                            }, {
                                data: onlineUser,
                                points: {
                                    show: true,
                                    fill: true,
                                    radius: 5,
                                    fillColor: "#FF0000", // Noktaların rengi
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

                        $("#online_user").bind("plothover", function (event, pos, item) {
                            $("#x").text(pos.x.toFixed(2));
                            $("#y").text(pos.y.toFixed(2));
                            if (item) {
                                if (previousPoint4 != item.dataIndex) {
                                    previousPoint4 = item.dataIndex;

                                    $("#tooltip").remove();
                                    var x = item.datapoint[0].toFixed(2),
                                        y = item.datapoint[1].toFixed(2);

                                    showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' kişi');
                                }
                            } else {
                                $("#tooltip").remove();
                                previousPoint4 = null;
                            }
                        });
                    }
                }
            });
        }


    </script>

    <!-- region Online Kullanıcı Konumları -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
            integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
            crossorigin=""></script>
    <script src="{{ admin_asset('global/plugins/leaflet/Leaflet.fullscreen.js') }}"></script>
    <script>

        $(document).ready(function () {
            hourlyOnlineUserCount();
            monthlyUserAcquisition();
            sectorStatistics();
            eventStatistics();
        });

        let fiveSeconds = setInterval(function () {
            fiveSecondsGetOnlineUserCoordinates();
        }, 5000);

        let thirtySeconds = setInterval(function () {
            thirtySecondsGetOnlineUserCoordinates();
        }, 30000);

        let oneMinutes = setInterval(function () {
            oneMinutesGetOnlineUserCoordinates();
        }, 60000);

        let oneHour = setInterval(function () {
            hourlyOnlineUserCount();
        }, 3600000);

        let mapFive = L.map('five_seconds_online_user_maps', {
            fullscreenControl: true,
            fullscreenControlOptions: {
                position: 'topright',
                title: 'Tam Ekran Modu'
            }
        }).setView([41.0448525, 29.0204335], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapFive);

        mapFive.scrollWheelZoom.disable();

        let markerGroupFive = L.layerGroup().addTo(mapFive);

        let mapThirty = L.map('thirty_seconds_online_user_maps', {
            fullscreenControl: true,
            fullscreenControlOptions: {
                position: 'topright',
                title: 'Tam Ekran Modu'
            }
        }).setView([41.0448525, 29.0204335], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapThirty);

        mapThirty.scrollWheelZoom.disable();

        let markerGroupThirty = L.layerGroup().addTo(mapThirty);

        let mapOne = L.map('one_minutes_online_user_maps', {
            fullscreenControl: true,
            fullscreenControlOptions: {
                position: 'topright',
                title: 'Tam Ekran Modu'
            }
        }).setView([41.0448525, 29.0204335], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapOne);

        mapOne.scrollWheelZoom.disable();

        let markerGroupOne = L.layerGroup().addTo(mapOne);

        function fiveSecondsGetOnlineUserCoordinates() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ action('Admin\UserController@getOnlineUserCoordinates')}}",
                type: "POST",
                dataType: "JSON",
                timeout: 10000,
                data: {obj: 1},
                success: function (response) {
                    // Var Olan Markerlar siliniyor
                    markerGroupFive.clearLayers();

                    // Icon Özellikleri
                    var LeafIcon = L.Icon.extend({
                        options: {
                            iconSize: [38, 60],
                            shadowSize: [50, 34],
                            iconAnchor: [22, 55],
                            shadowAnchor: [4, 62],
                            popupAnchor: [-3, -76]
                        }
                    });

                    // Marker Görseli
                    var greenIcon = new LeafIcon({iconUrl: '{{ admin_asset('global/img/user-marker.png') }}'});

                    // Gelen Kordinatlar Marker üretiliyor
                    $.each(response, function (i, coordinate) {
                        L.marker([coordinate.latitude, coordinate.longitude], {icon: greenIcon}).bindPopup(coordinate.user.name + ' ' + coordinate.user.surname).addTo(markerGroupFive);
                    });
                }
            });
        }

        function thirtySecondsGetOnlineUserCoordinates() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ action('Admin\UserController@getOnlineUserCoordinates')}}",
                type: "POST",
                dataType: "JSON",
                timeout: 10000,
                data: {obj: 1},
                success: function (response) {
                    // Var Olan Markerlar siliniyor
                    markerGroupThirty.clearLayers();

                    // Icon Özellikleri
                    var LeafIcon = L.Icon.extend({
                        options: {
                            iconSize: [38, 60],
                            shadowSize: [50, 34],
                            iconAnchor: [22, 55],
                            shadowAnchor: [4, 62],
                            popupAnchor: [-3, -76]
                        }
                    });

                    // Marker Görseli
                    var greenIcon = new LeafIcon({iconUrl: '{{ admin_asset('global/img/user-marker.png') }}'});

                    // Gelen Kordinatlar Marker üretiliyor
                    $.each(response, function (i, coordinate) {
                        L.marker([coordinate.latitude, coordinate.longitude], {icon: greenIcon}).bindPopup(coordinate.user.name + ' ' + coordinate.user.surname).addTo(markerGroupThirty);
                    });
                }
            });
        }

        function oneMinutesGetOnlineUserCoordinates() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ action('Admin\UserController@getOnlineUserCoordinates')}}",
                type: "POST",
                dataType: "JSON",
                timeout: 10000,
                data: {obj: 1},
                success: function (response) {
                    // Var Olan Markerlar siliniyor
                    markerGroupOne.clearLayers();

                    // Icon Özellikleri
                    var LeafIcon = L.Icon.extend({
                        options: {
                            iconSize: [38, 60],
                            shadowSize: [50, 34],
                            iconAnchor: [22, 55],
                            shadowAnchor: [4, 62],
                            popupAnchor: [-3, -76]
                        }
                    });

                    // Marker Görseli
                    var greenIcon = new LeafIcon({iconUrl: '{{ admin_asset('global/img/user-marker.png') }}'});

                    // Gelen Kordinatlar Marker üretiliyor
                    $.each(response, function (i, coordinate) {
                        L.marker([coordinate.latitude, coordinate.longitude], {icon: greenIcon}).bindPopup(coordinate.user.name + ' ' + coordinate.user.surname).addTo(markerGroupOne);
                    });
                }
            });
        }


    </script>
    <!-- endregion -->

    <script>

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



        // var Dashboard = function () {
        //
        //     return {
        //
        //         initCharts: function () {
        //             if (!jQuery.plot) {
        //                 return;
        //             }
        //
        //             function showChartTooltip(x, y, xValue, yValue) {
        //                 $('<div id="tooltip" class="chart-tooltip">' + yValue + '<\/div>').css({
        //                     position: 'absolute',
        //                     display: 'none',
        //                     top: y - 40,
        //                     left: x - 40,
        //                     border: '0px solid #ccc',
        //                     padding: '2px 6px',
        //                     'background-color': '#fff'
        //                 }).appendTo("body").fadeIn(200);
        //             }
        //
        //             var data = [];
        //             var totalPoints = 250;
        //
        //             // random data generator for plot charts
        //
        //             function getRandomData() {
        //                 if (data.length > 0) data = data.slice(1);
        //                 // do a random walk
        //                 while (data.length < totalPoints) {
        //                     var prev = data.length > 0 ? data[data.length - 1] : 50;
        //                     var y = prev + Math.random() * 10 - 5;
        //                     if (y < 0) y = 0;
        //                     if (y > 100) y = 100;
        //                     data.push(y);
        //                 }
        //                 // zip the generated y values with the x values
        //                 var res = [];
        //                 for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
        //                 return res;
        //             }
        //
        //             function randValue() {
        //                 return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
        //             }
        //
        //
        //
        //             var onlineUser = [
        //                 ['10', 1500],
        //                 ['11', 2500],
        //                 ['12', 1700],
        //                 ['13', 800],
        //                 ['14', 1500],
        //                 ['15', 2350],
        //                 ['16', 1500],
        //                 ['17', 1300],
        //                 ['18', 4600]
        //             ];
        //
        //             if ($('#online_user').size() != 0) {
        //
        //                 $('#online_user_statistics_loading').hide();
        //                 $('#online_user_statistics_content').show();
        //
        //                 var plot_statistics4 = $.plot($("#online_user"), [{
        //                         data: onlineUser,
        //                         lines: {
        //                             fill: 0.6,
        //                             lineWidth: 0
        //                         },
        //                         color: ['#f89f9f']
        //                     }, {
        //                         data: onlineUser,
        //                         points: {
        //                             show: true,
        //                             fill: true,
        //                             radius: 5,
        //                             fillColor: "#f89f9f",
        //                             lineWidth: 3
        //                         },
        //                         color: '#fff',
        //                         shadowSize: 0
        //                     }],
        //
        //                     {
        //                         xaxis: {
        //                             tickLength: 0,
        //                             tickDecimals: 0,
        //                             mode: "categories",
        //                             min: 0,
        //                             font: {
        //                                 lineHeight: 14,
        //                                 style: "normal",
        //                                 variant: "small-caps",
        //                                 color: "#6F7B8A"
        //                             }
        //                         },
        //                         yaxis: {
        //                             ticks: 5,
        //                             tickDecimals: 0,
        //                             tickColor: "#eee",
        //                             font: {
        //                                 lineHeight: 14,
        //                                 style: "normal",
        //                                 variant: "small-caps",
        //                                 color: "#6F7B8A"
        //                             }
        //                         },
        //                         grid: {
        //                             hoverable: true,
        //                             clickable: true,
        //                             tickColor: "#eee",
        //                             borderColor: "#eee",
        //                             borderWidth: 1
        //                         }
        //                     });
        //
        //                 var previousPoint4 = null;
        //
        //                 $("#online_user").bind("plothover", function (event, pos, item) {
        //                     $("#x").text(pos.x.toFixed(2));
        //                     $("#y").text(pos.y.toFixed(2));
        //                     if (item) {
        //                         if (previousPoint4 != item.dataIndex) {
        //                             previousPoint4 = item.dataIndex;
        //
        //                             $("#tooltip").remove();
        //                             var x = item.datapoint[0].toFixed(2),
        //                                 y = item.datapoint[1].toFixed(2);
        //
        //                             showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' visits');
        //                         }
        //                     } else {
        //                         $("#tooltip").remove();
        //                         previousPoint4 = null;
        //                     }
        //                 });
        //             }
        //
        //         },
        //
        //         init: function () {
        //             this.initCharts();
        //         }
        //     };
        //
        // }();
        //
    </script>
@stop