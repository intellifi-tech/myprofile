@extends('admin.parent')

@section('title')
    {{ $page['sub_title'] }}
@endsection

@section('css')
    <link href="{{ admin_asset('pages/css/profile.min.css') }}" rel="stylesheet" type="text/css"/>
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
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-md-offset-2">--}}
{{--                    <!-- BEGIN VALIDATION STATES-->--}}
{{--                    <div class="portlet light portlet-fit portlet-form bordered">--}}
{{--                        <div class="portlet-title">--}}
{{--                            <div class="caption">--}}
{{--                                <i class="fa fa-building font-otoservis"></i>--}}
{{--                                <span class="caption-subject font-otoservis sbold uppercase">{{ $page['sub_title'] }}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="portlet-body">--}}
{{--                            <!-- BEGIN FORM-->--}}
{{--                            {!! Form::open(['class' => 'form-horizontal', 'action' => ['Admin\UserController@update', $user->id], 'method' => 'PUT']) !!}--}}
{{--                            <div class="form-body">--}}
{{--                                <div class="form-group form-md-line-input">--}}
{{--                                    {!! Form::label('name', 'Adı', ['class' => 'col-md-3 control-label'])  !!}--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        {!! Form::text('name', $user->name, ['id' => 'name', 'class' => 'form-control', 'required' => true]) !!}--}}
{{--                                        <div class="form-control-focus"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group form-md-line-input">--}}
{{--                                    {!! Form::label('surname', 'Soyadı', ['class' => 'col-md-3 control-label'])  !!}--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        {!! Form::text('surname', $user->surname, ['id' => 'surname', 'class' => 'form-control', 'required' => true]) !!}--}}
{{--                                        <div class="form-control-focus"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group form-md-line-input">--}}
{{--                                    {!! Form::label('status', 'Durum', ['class' => 'col-md-3 control-label'])  !!}--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <div class="md-checkbox-inline">--}}
{{--                                            <div class="md-checkbox">--}}
{{--                                                <input type="checkbox" id="status" class="md-check" name="status" @if($user->status == 1) checked @endif>--}}
{{--                                                <label for="status">--}}
{{--                                                    <span></span>--}}
{{--                                                    <span class="check"></span>--}}
{{--                                                    <span class="box"></span> Aktif </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="form-actions">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-offset-3 col-md-9">--}}
{{--                                        <button type="submit" class="btn blue circle"><i class="fa fa-refresh"></i> Güncelle</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        {!! Form::close() !!}--}}
{{--                        <!-- END FORM-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END VALIDATION STATES-->--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- END PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet bordered">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="{{ admin_asset('pages/media/profile/profile_user.jpg') }}" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> Marcus Doe </div>
                                <div class="profile-usertitle-job"> Developer </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class="profile-userbuttons">
                                <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                <button type="button" class="btn btn-circle red btn-sm">Message</button>
                            </div>
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ action('Admin\UserController@show', $user->id) }}">
                                            <i class="icon-home"></i> Kullanıcı Anasayfa </a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ action('Admin\UserController@edit', $user->id) }}">
                                            <i class="icon-settings"></i> Kullanıcı Düzenle</a>
                                    </li>
                                    <li>
                                        <a href="page_user_profile_1_help.html">
                                            <i class="icon-info"></i> Help </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                        <!-- PORTLET MAIN -->
                        <div class="portlet light bordered">
                            <!-- STAT -->
                            <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 37 </div>
                                    <div class="uppercase profile-stat-text"> Projects </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 51 </div>
                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 61 </div>
                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                </div>
                            </div>
                            <!-- END STAT -->
                            <div>
                                <h4 class="profile-desc-title">About Marcus Doe</h4>
                                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-globe"></i>
                                    <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-twitter"></i>
                                    <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-facebook"></i>
                                    <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
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