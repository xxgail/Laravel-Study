<html>
<head>
    <link href="{{public_path('../hadmin/css/animate.css')}}">
{{--    <link href="../hadmin/css/font-awesome.css?v=4.4.0" rel="stylesheet">--}}
    <link href="../hadmin/css/animate.css" rel="stylesheet">
    <link href="../hadmin/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../hadmin/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>编辑学生</h5>
                </div>
                <div class="ibox-content">
                    {!! Form::open(['enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">姓名</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">年龄</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="age" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">性别</label>

                        <div class="col-sm-10">
                            <label>
                                <input type="radio" class="form-control" name="gender" value="1"> 男
                            </label>
                            <label>
                                <input type="radio" class="form-control" name="gender" value="0"> 女
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">保存内容</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


</div>

</body>

</html>