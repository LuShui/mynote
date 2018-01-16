<?php if (!defined('THINK_PATH')) exit();?><!-- 头部导航 -->
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>一个小网站</title>
<link rel="stylesheet" type="text/css" href="/tpnote/Public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/tpnote/Public/css/style.css">
<link rel="stylesheet" type="text/css" href="/tpnote/Public/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="images/icon/icon.png">
<link rel="shortcut icon" href="images/icon/favicon.ico">
<link rel="stylesheet" href="/tpnote/Public/layer/skin/layer.css" media="all">
<script src="/tpnote/Public/js/jquery-2.1.4.min.js"></script>
<script src="/tpnote/Public/layer/layer.js"></script>

<!--[if gte IE 9]>
  <script src="/tpnote/Publicjs/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="/tpnote/Publicjs/html5shiv.min.js" type="text/javascript"></script>
  <script src="/tpnote/Publicjs/respond.min.js" type="text/javascript"></script>
  <script src="/tpnote/Publicjs/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/">小网站</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="">消息 <span class="badge">1</span></a></li> -->
           <!--  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a> -->
              <!-- <ul class="dropdown-menu dropdown-menu-left">
                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
              </ul> -->
            <!-- </li> -->
            <li><a onClick="exitfunc()">退出登录</a></li>
            <!-- <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li> -->
          </ul>
          <!-- <form action="" method="post" class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit">搜索</button>
              </span> </div>
          </form> -->
        </div>
      </div>
    </nav>
  </header>

  <script type="text/javascript">
    function exitfunc(){
      if(confirm('是否确认退出？')){
        var url = "/tpnote/index.php/Home/login/layout";
        $.post(url ,{'1':'1'},function(data){
           window.location.href = "<?php echo U(Home/login/login);?>";
        });
      }
    }
  </script> 

<!--导航栏-->
<div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class=""><a href="<?php echo U('Home/Admin/index');?>">笔记</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="<?php echo U('Home/Admin/addsq');?>">书签</a></li>
        <!-- <li><a href="notice.html">公告</a></li>
        <li><a href="comment.html">评论</a></li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li> -->
      </ul>
     <!--  <ul class="nav nav-sidebar">
        <li><a href="category.html">栏目</a></li>
        <li><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">其他</a>
          <ul class="dropdown-menu" aria-labelledby="otherMenu">
            <li><a href="flink.html">友情链接</a></li>
            <li><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>
          </ul>
        </li>
      </ul> -->
      <!-- <ul class="nav nav-sidebar">
        <li><a class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">用户</a>
          <ul class="dropdown-menu" aria-labelledby="userMenu">
            <li><a data-toggle="modal" data-target="#areDeveloping">管理用户组</a></li>
            <li><a href="manage-user.html">管理用户</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="loginlog.html">管理登录日志</a></li>
          </ul>
        </li>
        <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
          <ul class="dropdown-menu" aria-labelledby="settingMenu">
            <li><a href="setting.html">基本设置</a></li>
            <li><a href="readset.html">阅读设置</a></li>
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" data-target="#areDeveloping">安全配置</a></li>
            <li role="separator" class="divider"></li>
            <li class="disabled"><a>扩展菜单</a></li>
          </ul>
        </li>
      </ul> -->
    </aside>



<script type="text/javascript">
(function(){
  var list = $('li');
  list.click(function(){
    list.removeClass('active');
    $(this).addClass('active');
  });
})();

</script>

   


    
<style type="text/css">

	#warp{
		/*max-width: 970px;*/
		padding: 30px;
		margin: 0 auto;
	}
	.item{
	height: 40px;
	}
	.lableitem{
	display: block;
	width: 100px;
	height: 30px;
	line-height: 30px;
	background-color: #3399CC;
	vertical-align: top;
	float: left;
	text-align: center;
	color: white;
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
	}
	.fromdata{
	max-width: 970px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	}
	#select{
	display: block;
	float: left;
	height: 30px;
	width: 160px;
	text-align: center;
	text-indent: 1em;
	font-size: 16px;
	outline: none;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 1px solid #3399CC;
	border-bottom-right-radius: 5px;
	border-top-right-radius: 5px;

	}
	option{
	display: block;
	height: 30px;
	line-height: 30px;
	}
	input{
	display: block;
	float: left;
	height: 30px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 1px solid #3399CC;
	text-indent: 1em;
	outline: none;
	width: 500px;
	border-bottom-right-radius: 5px;
	border-top-right-radius: 5px;
	}
	#save {
	position: absolute;
	top: 60px;
	right: 30px;

	/*margin-top: 120px;*/

	}
	.buttom {
	display: block;
	width: 160px;
	height: 40px;
	line-height: 40px;
	text-align: center;
	background-color: #3399CC;
	color: white;
	border-radius: 5px;
	margin: 0 auto;
	font-size: 16px;

	}
	.buttom:hover{
	background-color: #2c3e50;
	}

</style>
	<script type="text/javascript" src="/tpnote/Public/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/tpnote/Public/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="/tpnote/Public/jquery.min.js"></script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
       <h1 class="page-header">笔记添加</h1>
     <div id="warp">
    <div class="fromdata">
      <div class="item">
        <span class="lableitem" for="titlename">标题</span>
        <input id="titlename" name="titlename" placeholder="请输入标题">
      </div>
      <div class="item">
        <span class="lableitem" for="select">类型</span>
        <select id="select"  name="type">
          <option value="1">jvascript语法</option>
          <option value="2">html</option>
          <option value="3">css</option>
          <option value="4">构建工具</option>
          <option value="5">js插件</option>
          <option value="6">php相关</option>
        </select>
      </div>
      <div class="item" placeholder="请输入描述">
        <span class="lableitem" for="desbute">描述</span>
        <input id="desbute" name="desbute" placeholder="请输入描述">
      </div>
    </div>
     <script id="container" name="content" type="text/plain" style="margin: 0 auto;width: 100%"> </script>
    <div id="save">
      <a class="buttom" onclick="savefunc()">保存</a>
    </div>
</div>
</div>
</section>
<script type="text/javascript">
    var ue = UE.getEditor('container',{
      autoHeightEnabled: true,
      autoFloatEnabled: true,
      initialFrameHeight:483
    });
    var titlename = document.getElementById('titlename');
    var select = document.getElementById('select');
    var desbute = document.getElementById('desbute');

    function savefunc(){
      if (titlename.value == '') {
          	layer.msg('标题不能为空');
      }	else if(desbute.value == ''){
          	layer.msg('描述不能为空');
      }else if(ue.getContent() == ''){
          	layer.msg('内容不能为空');
      }else{
		sendsoure();
      }
    }

    function sendsoure(){
    	layer.load();
      	var url="/tpnote/index.php/home/admin/savecontent";
      	var data = {
        	'titlename': titlename.value,
          	'type': select.value,
          	'desbute': desbute.value,
          	'content': ue.getContent()
      	}
      	$.ajax({
        	method: "POST",
        	url:url,
        	data:data,
        	dataType:"json"
      	}).done(function(ret){
      		console.log(ret)
      		layer.closeAll('loading');
          	if (parseInt(ret['code']) == 1) {
          		layer.msg('添加成功');
	          	setTimeout(function(){
					window.location.reload();
	         	 },1500);
          	}else{
          		layer.msg('怎么出错了');
          	}
        });
    }


</script>
<script src="/tpnote/Public/js/bootstrap.min.js"></script>
<script src="/tpnote/Public/js/bootstrap.min.js"></script>  
</body>
</html>