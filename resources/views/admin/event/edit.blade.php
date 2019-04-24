@extends('admin.parent')

@section('title')
    {{ $page['sub_title'] }}
@endsection

@section('css')

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
                    <a href="{{ action('Admin\CityController@index') }}">{{ $page['title'] }}</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">{{ $page['sub_title'] }}</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-building font-otoservis"></i>
                                <span class="caption-subject font-otoservis sbold uppercase">{{ $page['sub_title'] }}</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            {!! Form::open(['class' => 'form-horizontal', 'action' => ['Admin\EventController@update', $event->id], 'method' => 'PUT']) !!}
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    {!! Form::label('name', 'Adı', ['class' => 'col-md-3 control-label'])  !!}
                                    <div class="col-md-9">
                                        {!! Form::text('name', $event->name, ['id' => 'name', 'class' => 'form-control', 'required' => true]) !!}
                                        <div class="form-control-focus"></div>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input">
                                    {!! Form::label('activity_date', 'Tarih & Saat', ['class' => 'col-md-3 control-label'])  !!}
                                    <div class="col-md-9">
                                        {!! Form::text('activity_date', $event->activity_date, ['id' => 'activity_date', 'class' => 'form-control', 'required' => true]) !!}
                                        <div class="form-control-focus"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn blue circle"><i class="fa fa-refresh"></i> Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@stop

@section('js')
@stop