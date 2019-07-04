@extends('admin.parent')

@section('title')
    {{ $page['title'] }}
@endsection

@section('css')
    <link href="{{ admin_asset('pages/css/profile.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.fullscreen/dist/leaflet.fullscreen.css"/>
@stop

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>{{ $page['title'] }}
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- END PAGE HEAD-->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="{{ action('Admin\DashboardController@index') }}}">Yönetici Anasayfa</a>
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
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                @include('admin.user.sidebar', ['active' => 'show'])
                <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Kullanıcı Etkinlik Katılım Listesi</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_actions_pending" data-toggle="tab" aria-expanded="true"> Devam Eden </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab_actions_completed" data-toggle="tab" aria-expanded="false"> Tamamlanan </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body" style="height: 469px; overflow-y: scroll;">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
                                                @if($userOngoingsEvents->count() > 0)
                                                    @foreach($userOngoingsEvents as $userOngoingsEvent)
                                                        <!-- BEGIN: Actions -->
                                                            <div class="mt-actions" style="width: 99%;">
                                                                <div class="mt-action">
                                                                    <div class="mt-action-img">
                                                                        <img src="{{ admin_asset('pages/media/users/avatar1.jpg')  }}"/>
                                                                    </div>
                                                                    <div class="mt-action-body">
                                                                        <div class="mt-action-row">
                                                                            <div class="mt-action-info ">
                                                                                <div class="mt-action-icon ">
                                                                                    <i class="fa fa-calendar-o"></i>
                                                                                </div>
                                                                                <div class="mt-action-details ">
                                                                                    <span class="mt-action-author">{!! $userOngoingsEvent->user->name .' '. $userOngoingsEvent->user->surname !!}</span>
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
                                                            <!-- END: Actions -->
                                                    @endforeach
                                                @else
                                                    <p>Şu an devam eden herhangi bir etkinlik bulunmuyor.</p>
                                                @endif
                                            </div>
                                            <div class="tab-pane" id="tab_actions_completed">
                                            @for($i = 0; $i < 20; $i++)
                                                <!-- BEGIN:Completed-->
                                                    <div class="mt-actions" style="width: 99%;">
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="{{ admin_asset('pages/media/users/avatar1.jpg') }}">
                                                            </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-action-redo"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Muharrem Özdemir</span>
                                                                            <p class="mt-action-desc">Android 101</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">20 Ekim</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: Completed -->
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET -->
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="caption-subject font-hide bold uppercase"> Zaman Tüneli</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="timeline">
                                            <!-- TIMELINE ITEM -->
                                            <div class="timeline-item">
                                                <div class="timeline-badge">
                                                    <img class="timeline-badge-userpic" src="{{ admin_asset('pages/media/users/avatar80_2.jpg') }}"></div>
                                                <div class="timeline-body">
                                                    <div class="timeline-body-arrow"></div>
                                                    <div class="timeline-body-head">
                                                        <div class="timeline-body-head-caption">
                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison">Lisa Strong</a>
                                                            <span class="timeline-body-time font-grey-cascade">Replied at 17:45 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-body-content">
                                                                <span class="font-grey-cascade"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut consectetuer adipiscing elit laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                                                    ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END TIMELINE ITEM -->
                                            <!-- TIMELINE ITEM WITH GOOGLE MAP -->
                                            <div class="timeline-item">
                                                <div class="timeline-badge">
                                                    <img class="timeline-badge-userpic" src="{{ admin_asset('pages/media/users/avatar80_7.jpg') }}"></div>
                                                <div class="timeline-body">
                                                    <div class="timeline-body-arrow"></div>
                                                    <div class="timeline-body-head">
                                                        <div class="timeline-body-head-caption">
                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison">Paul Kiton</a>
                                                            <span class="timeline-body-time font-grey-cascade">Added office location at 2:50 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-body-content">
                                                        <div id="user-map" style="height:500px; position: relative; overflow: hidden;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END TIMELINE ITEM WITH GOOGLE MAP -->
                                            <!-- TIMELINE ITEM -->
                                            <div class="timeline-item">
                                                <div class="timeline-badge">
                                                    <div class="timeline-icon">
                                                        <i class="icon-user-following font-green-haze"></i>
                                                    </div>
                                                </div>
                                                <div class="timeline-body">
                                                    <div class="timeline-body-arrow"></div>
                                                    <div class="timeline-body-head">
                                                        <div class="timeline-body-head-caption">
                                                            <span class="timeline-body-alerttitle font-red-intense">You have new follower</span>
                                                            <span class="timeline-body-time font-grey-cascade">at 11:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-body-content">
                                                                <span class="font-grey-cascade"> You have new follower
                                                                    <a href="javascript:;">Ivan Rakitic</a>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END TIMELINE ITEM -->
                                            <!-- TIMELINE ITEM -->
                                            <div class="timeline-item">
                                                <div class="timeline-badge">
                                                    <div class="timeline-icon">
                                                        <i class="icon-docs font-red-intense"></i>
                                                    </div>
                                                </div>
                                                <div class="timeline-body">
                                                    <div class="timeline-body-arrow"></div>
                                                    <div class="timeline-body-head">
                                                        <div class="timeline-body-head-caption">
                                                            <span class="timeline-body-alerttitle font-green-haze">Server Report</span>
                                                            <span class="timeline-body-time font-grey-cascade">Yesterday at 11:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-body-content">
                                                        <span class="font-grey-cascade"> Lorem ipsum dolore sit amet
                                                            <a href="javascript:;">Ispect</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END TIMELINE ITEM -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-bubble font-hide hide"></i>
                                            <span class="caption-subject font-hide bold uppercase">Destek</span>
                                        </div>
                                        <div class="actions">
                                            <div class="portlet-input input-inline">
                                                <div class="input-icon right">
                                                    <i class="icon-magnifier"></i>
                                                    <input type="text" class="form-control input-circle" placeholder="Ara..."></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-form" style="margin-top: 0 !important;">
                                        <div class="input-cont">
                                            <input class="form-control" type="text" placeholder="Cevap yazın..."></div>
                                        <div class="btn-cont">
                                            <span class="arrow"> </span>
                                            <a href="" class="btn blue icn-only">
                                                <i class="fa fa-check icon-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body" id="chats">
                                        <div>
                                            <div class="scroller" style="height: 400px; overflow-y: scroll; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                                                <ul class="chats">
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="{{ admin_asset('layouts/layout/img/avatar2.jpg') }}">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Lisa Wong </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END PORTLET -->
                                <!-- BEGIN PORTLET -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-bubbles font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Yorumlar</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#portlet_comments_1" data-toggle="tab"> Onay Bekleyen </a>
                                            </li>
                                            <li>
                                                <a href="#portlet_comments_2" data-toggle="tab"> Onaylanan </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content" style="height: 300px; overflow-y: scroll;">
                                            <div class="tab-pane active" id="portlet_comments_1">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments" style="width: 99%">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar1.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Muharrem Özdemir - Android 101</span>
                                                                <span class="mt-comment-date">21 Nisan</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Eğitim çok güzeldi. Tekrarlarını bekliyoruz. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Onay Bekliyor</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Arşivle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                            <div class="tab-pane" id="portlet_comments_2">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="http://localhost/myprofile/public/admin/pages/media/users/avatar4.jpg"> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@stop

@section('js')
    <script src="{{ admin_asset('pages/scripts/profile.min.js') }}" type="text/javascript"></script>
    <script src="{{ admin_asset('pages/scripts/timeline.min.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
    <script src="{{ admin_asset('global/plugins/leaflet/Leaflet.fullscreen.js') }}" ></script>
    <script src="{{ admin_asset('geojson.js') }}" type="text/javascript"></script>
    <script>
        var map = L.map('user-map', {
            fullscreenControl: true,
            fullscreenControlOptions: {
                position: 'topright',
                title: 'Tam Ekran Modu'
            }
        }).setView([41.0448525, 29.0204335], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        map.scrollWheelZoom.disable();

        var LeafIcon = L.Icon.extend({
            options: {
                iconSize:     [38, 60],
                shadowSize:   [50, 34],
                iconAnchor:   [22, 55],
                shadowAnchor: [4, 62],
                popupAnchor:  [-3, -76]
            }
        });

        var greenIcon = new LeafIcon({iconUrl: '{{ admin_asset('global/img/user-marker.png') }}'});

        L.marker([41.0322435, 29.0275606], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);
        L.marker([41.0403672, 28.9132088], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);

    </script>
@stop