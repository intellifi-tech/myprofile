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
                                <i class="fa fa-users"></i>{{ $page['title'] }}
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive" style="overflow: hidden">
                                <table class="table table-striped table-bordered table-hover datatable">
                                    <thead>
                                    <tr>
                                        <th>Adı</th>
                                        <th width="4%">Durum</th>
                                        <th width="12%">İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $row)
                                        <tr>
                                            <td>{{ $row->name.' '.$row->surname  }}</td>
                                            <td>
                                                @if($row->status == 1)
                                                    <span class="label label-success">Aktif</span>
                                                @elseif($row->status == 0)
                                                    <span class="label label-danger">Pasif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ action('Admin\UserController@show', $row->id) }}" class="btn blue"><i class="fa fa-search fa-fw"></i> Görüntüle</a>
                                                <a href="{{ action('Admin\UserController@edit', $row->id) }}" class="btn grey"><i class="fa fa-edit fa-fw"></i>Düzenle</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Henüz bir kullanıcı yok.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
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