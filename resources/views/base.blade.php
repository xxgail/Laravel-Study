<html>
<head>
    <title> @yield('title') </title>
    <link href="../hadmin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../hadmin/css/animate.css" rel="stylesheet">
    <link href="../hadmin/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../hadmin/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
</head>
<body class="fixed-sidebar full-height-layout gray-bg  pace-done">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;">
            <div class="sidebar-collapse" style="width: auto; height: 100%;">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element open">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="true">
                    <span class="clear">
                    <span class="block m-t-xs" style="font-size:20px;">
                    <strong class="font-bold"></strong>
                    </span>
                    </span>
                            </a>
                        </div>
                        <div class="logo-element">
                        </div>
                    </li>

                    <li>
                        <a class="J_menuItem" href="{{route('test2')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>

                    <li>
                        <a class="J_menuItem" href="{{route('admin.list')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">管理员</span>
                        </a>
                    </li>

                    <li>
                        <a class="J_menuItem" href="{{route('role.list')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">角色</span>
                        </a>
                    </li>

                    <li>
                        <a class="J_menuItem" href="{{route('permission.list')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">权限</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 71.3488px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.9; z-index: 90; right: 1px;"></div>
        </div>
    </nav>

<div id="page-wrapper" class="gray-bg dashbard-1">
    @yield('content')
</div>
</div>

</body>
<script src="../js/jquery.min.js"></script>
<script src="../hadmin/js/bootstrap.min.js"></script>
<script src="../hadmin/js/content.js"></script>
<script src="../hadmin/js/hAdmin.js"></script>
<script src="../hadmin/layer/layer.min.js"></script>
<script src="../hadmin/js/multiselect/bootstrap-multiselect.js"></script>
<script src="../hadmin/js/slimscroll/jquery.slimscroll.min.js"></script>
@yield('script')
</html>