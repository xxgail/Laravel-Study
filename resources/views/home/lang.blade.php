<html>
<head>
    <title>xxxxx</title>
</head>
<body>

<meta name="csrf-token" content="{{ csrf_token() }}">
<select name="lang" id="lang">
    <option value="zh" @if(Session::get('language') == 'zh') selected @endif>中文</option>
    <option value="en" @if(Session::get('language') == 'en') selected @endif>English</option>
</select>

<h1 style="color: antiquewhite; text-align: center;">
    {{trans('message.welcome',['name' => 'hao'])}}
</h1>

</body>
<script src="../js/jquery.min.js"></script>
<script>
    $("#lang").change(function(){
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.post(
            "{{route('home.language')}}",
            {
                lang:$("#lang").val()
            },
            function(d){
                if(d){
                    console.log(d);
                    location.reload(); //重新刷新页面
                }
            }
        );
    });
    document.addEventListener('visibilitychange',function () {
        document.title = document.hidden ? '快回来！' : 'xxxxx';
    });
</script>


</html>