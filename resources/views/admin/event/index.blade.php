@extends('admin.parent')

@section('title')
    {{ $page['title'] }}
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
                    <h1>{{ $page['title'] }}</h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- END PAGE HEAD-->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="{{ action('Admin\DashboardController@index') }}">Yönetici Anasayfa</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">{{ $page['title'] }}</span>
                </li>
            </ul>
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Başarılı!</strong> {{ Session::get('success_message') }}
                        </div>
                    @endif

                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-building"></i>{{ $page['title'] }}
                            </div>
                        </div>
                        <div class="portlet-body">
{{--                            <div class="row">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="col-md-1 control-label">Arama</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input type="text" class="form-control input-inline input-medium" autocomplete="off">--}}
{{--                                        <span class="help-inline"> Adı alanında arama yapar. </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <br>--}}
                            <div class="table-responsive" style="overflow: hidden">
                                <table class="table table-striped table-bordered table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>Adı</th>
                                            <th>Katılımcı Sayısı</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($events as $event)
                                        <tr>
                                            <td>{{ $event->title  }}</td>
                                            <td>{{ $event->user_attended_events_count }}</td>
                                            <td><a href="{{ action('Admin\EventController@participants', $event->id) }}" class="btn btn-success"><i class="fa fa-users"></i>Katılımcılar</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Henüz bir etkinlik yok.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                    {{ $events->links() }}
                                </table>
                                <div class="text-center">

{{--                                    {{ $companies->links() }}--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@stop

@section('page-js')

@stop