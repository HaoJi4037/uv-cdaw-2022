<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin-index-JILIJILI</title>
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
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="index.blade.php">JILIJILI by JiaQi Gao et Hao Ji</a></div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>
    <ul class="layui-nav left fast-add" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">+ADD</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a onclick="x_admin_show('资讯','http://www.baidu.com')"><i class="iconfont">&#xe6a2;</i>medias</a></dd>
                <dd><a onclick="x_admin_show('图片','http://www.baidu.com')"><i class="iconfont">&#xe6a8;</i>comments</a></dd>
                <dd><a onclick="x_admin_show('用户','http://www.baidu.com')"><i class="iconfont">&#xe6b8;</i>User</a></dd>
            </dl>
        </li>
    </ul>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a onclick="x_admin_show('个人信息','http://www.baidu.com')">Personnal information</a></dd>
                <dd><a onclick="x_admin_show('切换帐号','http://www.baidu.com')">change account</a></dd>
                <dd><a href="{{ url('admin/logout') }}">logout</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index"><a href="/">front-end index</a></li>
    </ul>

</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>User Management</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/user') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>User List</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/user/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Add User</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>Role Management</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/role') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Role List</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/role/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Add Roles</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>Authority Management</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/permission') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Authority List</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/permission/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Add Authority</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>Category Management</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/cate') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Category List</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/cate/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Add Category</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>Comment Management</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/article') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Comment List</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/article/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>Add Comment</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>网站配置管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/config/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加网站配置</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/config') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>网站配置列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            {{--<li>--}}
                {{--<a href="javascript:;">--}}
                    {{--<i class="iconfont">&#xe726;</i>--}}
                    {{--<cite>管理员管理</cite>--}}
                    {{--<i class="iconfont nav_right">&#xe697;</i>--}}
                {{--</a>--}}
                {{--<ul class="sub-menu">--}}
                    {{--<li>--}}
                        {{--<a _href="admin-list.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>管理员列表</cite>--}}
                        {{--</a>--}}
                    {{--</li >--}}
                    {{--<li>--}}
                        {{--<a _href="admin-role.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>角色管理</cite>--}}
                        {{--</a>--}}
                    {{--</li >--}}
                    {{--<li>--}}
                        {{--<a _href="admin-cate.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>权限分类</cite>--}}
                        {{--</a>--}}
                    {{--</li >--}}
                    {{--<li>--}}
                        {{--<a _href="admin-rule.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>权限管理</cite>--}}
                        {{--</a>--}}
                    {{--</li >--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="javascript:;">--}}
                    {{--<i class="iconfont">&#xe6ce;</i>--}}
                    {{--<cite>系统统计</cite>--}}
                    {{--<i class="iconfont nav_right">&#xe697;</i>--}}
                {{--</a>--}}
                {{--<ul class="sub-menu">--}}
                    {{--<li>--}}
                        {{--<a _href="echarts1.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>拆线图</cite>--}}
                        {{--</a>--}}
                    {{--</li >--}}
                    {{--<li>--}}
                        {{--<a _href="echarts2.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>柱状图</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a _href="echarts3.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>地图</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a _href="echarts4.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>饼图</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a _href="echarts5.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>雷达图</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a _href="echarts6.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>k线图</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a _href="echarts7.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>热力图</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a _href="echarts8.html">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>仪表图</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
        <ul class="layui-tab-title">
            <li>my desktop</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='{{ url('admin/welcome') }}' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<div class="footer">
    <div class="copyright">CDAW Projet final Jiaqi Gao et Hao Ji</div>
</div>
</body>
</html>

