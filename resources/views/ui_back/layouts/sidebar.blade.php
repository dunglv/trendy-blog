<!--sidebar start-->
<aside>
    @php
        $seg = request()->segments();
        if (count($seg) >= 2) {
            $_cur_ = $seg[1];
        }else{
            $_cur_ = '';
        }
    @endphp
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ route('ad.home') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>HOME</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="@if ($_cur_==='articles') active @endif">
                        <i class="fa fa-pencil"></i>
                        <span>Articles</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('ad.a.create') }}">Create new</a></li>
                        <li><a href="{{ route('ad.a.index') }}">Publish</a></li>
                        <li><a href="{{ route('ad.a.pending') }}">Pending</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="@if ($_cur_==='categories') active @endif">
                        <i class="fa fa-location-arrow"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('ad.c.create') }}">Create new</a></li>
                        <li><a href="{{ route('ad.c.index') }}">Publish</a></li>
                        <li><a href="{{ route('ad.c.pending') }}">Pending</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="@if ($_cur_==='users') active @endif">
                        <i class="fa fa-user"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('ad.u.index') }}">All user</a></li>
                        <li><a href="{{ route('ad.u.pending') }}">Pending</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="@if ($_cur_==='mail') active @endif">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-calendar"></i>
                        <span>Event</span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html"><span class="ai-inbox"></span></a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Statistic</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Tag</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Comment</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
