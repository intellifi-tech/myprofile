@extends('admin.parent')

@section('title')
    {{ $page['sub_title'] }}
@endsection

@section('css')
<link href="{{ admin_asset('pages/css/profile.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ admin_asset('pages/css/pricing.min.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>{{ $page['sub_title'] }}
                        {{--<small>material design form validation states</small>--}}
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="{{ action('Admin\DashboardController@index') }}">Ana Sayfa</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="{{ action('Admin\UserController@index') }}">{{ $page['title'] }}</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">{{ $page['sub_title'] }}</span>
                </li>
            </ul>
            <!-- END PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    @include('admin.user.sidebar', ['active' => 'edit'])
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">{{ $user->name .' '.$user->surname }} Kullanıcı Hesabı</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Kişisel Bilgiler</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_5" data-toggle="tab">Abonelik Ayarı</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                @if(Session::has('success_message'))
                                                    <div class="alert alert-success">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                                        <strong>Başarılı!</strong> {{ Session::get('success_message') }}
                                                    </div>
                                                @endif
                                                {!! Form::open(['action' => ['Admin\UserController@update', $user->id], 'method' => 'PUT']) !!}
                                                    <div class="form-group">
                                                        <label class="control-label">Adı</label>
                                                        {!! Form::text('name', $user->name, ['id' => 'name', 'class' => 'form-control', 'required' => true]) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Soyadı</label>
                                                        {!! Form::text('surname', $user->surname, ['id' => 'surname', 'class' => 'form-control', 'required' => true]) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="status" class="md-check" name="status" @if($user->status == 1) checked @endif>
                                                                <label for="status">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Aktif </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="margiv-top-10">
                                                        <button class="btn green"> <i class="fa fa-refresh"></i> Güncelle</button>
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. </p>
                                                <form action="#" role="form">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="..."> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger">NOTE! </span>
                                                            <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green"> Submit </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">Current Password</label>
                                                        <input type="password" class="form-control"> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Password</label>
                                                        <input type="password" class="form-control"> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Re-type New Password</label>
                                                        <input type="password" class="form-control"> </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green"> Change Password </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                            <!-- PRIVACY SETTINGS TAB -->
                                            <div class="tab-pane" id="tab_1_4">
                                                <form action="#">
                                                    <table class="table table-light table-hover">
                                                        <tbody><tr>
                                                            <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios1" value="option1"> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios1" value="option2" checked=""> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios11" value="option1"> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios11" value="option2" checked=""> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios21" value="option1"> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios21" value="option2" checked=""> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios31" value="option1"> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios31" value="option2" checked=""> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--end profile-settings-->
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn red"> Save Changes </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PRIVACY SETTINGS TAB -->
                                            <!-- PRIVACY SETTINGS TAB -->
                                            <div class="tab-pane" id="tab_1_5">
                                                <div class="pricing-content-1">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="price-column-container border-active">
                                                                <div class="price-table-head bg-blue">
                                                                    <h2 class="no-margin">1. Paket</h2>
                                                                </div>
                                                                <div class="arrow-down border-top-blue"></div>
                                                                <div class="price-table-pricing">
                                                                    <h3>
                                                                        <sup class="price-sign">₺</sup>24</h3>
                                                                    <p>aylık</p>
                                                                    @if($user->package == 1)
                                                                        <div class="price-ribbon">Aktif</div>
                                                                    @endif
                                                                </div>
                                                                <div class="price-table-content">
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-user-follow"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">1. Özellik</div>
                                                                    </div>
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-drawer"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">2. Özellik</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="price-column-container border-active">
                                                                <div class="price-table-head bg-red">
                                                                    <h2 class="no-margin">2. Paket</h2>
                                                                </div>
                                                                <div class="arrow-down border-top-red"></div>
                                                                <div class="price-table-pricing">
                                                                    <h3>
                                                                        <sup class="price-sign">₺</sup>39</h3>
                                                                    <p>aylık</p>
                                                                    @if($user->package == 2)
                                                                        <div class="price-ribbon">Aktif</div>
                                                                    @endif
                                                                </div>
                                                                <div class="price-table-content">
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-user-follow"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">1. Özellik</div>
                                                                    </div>
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-drawer"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">2. Özellik</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="price-column-container border-active">
                                                                <div class="price-table-head bg-green">
                                                                    <h2 class="no-margin">3. Paket</h2>
                                                                </div>
                                                                <div class="arrow-down border-top-green"></div>
                                                                <div class="price-table-pricing">
                                                                    <h3>
                                                                        <sup class="price-sign">₺</sup>59</h3>
                                                                    <p>aylık</p>
                                                                    @if($user->package == 3)
                                                                        <div class="price-ribbon">Aktif</div>
                                                                    @endif
                                                                </div>
                                                                <div class="price-table-content">
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-user-follow"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">1. Özellik</div>
                                                                    </div>
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-drawer"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">2. Özellik</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="price-column-container border-active">
                                                                <div class="price-table-head bg-purple">
                                                                    <h2 class="no-margin">4. Paket</h2>
                                                                </div>
                                                                <div class="arrow-down border-top-purple"></div>
                                                                <div class="price-table-pricing">
                                                                    <h3>
                                                                        <sup class="price-sign">₺</sup>128
                                                                    </h3>
                                                                    <p>aylık</p>
                                                                    @if($user->package == 4)
                                                                        <div class="price-ribbon">Aktif</div>
                                                                    @endif
                                                                </div>
                                                                <div class="price-table-content">
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-user-follow"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">1. Özellik</div>
                                                                    </div>
                                                                    <div class="row mobile-padding">
                                                                        <div class="col-xs-3 text-right mobile-padding">
                                                                            <i class="icon-drawer"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-left mobile-padding">2. Özellik</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PRIVACY SETTINGS TAB -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@stop

@section('js')
@stop