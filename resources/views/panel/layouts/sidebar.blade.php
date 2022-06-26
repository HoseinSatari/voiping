<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
{{--	<!-- Brand Logo -->--}}
{{--	--}}{{--<a href="{{ route('panel.dashboard') }}" class="brand-link">--}}
{{--		<img src="{{ getImageSrc(getOption('site_information.favicon','images/admin-logo.png')) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">--}}
{{--		 <span class="brand-text font-weight-light">--}}
{{--				{{ getOption('site_information.website_name',config('settings.website_name')) }}--}}
{{--		</span>--}}
{{--	</a> --}}

<!-- Sidebar -->
    <div class="sidebar do-nicescroll">

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav d-block nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{route('admin.home')}}" class="nav-link {{is_active('admin.home')}} ">
                        <p>پیشخوان</p>
                        <i class="nav-icon "></i>
                    </a>
                </li>
{{--                @can('show_user')--}}
                    <li class="nav-item">
                        <a href="{{route('users')}}"
                           class="nav-link {{is_active(['users'])}}">
                            <p> کاربران</p>
                            <i class="nav-icon "></i>
                        </a>
                    </li>
{{--                @endcan--}}
                <li class="nav-item">
                    <a href="{{route('calls')}}"
                       class="nav-link {{is_active(['calls' , 'calls.users'])}}">
                     <p>تماس ها</p>
                        <i class="nav-icon "></i>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
