<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>登录</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body>
<div class="dowebok">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../img/img-01.png" alt="IMG">
            </div>

            {!! Form::open(['enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}

                <span class="login100-form-title">
					会员登陆
				</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="account" placeholder="账号">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="password" placeholder="密码">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        登陆
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <a class="txt2" href="javascript:">
                        忘记密码？
                    </a>
                </div>

                <div class="text-center p-t-136">
{{--                    <a class="txt2" href="http://www.dowebok.com/" target="_blank">--}}
{{--                        还没有账号？立即注册--}}
{{--                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>--}}
{{--                    </a>--}}
                </div>

                {{ csrf_field() }}
                {{--</form>--}}
                {!! Form::close() !!}


        </div>
    </div>
</div>

</body>
</html>