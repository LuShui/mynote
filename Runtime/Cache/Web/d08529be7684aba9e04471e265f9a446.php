<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>卢水的技术博客网站</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="卢水的技术博客，一个学习记笔记的网站，一个小网站，一个个人网站">
    <meta name="keywords" content="卢水, 前端开发, 个人博客,  博客, PHP开发, nodejs, HTML, CSS, JS, JavaScript, web development,">
    <meta name="author" content="卢水">
    <link rel="stylesheet" href="/mynote/Public/css/style.css">
    <link rel="stylesheet" href="/mynote/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mynote/Public/css/web.css">
    <link rel="stylesheet" href="/mynote/Public/layer/css/layui.css">
    <link rel="stylesheet" href="/mynote/Public/loading/jquery.mloading.css">
    <script type="text/javascript" src="/mynote/Public/js/jquery-2.1.4.min.js"></script>
    <script src="/mynote/Public/loading/jquery.mloading.js"></script>
</head>
<body>
    <div id="warp" class="container">
        <div class="row">
            <header class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header">
                <div class="row">
                    <div class="blgo-titlename col-xs-12 col-sm-4 col-md-3 col-lg-2">隔壁老王</div>
                    <div class="blgo-catename col-sm-8 col-md-9 col-lg-10">
                        <a>前端笔记</a>
                        <a>后端笔记</a>
                        <a>杂文趣事</a>
                        <a>自我介绍</a>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="contentbox row">
            <div class="session col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <ul class="contentlist" id="contentlist">
                    <!-- <li class="artleitem">
                        <a class="artlebox">
                            <div class="artle-title-box">
                                <div class="artle-category">JavaScript</div>
                                <div class="artle-titlename">这是JavaScript文章，写的非常好</div>
                            </div>
                            <div class="artil-content-box">
                                上套课程讲了Koa2，挑战全栈就必须和数据库打交道，个人觉的作为一个前端开发人员，操作MongoDB还是比较惬意的。因为它是一种NoSql数据库，不用写SQL语句，而且里边的用法都是JSON对象的形式。所以我们在Koa2的课程中间查了Mon...
                            </div>
                            <div class="artil-info-box">
                                <span class="artle-time-span">
                                    <i class="layui-icon artle-icon" style="font-size: 13px; color: #666666;">&#xe637;</i>
                                    2018-01-3</span>
                                <span class="artle-time-span">
                                    <i class="layui-icon artle-icon" style="font-size: 13px; color: #999999;">&#xe612;</i>
                                    隔壁老王</span>
                                <span class="artle-time-span">
                                    <i class="layui-icon artle-icon" style="font-size: 13px; color: #666666;">&#xe705;</i>
                                    点击量(5000)</span>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="adbox col-sm-3 col-md-3 col-lg-3">
                <!-- <ul class="adlist">
                    <li class="aditem">
                        <a target="_blank" class="adbutton" href="https://js001.lieshazhe.com/c.php?id=1555">广告位</a>
                    </li>
                    <li class="aditem">
                        <a target="_blank" class="adbutton" href="https://js001.lieshazhe.com/c.php?id=1554">广告位</a>
                    </li>
                    <li class="aditem">
                        <a target="_blank" class="adbutton" href="https://js001.lieshazhe.com/c.php?id=1553">广告位</a>
                    </li>
                    <li class="aditem">
                        <a target="_blank" class="adbutton" href="https://js001.lieshazhe.com/c.php?id=1552">广告位</a>
                    </li>
                    <li class="aditem">
                        <a target="_blank" class="adbutton" href="https://js001.lieshazhe.com/c.php?id=1525">广告位</a>
                    </li>
                    <li class="aditem">
                        <a target="_blank" class="adbutton" href="https://js001.lieshazhe.com/c.php?id=1509">广告位</a>
                    </li>
                </ul> -->
            </div>
        </div>

        <div id="loadbox" style="height: 100px;"></div>

    </div>

</body>
<script type="text/javascript">

$(function(){ 
    var pageindex = 0; 
    $(window).bind('scroll',function show()  {  
        if($(window).scrollTop()+$(window).height()>=$(document).height())  { 
            pageindex ++; 
            getSoure(pageindex);  
        }  
    }); 

    function getSoure(pageindex){
        $("#loadbox").mLoading('show');
        $.ajax({  
            type:'post',  
            dataType:'json',
            data:{
                'pageindex':pageindex
            } , 
            url:"<?php echo U('index.php/Web/index/homesoure');?>",  
            success:function(res){ 
                if (res.code == 1) {
                    htmlrender(res.ctn);
                }
                $('#loadbox').mLoading("hide"); 
            } ,
            fail:function(){
                $('#loadbox').mLoading("hide");
            } 
        });
    };

    function htmlrender(array){
        let html = '';
        var eles = document.createElement('div');
        for (var i = 0; i < array.length; i++) {
            var json = array[i];
            eles.innerHTML = json.ctn;
            var temp = filterHTMLTag($(eles).text());//.replace(/<[^>]+>/g,"");

            html += '<li class="artleitem">'+
                        '<a class="artlebox" onClick="gotodetil('+json.id+')">'+
                            '<div class="artle-title-box">'+
                                '<div class="artle-category">'+json.typename+'</div>'+
                                '<div class="artle-titlename">'+json.title+'</div>'+
                            '</div>'+
                            '<div class="artil-content-box">'+ json.des + temp +'</div>'+
                            '<div class="artil-info-box">'+
                                '<span class="artle-time-span">'+
                                    '<i class="layui-icon artle-icon" style="font-size: 13px; color: #666666;">&#xe637;</i>2018-01-3</span>'+
                                '<span class="artle-time-span">'+
                                    '<i class="layui-icon artle-icon" style="font-size: 13px; color: #999999;">&#xe612;</i>隔壁老王</span>'+
                                '<span class="artle-time-span">'+
                                    '<i class="layui-icon artle-icon" style="font-size: 13px; color: #666666;">&#xe705;</i>点击量('+json.num+')</span>'+
                            '</div>'+
                        '</a>'+
                    '</li>'
        }
        $('#contentlist').append(html);
    } 

    var filterHTMLTag = function (msg) {
        var msg = msg.replace(/<\/?[^>]*>/g, ''); //去除HTML Tag
        msg = msg.replace(/[|]*\n/, '') //去除行尾空格
        msg = msg.replace(/&npsp;/ig, ''); //去掉npsp
        return msg;
    }
    getSoure(pageindex); 
});

    function gotodetil(id){
        var url = "<?php echo U('index.php/Web/index/detil');?>" + '/id/' +id;
        window.location.href= url;       
    }

</script>
</html>