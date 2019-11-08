@extends('base')
@section('title', 'had')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div id="toolbar" class="btn-group" style="margin-left: 1%; margin-bottom: 2%;">
        <button class="btn btn-success add" type="button" title="添加">
            <i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">添加用户</span>
        </button>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="ibox-tools">


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
                            <th>角色</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $val)
                            <tr>
                                <td>{{$val['id']}}</td>
                                <td>{{$val['name']}}</td>
                                <td>
{{--                                    @if($val['permission'])--}}
{{--                                        @foreach($val['permission'] as $permission)--}}
{{--                                            <span>{{$permission['name']}},</span>--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
                                    {{$val['name']}}
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
@stop
@section('script')
    <script>
        $('body').on('click', 'button.add', function() { //新增
            var url = "{{route('user.add')}}";
            layer.open({
                type: 2,
                title: '新增数据',
                shadeClose: true,
                shade: 0.8,
                maxmin: true,
                area: ['90%', '90%'],
                content: url,//iframe的url
                end: function(){
                    //console.log("2222");
                    $('#contentTable').bootstrapTable('refresh');
                }
            });
        })
    </script>
@stop
{{--</body>--}}
{{--<script src="../js/jquery.min.js"></script>--}}
{{--<script src="../hadmin/js/bootstrap.min.js"></script>--}}
{{--<script src="../hadmin/js/content.js"></script>--}}
{{--<script src="../hadmin/js/hAdmin.js"></script>--}}
{{--<script src="../hadmin/layer/layer.min.js"></script>--}}

{{--</html>--}}
