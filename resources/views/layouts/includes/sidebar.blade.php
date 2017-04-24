<div id="sidebar" class="nav-collapse collapse">
    <div class="sidebar-toggler hidden-phone"></div>
    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
    <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
            <input type="text" class="search-query" placeholder="Search" />
        </form>
    </div>
    <!-- END RESPONSIVE QUICK SEARCH FORM -->
    <!-- BEGIN SIDEBAR MENU -->
    @php
        $current_route = \Illuminate\Support\Facades\Route::getFacadeRoot()->current()->uri();
    @endphp
    <ul>
        <li class="start {{ ($current_route == '/') ? 'active' : '' }}">
            <a href="{{ url('/') }}">
                <i class="icon-home"></i>
                <span class="title">Home</span>
            </a>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <i class="icon-envelope"></i>
                <span class="title">Notifications</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{{ ($current_route == 'user/notification/compose') ? 'active' : '' }}"><a href="{{ url('user/notification/compose') }}">Compose</a></li>
{{--                <li class="{{ ($current_route == 'user/notification/inbox') ? 'active' : '' }}"><a href="{{ url('user/notification/inbox') }}">Inbox</a></li>--}}
                <li class="{{ ($current_route == 'user/notification/inbox') ? 'active' : '' }}"><a href="{{ url('user/notification/inbox') }}">Inbox</a></li>
                <li class="{{ ($current_route == 'user/notification/sent') ? 'active' : '' }}"><a href="{{ url('user/notification/sent') }}">Sent</a></li>
                <li class="{{ ($current_route == 'user/eboxes') ? 'active' : '' }}"><a href="{{ url('user/eboxes') }}">My E-Boxes</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <i class="icon-list"></i>
                <span class="title"> Subscriptions</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{{ ($current_route == 'company/services') ? 'active' : '' }}"><a href="{{ url('company/services') }}">Services</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <i class="icon-cogs"></i>
                <span class="title"> Settings</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{{ ($current_route == 'user/settings') ? 'active' : '' }}"><a href="{{ url('user/settings') }}">Profile</a></li>
            </ul>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    @push('js')
        <script>
            $('li.active').parent().parent().addClass('active');
        </script>
    @endpush
</div>