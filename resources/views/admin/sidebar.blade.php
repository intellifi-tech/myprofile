<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            @foreach($sidebar as $key => $val)
                @if($val->head)
                    <li class="heading"><h3>{{ $val->name }}</h3></li>
                @else
                    <li class="nav-item {{ $config['i'] == $key ? 'active open' : '' }} {{ $config['i'] == 1 ? 'start' : '' }}">
                        <a href="{{ $val->link }}" class="nav-link nav-toggle">
                            <i class="fa {{ $val->icon }}"></i>
                            <span class="title">{{ $val->name  }}</span>
                            @if(count($val->items) > 0)
                                <span class="arrow" {{ $config['i'] == $key ? ' open' : '' }}></span>
                            @endif
                        </a>
                        @if(count($val->items) > 0)
                            <ul class="sub-menu">
                                @foreach($val->items as $key2 => $val2)
                                    <li class="nav-item {{ $key == $config['i'] && $config['j'] == $key2 ? 'active open' : '' }}">
                                        <a href="{{ $val2->link }}" class="nav-link ">
                                            <i class="fa {{ $val2->icon }}"></i>
                                            <span class="title">{{ $val2->name }}</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>