<html>
<head>
    <link href="../hadmin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../hadmin/css/animate.css" rel="stylesheet">
    <link href="../hadmin/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../hadmin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../hadmin/css/iCheck/custom.css" rel="stylesheet">
    <style>
        .radio label{width:100px;}
    </style>
</head>
<body>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>角色添加</h5>
                </div>
                <div class="ibox-content">
                    {{--<form  class="form-horizontal" action="{{route('admin.platform.manager.add')}}" method="post">--}}
                    {!! Form::open(['enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">账号</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="account" value="{{ old('account', '') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">邮箱</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" value="{{ old('email', '') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">密码</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" value="">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">分配角色</label>

                        <div class="col-sm-10">
                                @foreach($roles as $val)
                                    <div class="checkbox">
                                        <label>
                                            <input name="role_ids[]" type="checkbox" value="{{$val['id']}}">{{$val['name']}}</label>
                                    </div>
                                @endforeach
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">保存内容</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    {{--</form>--}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


</div>

</body>
<script src="../hadmin/js/iCheck/icheck.min.js"></script>
</html>