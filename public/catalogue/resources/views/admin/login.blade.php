<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin-login-X-admin2.0</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />


   
    <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/xadmin.css') }}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('admin/lib/layui/layui.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('admin/js/xadmin.js') }}"></script>


</head>
<body class="login-bg">
    
    <div class="login">
        <div class="message">administer login </div>

        @if (!empty($errors))
            <div class="alert alert-danger">
                <ul>
                    @if(is_object($errors))
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @else
                        <li>{{ $errors }}</li>
                    @endif
                </ul>
            </div>
        @endif
        <div id="darkbannerwrap"></div>
        
        <form method="post" class="layui-form" action="{{ url('admin/dologin') }}">
            {{ csrf_field() }}
            <input name="username" placeholder="username"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="password"  type="password" class="layui-input">
            <hr class="hr15">


            {{--<a onclick="javascript:re_captcha();">--}}
                {{--<img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6">--}}
            {{--</a>--}}

            
            <input value="Login" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              // layer.msg('???????????????', function(){
              //   //??????????????????
              //   });
              //????????????
              form.on('submit(login)', function(data){

              });
            });
        })







    </script>
    <script type="text/javascript">
        {{--function re_captcha() {--}}
            {{--$url = "{{ URL('/code/captcha') }}";--}}
            {{--$url = $url + "/" + Math.random();--}}
            {{--document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;--}}
        {{--}--}}
    </script>


    <!-- ???????????? -->
    <script>
    //?????????????????????
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>