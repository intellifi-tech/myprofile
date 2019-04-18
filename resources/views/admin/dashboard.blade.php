@extends('admin.parent')

@section('css')

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
                            <div class="number"> +
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
                    <!-- BEGIN PORTLET-->
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
                                <div id="site_statistics" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-share font-red-sunglo hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Revenue</span>
                                <span class="caption-helper">monthly stats...</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                        <span class="fa fa-angle-down"> </span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> Q1 2014
                                                <span class="label label-sm label-default"> past </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Q2 2014
                                                <span class="label label-sm label-default"> past </span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="javascript:;"> Q3 2014
                                                <span class="label label-sm label-success"> current </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Q4 2014
                                                <span class="label label-sm label-warning"> upcoming </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_activities_loading">
                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                            <div id="site_activities_content" class="display-none">
                                <div id="site_activities" style="height: 228px;"> </div>
                            </div>
                            <div style="margin: 20px 0 10px 30px">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-success"> Revenue: </span>
                                        <h3>$13,234</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-info"> Tax: </span>
                                        <h3>$134,900</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-danger"> Shipment: </span>
                                        <h3>$1,134</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-warning"> Orders: </span>
                                        <h3>235090</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- endregion -->

@stop

@section('js')

@stop