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
            <li><a href="">消息 <span class="badge">1</span></a></li>
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-menu-left">
                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
              </ul>
            </li>
            <li><a href="login.html" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
            <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li>
          </ul>
          <form action="" method="post" class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit">搜索</button>
              </span> </div>
          </form>
        </div>
      </div>
    </nav>
  </header> 

<!--导航栏-->
<div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="<?php echo U('Home/Admin/index');?>">笔记</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="article.html">文章</a></li>
        <li><a href="notice.html">公告</a></li>
        <li><a href="comment.html">评论</a></li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li>
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
   


    

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <form action="/Article/checkAll" method="post" >
        <h1 class="page-header">操作</h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo U('Home/Admin/addnote');?>">增加文章</a></li>
        </ol>
        <h1 class="page-header">管理 <span class="badge"></span></h1>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>  
                <th> <span class="visible-lg">文章标题</span></th>
                <th> <span class="visible-lg">文章描述</span></th>
                <th class="hidden-sm"></span> <span class="visible-lg">类型</span></th>
                <th class="hidden-sm"></span> <span class="visible-lg">查看次数</span></th>
                <th><span class="visible-lg">添加日期</span></th>
                <th></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($list)): foreach($list as $key=>$json): ?><tr>
                  <td class="article-title"><?php echo ($json["title"]); ?></td>
                  <td><?php echo ($json["des"]); ?></td>
                  <td class="hidden-sm">
                    <?php switch($json["type"]): case "1": ?>Javascript<?php break;?>    
                      <?php case "2": ?>html<?php break;?>
                      <?php case "3": ?>css<?php break;?>    
                      <?php case "4": ?>构建工具<?php break;?>    
                      <?php case "5": ?>js插件<?php break;?>    
                      <?php case "6": ?>php<?php break;?>
                      <?php default: ?>default<?php endswitch;?>    
                  </td>
                  <td class="hidden-sm"><?php echo ($json["num"]); ?></td>
                  <td><?php echo (date("Y-m-d",$json["addtime"])); ?></td>
                  <td>
                    <a href="editnote/id/<?php echo ($json["id"]); ?>">修改</a> 
                    <a href="changestaue/id/<?php echo ($json["id"]); ?>" rel="6">删除</a>
                  </td>
                </tr><?php endforeach; endif; ?>
            </tbody>
          </table>
        </div>
      </form>
    </div>
</section>

<script src="/tpnote/Public/js/bootstrap.min.js"></script> 
<script src="/tpnote/Public/js/admin-scripts.js"></script>
</body>
</html>