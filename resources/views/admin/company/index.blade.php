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
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label">Arama</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-inline input-medium" autocomplete="off">
                                        <span class="help-inline"> Adı alanında arama yapar. </span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="table-responsive" style="overflow: hidden">
                                <table class="table table-striped table-bordered table-hover datatable">
                                    <thead>
                                    <tr>
                                        <th>Adı</th>
                                        <th width="3%"><span class="tooltips" data-placement="top" data-original-title="Bağlantılı Kullanıcı Sayısı" style="cursor: pointer">B.K.S.</span></th>
                                        <th width="10%">İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($companies as $company)
                                        <tr>
                                            <td>{{ $company->name  }}</td>
                                            <td class="text-center">{{ $company->users->count() }}</td>
                                            <td>
                                                <a href="{{ action('Admin\CompanyController@edit', $company->id) }}" class="btn grey"><i class="fa fa-edit fa-fw"></i>Düzenle</a>
{{--                                                <a href="{{ action('Admin\CompanyController@destroy', $company->id) }}" class="btn red" onclick="return confirm('Silmek istediğiniz Emin misiniz?');"><i class="fa fa-trash fa-fw"></i> Sil</a>--}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Henüz bir şirket yok.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                <div class="text-center">

                                    {{ $companies->links() }}
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