<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <!-- 基础环境引用说明 -->
    <!-- jQuery功能库引用 -->
    <script type="text/javascript" src="../js/jquery.min.js" ></script>

    <!-- SelectMenu插件样式引用 -->
    <link rel="stylesheet" href="../css/selectmenu.css" type="text/css">

    <!-- SelectMenu插件核心脚本 -->
    <script type="text/javascript" src="../js/selectmenu.js" ></script>

    <style>
        .panel-call{
            padding: 15px;
            float: right;
        }
    </style>
</head>
<body>

{{--//HTML按钮--}}
<div class="col-lg-6">
    <button type="button" id="btnMenu" >Select Team</button>
</div>

<div class="panel-call" id="panelCallbackDemo">

</div>
</body>

<script>

    var selectMenuGroupData = [{
        title : 'East',
        list :[
            {id:1 ,name:'Chicago Bulls',desc:'芝加哥公牛',abbr:'CHI'},
            {id:2 ,name:'Cleveland Cavaliers',desc:'克里夫兰骑士',abbr:'CLE'}
        ]
    }
    ];

    $('#btnMenu').click(function(){
        var $box = $('#panelCallbackDemo');
        $(this).selectMenu({
            showField : 'name',
            keyField : 'id',
            multiple : true,
            data : selectMenuGroupData,
            //项目选中事件
            formatItem : function(row){
                var html = '<div class=""><div class="col-md-3">';
                html += '<img src="../img/avatar.jpg" width="64" height="64">';
                html += '</div>';
                html += '<div class="col-md-7">';
                html += row.name + row.name + '<br>' + row.desc;
                html += '</div></div>';
                return html;
            },
            eSelect : function(data){
                $box.empty();
                if(data && data.length){
                    $.each(data, function(i, row){
                        $box.append('<p>Selected '+row.name+' ( '+row.desc+' )</p>');
                    });
                }

            },

            //多分组模式菜单的切换事件
            //index: 当前选中Tab的下标，下标从 0 开始
            //tab: 当前Tab的源数据（json），不包含 list 节点的数据（具体列表项目的数据）
            eTabSwitch: function(index, tab){
                $box.empty();
                $box.append('<p>You switch to the Tab with index <strong>'+index+'</strong>, Tab name is <strong>'+tab.title+'</strong></p>');
            }
        });
    });
</script>
</html>