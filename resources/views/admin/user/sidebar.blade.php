<div class="profile-sidebar">

    <!-- PORTLET MAIN -->
    <div class="portlet light profile-sidebar-portlet bordered">

        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
            <img src="{{ upload_asset('profile/' . $user->profile_photo)  }}" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"> {{ $user->name .' '. $user->surname }}</div>
            <div class="profile-usertitle-job"> {{ $user->title }} </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
            <button type="button" class="btn btn-circle red btn-sm">Mesaj At</button>
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="@if($active == "show") active @endif">
                    <a href="{{ action('Admin\UserController@show', $user->id) }}">
                        <i class="fa fa-home fa-fw"></i> Kullanıcı Anasayfa
                    </a>
                </li>
                <li class="@if($active == "edit") active @endif">
                    <a href="{{ action('Admin\UserController@edit', $user->id) }}">
                        <i class="fa fa-edit fa-fw"></i> Kullanıcı Düzenle
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-widget-1">
            <div class="mt-stats">
                <div class="btn-group btn-group btn-group-justified">
                    <a href="javascript:;" class="btn font-red">
                        <i class="icon-bubbles"></i> {{ $comments->count() }} </a>
                    <a href="javascript:;" class="btn font-green">
                        <i class="icon-social-twitter"></i> {{ $follow->followings->count() }} </a>
                    <a href="javascript:;" class="btn font-yellow">
                        <i class="icon-emoticon-smile"></i> 3,7k </a>
                </div>
            </div>
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
                <div class="uppercase profile-stat-text"> Katıldığı Etkinlik Sayısı </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="uppercase profile-stat-title"> 51 </div>
                <div class="uppercase profile-stat-text"> Katılmadığı Etkinlik Sayısı </div>
            </div>
        </div>
        <!-- END STAT -->
        <div>
            <h4 class="profile-desc-title">{{ $user->name .' '. $user->surname }} <small>kısa açıklama</small></h4>
            <span class="profile-desc-text"> {{ $user->short_biography }} </span>
            <div class="margin-top-20 profile-desc-link">
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
            </div>
        </div>
    </div>
    <!-- END PORTLET MAIN -->
</div>