<html>
<head>
    <title>

    </title>
    <link href="../hadmin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../hadmin/css/animate.css" rel="stylesheet">
    <link href="../hadmin/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <button class="btn btn-success " type="button">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">添加角色</span>
                        </button>

                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>

                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table" style="width: 100%;align-content: center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>名称</th>
                            <th>权限</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($role as $val)
                            <tr>
                                <td>{{$val['id']}}</td>
                                <td>{{$val['name']}}</td>
                                <td>
                                    @if($val['permission'])
                                        @foreach($val['permission'] as $permission)
                                            <p>{{$permission['name']}}</p>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="../js/jquery.min.js"></script>
<script src="../hadmin/js/bootstrap.min.js"></script>
<script src="../hadmin/js/content.js"></script>
<script src="../hadmin/js/hAdmin.js"></script>
</html>
