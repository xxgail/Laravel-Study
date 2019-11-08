@extends('base')
@section('title', 'had')

@section('content')


<div class="wrapper wrapper-content animated fadeInRight">
    <div id="toolbar" class="btn-group" style="margin-left: 1%; margin-bottom: 2%;">
        <button class="btn btn-success add" type="button" title="添加">
            <i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">添加权限</span>
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permission as $val)
                            <tr>
                                <td>{{$val['id']}}</td>
                                <td>{{$val['name']}}</td>
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
            var url = "{{route('permission.add')}}";
            layer.open({
                type: 2,
                title: '新增数据',
                shadeClose: true,
                shade: 0.8,
                maxmin: true,
                area: ['70%', '70%'],
                content: url,//iframe的url
                end: function(){
                    //console.log("2222");
                    $('#contentTable').bootstrapTable('refresh');
                }
            });
        })
    </script>
@stop
