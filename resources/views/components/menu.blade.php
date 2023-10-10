<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="{{asset('tamplate/images/logos/dark-logo.svg')}}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                @foreach($list as $item)
                    @if(isset($item['children']) && is_array($item['children']) && count($item['children']) > 0)
                        {{-- Menu dengan children --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" data-toggle="submenu" href="#">
                                <span>
                                    <i class="{{ $item['icon'] }}"></i>
                                </span>
                                    <span class="hide-menu">{{ $item['label'] }}</span>
                                    <span class="submenu-toggle-icon"></span>
                            </a>
                            <ul class="menu-sub">
                                @foreach ($item['children'] as $child)
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="{{ route($child['route']) }}">
                                            <span>
                                                <i class="{{ $child['icon'] }}"></i>
                                            </span>
                                            <span class="hide-menu">{{ $child['label'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        {{-- Menu tanpa children --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route($item['route']) }}">
                                <span>
                                    <i class="{{ $item['icon'] }}"></i>
                                </span>
                                <span class="hide-menu">{{ $item['label'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
