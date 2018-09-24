<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                {{ __('menus.backend.sidebar.general') }}
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}" href="{{ route('admin.dashboard') }}"><i class="icon-speedometer"></i> {{ __('menus.backend.sidebar.dashboard') }}</a>
            </li>

            <li class="nav-title">
                {{ __('menus.backend.sidebar.system') }}
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/auth*')) }}" href="#">
                        <i class="icon-user"></i> {{ __('menus.backend.access.title') }}

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                                {{ __('labels.backend.access.users.management') }}

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                                {{ __('labels.backend.access.roles.management') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}" href="#">
                    <i class="icon-list"></i> {{ __('menus.backend.log-viewer.main') }}
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                            {{ __('menus.backend.log-viewer.dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                            {{ __('menus.backend.log-viewer.logs') }}
                        </a>
                    </li>
                </ul>
            </li>

            {{--Categories--}}
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/categories*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/categories*')) }}" href="#">
                    <i class="icon-folder-alt"></i> Categories
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/categories')) }}" href="{{ route('admin.categories.index') }}">
                            <i class="icon-list"></i> Category List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/categories/create')) }}" href="{{ route('admin.categories.create') }}">
                            <i class="icon-plus"></i> Add Categories
                        </a>
                    </li>
                </ul>
            </li>

            {{--Products--}}
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/products*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/products*')) }}" href="#">
                    <i class="icon-book-open"></i> Products
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/products')) }}" href="{{ route('admin.products.index') }}">
                            <i class="icon-list"></i> Product List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/products/create')) }}" href="{{ route('admin.products.create') }}">
                            <i class="icon-plus"></i> Add Products
                        </a>
                    </li>
                </ul>
            </li>

            {{--Insurance--}}
            {{--<li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/insurance*'), 'open') }}">--}}
                {{--<a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/insurance*')) }}" href="#">--}}
                    {{--<i class="icon-umbrella"></i> Insurance--}}
                {{--</a>--}}

                {{--<ul class="nav-dropdown-items">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/insurance')) }}" href="{{ route('admin.insurance.index') }}">--}}
                            {{--<i class="icon-list"></i> Product List--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/insurance/create')) }}" href="{{ route('admin.insurance.create') }}">--}}
                            {{--<i class="icon-plus"></i> Add Products--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--music-app--}}
            {{--<li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/music-app*'), 'open') }}">--}}
                {{--<a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/music-app*')) }}" href="#">--}}
                    {{--<i class="icon-music-tone-alt"></i> Music Apps--}}
                {{--</a>--}}

                {{--<ul class="nav-dropdown-items">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/music-app')) }}" href="{{ route('admin.music-app.index') }}">--}}
                            {{--<i class="icon-list"></i> Product List--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/music-app/create')) }}" href="{{ route('admin.music-app.create') }}">--}}
                            {{--<i class="icon-plus"></i> Add Products--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--online-training--}}
            {{--<li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/online-training*'), 'open') }}">--}}
                {{--<a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/online-training*')) }}" href="#">--}}
                    {{--<i class="icon-screen-desktop"></i> Online Training--}}
                {{--</a>--}}

                {{--<ul class="nav-dropdown-items">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/online-training')) }}" href="{{ route('admin.online-training.index') }}">--}}
                            {{--<i class="icon-list"></i> Product List--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/online-training/create')) }}" href="{{ route('admin.online-training.create') }}">--}}
                            {{--<i class="icon-plus"></i> Add Products--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--rewards--}}
            {{--<li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/reward*'), 'open') }}">--}}
                {{--<a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/reward*')) }}" href="#">--}}
                    {{--<i class="icon-present"></i> Rewards--}}
                {{--</a>--}}

                {{--<ul class="nav-dropdown-items">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/reward')) }}" href="{{ route('admin.reward.index') }}">--}}
                            {{--<i class="icon-list"></i> Product List--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/reward/create')) }}" href="{{ route('admin.reward.create') }}">--}}
                            {{--<i class="icon-plus"></i> Add Products--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--Products3--}}
            {{--<li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/insurance*'), 'open') }}">--}}
                {{--<a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/insurance*')) }}" href="#">--}}
                    {{--<i class="icon-bag"></i> Category 3--}}
                {{--</a>--}}

                {{--<ul class="nav-dropdown-items">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/insurance')) }}" href="{{ route('admin.insurance.index') }}">--}}
                            {{--<i class="icon-list"></i> Product List--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ active_class(Active::checkUriPattern('admin/insurance/create')) }}" href="{{ route('admin.insurance.create') }}">--}}
                            {{--<i class="icon-plus"></i> Add Products--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

        </ul>
    </nav>
</div><!--sidebar-->