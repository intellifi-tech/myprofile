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
                                <i class="fa fa-users"></i>{{ $page['title'] }} <span style="font-size: 12px">(10 kişi)</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label">Arama</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-inline input-medium" autocomplete="off">
                                        <span class="help-inline"> Adı - Soyadı alanında arama yapar. </span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="table-responsive" style="overflow: hidden">
                                <table class="table table-striped table-bordered table-hover" id="user_data">
                                    <thead>
                                        <tr>
                                            <th width="50px">Fotoğraf</th>
                                            <th>Adı - Soyadı</th>
                                            <th>Meslek</th>
                                            <th>Ünvan</th>
                                            <th>Şirket</th>
                                            <th>Telefon</th>
                                            <th>E-Posta</th>
                                            <th>Durum</th>
                                            <th width="17%">İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td><img src="{{ upload_asset('profile/' . $user->profile_photo)  }}" style="width: 50px; height: 50px" class="img-circle" /></td>
                                            <td>{{ $user->name .' '. $user->surname}}</td>
                                            <td>Yazılım Geliştirici</td>
                                            <td>CEO</td>
                                            <td>Intelli Fi</td>
                                            <td><a href="tel:555 555 55 55">555 555 55 55</a></td>
                                            <td><a href="mailto:mesut@intellifi.tech">mesut@intellifi.tech</a></td>
                                            <td>
                                                @if($user->status == 1)
                                                    <span class="label label-success">Aktif</span>
                                                @elseif($user->status == 0)
                                                    <span class="label label-danger">Pasif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ action('Admin\UserController@show', $user->id) }}" class="btn blue"><i class="fa fa-search fa-fw"></i> Görüntüle</a>
                                                <a href="{{ action('Admin\UserController@edit', $user->id) }}" class="btn grey"><i class="fa fa-edit fa-fw"></i>Düzenle</a>
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