<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>搜索结果 - {pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel='stylesheet' id='contact-form-7-css'  href='{pboot:sitedomain}/skin/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-lightbox-swipebox-front-css'  href='{pboot:sitedomain}/skin/swipebox.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-pagenavi-css'  href='{pboot:sitedomain}/skin/pagenavi-css.css' type='text/css' media='all' />
<link rel='stylesheet' id='kube-css'  href='{pboot:sitedomain}/skin/kube.css' type='text/css' media='all' />
<script type='text/javascript' src='{pboot:sitedomain}/skin/jquery.min.js'></script>
<script type='text/javascript' src='{pboot:sitedomain}/skin/jquery.swipebox.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var rlArgs = {"script":"swipebox","selector":"lightbox","custom_events":"","activeGalleries":"1","animation":"1","hideCloseButtonOnMobile":"0","hideBars":"1","hideBarsDelay":"5000","videoMaxWidth":"1080","useSVG":"","loopAtEnd":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='{pboot:sitedomain}/skin/front.js'></script>
<script type='text/javascript' src='{pboot:sitedomain}/skin/jquery.masonry.js'></script>
<link rel="stylesheet" type="text/css" href="{pboot:sitedomain}/skin/black.css" />
<style></style>
</head>
<body  class="custom-background">
<!--加载进度条--> 
<script type="text/javascript">
jQuery(function(){
jQuery('#loading-one').empty().append('页面载入完毕.').parent().fadeOut('slow');
});
</script>
<div id="main_loading"  onclick="javascript:turnoff('loading')">
  <p id="loading-one" onclick="javascript:turnoff('loading')">页面载入中...</p>
</div>
<script type="text/javascript">
//<![CDATA[
function turnoff(obj){
document.getElementById(obj).style.display="none";
}
//]]&gt;
</script> 
<!--加载进度条--> 
<!--head--> 
<div id="head" class="row">
  <div class="mainbar row">
    <div class="container">
      <div id="topbar">
        <ul id="toolbar" class="menu">
          <li class="menu-item">  </li>
        </ul>
      </div>
      <div id="rss">
        <ul>
          <li><a href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes" target="_blank" class="icon4" title="在线QQ客服" rel="nofollow"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="container">
    <div id="blogname" class="third"> <a href="/" title="{pboot:sitetitle}">
      <h1>{pboot:sitetitle}</h1>
      <img src="/skin/logo.png" alt="{pboot:sitetitle}" /></a> </div>
    </div>
  <div class="clear"></div>
</div>
<div class="mainmenus container">
  <div class="mainmenu">
    <div class="topnav"> <a href="/" title="首页" class="home_none">首页</a>
      <div class="menu-button"><i class="menu-ico"></i></div>
      <!--导航-->
      <ul class="menu">
        {pboot:nav num=15}
          <li class="menu-item {pboot:if('[nav:scode]'=='{sort:tcode}')}current-menu-item{/pboot:if}"> <a href="[nav:link]">[nav:name]</a>
           <ul class="sub-menu">
           {pboot:2nav num=10 parent=[nav:scode]}
           <li><a href="[2nav:link]">[2nav:name]</a></li>
           {/pboot:2nav}
           </ul>
          </li>
          {/pboot:nav}
      </ul>
      <!--导航 end-->
      <ul class="menu-right">
        <li class="menu-search"> <a href="#" id="menu-search" title="搜索"></a>
          <div class="menu-search-form ">
            <form action="{pboot:scaction}" method="get">
              <input name="keyword" type="text" id="search" value="" maxlength="150" placeholder="请输入搜索内容" style="width:135px">
              <input type="submit" value="搜索" class="button"/>
            </form>
          </div>
        </li>
      </ul>
      <!-- menus END --> 
    </div>
  </div>
  <div class="clear"></div>
</div>
 
<!--head end-->
<div class="container">
  <div class="row">
    <div class="subsidiary box">
      <div class="bulletin fourfifth"> <span class="sixth">当前位置：</span> <span class="current"> 搜索：{pboot:keyword}</span> </div>
    </div>
  </div>
  <!--right--> 
  
<div id="sidebar">
  <div class="widget box row">
    <h3>NEWS</h3>
    <ul>
      {pboot:list num=10 scode={sort:scode} page=0}
      <li> <a href="[list:link]">[list:title lencn=20]</a> </li>
      {/pboot:list}
    </ul>
  </div>
  <div class="search box row">
    <div class="search_site">
      <form action="{pboot:scaction}" method="get" id="searchform">
        <input type="submit" value="" id="searchsubmit" class="button"/>
        <label><span>请输入搜索内容</span>
          <input type="text" class="search-s" name="keyword" />
        </label>
      </form>
    </div>
  </div>
  <div class="widget box row">
    <h3>微信公众帐号-扫一扫哦！</h3>
    <div class="textwidget"><a id="adv" rel="external" href="{pboot:siteindex}"> <img src="{pboot:sitedomain}/skin/weixin.jpg" /></a></div>
  </div>
  <div class="widget box row">
    <h3>推荐图文</h3>
    <div class="siderbar-list">
      <ul class="imglist clear">
        {pboot:list num=6 scode={sort:scode} page=0}
        <li class="post"> <a href="[list:link]" title="[list:title]"> <img src="[list:ico]" width="142" height="95" alt="[list:title]">
          <h4>[list:title lencn=18]</h4>
          </a> </li>
        {/pboot:list}
      </ul>
    </div>
  </div>
  <div class="widget box row">
    <h3>HOT TAGS</h3>
    <ul class='xoxo blogroll'>
      {pboot:tags num=20}
      <li><a href='[tags:link]'>[tags:text]</a></li>
      {/pboot:tags}
    </ul>
  </div>
  <div id="sidebar-follow"> </div>
</div>
 
  <!--right end -->
  
  <div class="mainleft">
    <ul id="post_container" class="masonry clearfix">
      {pboot:search num=12 order=date}
      <li class="post box row ">
        <div class="thumbnail"> <a href="[search:link]" class="zoom"  target="_blank" title="[list:title]"> <img src="[search:ico]" alt="[list:title]" />
          <div class="zoomOverlay"></div>
          </a> </div>
        <div class="article">
          <h2><a href="[search:link]"  target="_blank" title="[list:title]">[search:title]</a></h2>
        </div>
        <div class="info"> <span class="info_date info_ico">[search:date]</span> <span class="info_views info_ico">[search:visits] </span> 
          <!--评论数 <span class="info_comment info_ico"><a href="#">88</a></span>--> 
          <span class="info_category info_ico"><a href="[search:sortlink]" rel="category">[search:sortname]</a></span> </div>
      </li>
      {/pboot:search}
    </ul>
    <div class="clear"></div>
    <div class="dede_pages">
      <ul>
        {pboot:if({page:rows}>0)}
        <a href="{page:index}">首页</a>
        <a href='{page:pre}'>上一页</a>
        {page:numbar}
        <a href='{page:next}'>下一页</a>
        <a href='{page:last}'>末页</a>
        {/pboot:if}
      </ul>
    </div>
  </div>
</div>
<div class="clear"></div>
<!--footer--> 
<div id="footer">
  <div class="footnav container">
    <div class="menu">
      <ul>
        友情链接：
        {pboot:link num=30 gid=1}<a href="[link:link]" target="_blank">[link:name]</a> {/pboot:link}
      </ul>
    </div>
  </div>
  <div class="copyright">
    <p>{pboot:sitecopyright} <a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">{pboot:siteicp}</a> <a href="/sitemap.xml" target="_blank">XML地图</a> <a href="http://www.adminbuy.cn" target="_blank">网站源码</a></p>
  </div>
</div>
</div>
<!--gototop-->
<div id="tbox"> <a id="gotop" href="javascript:void(0)"></a> </div>
<script type='text/javascript' src='{pboot:sitedomain}/skin/jquery.form.min.js'></script> 
<script type='text/javascript' src='{pboot:sitedomain}/skin/scripts.js'></script> 
<script type='text/javascript' src='{pboot:sitedomain}/skin/loostrive.js'></script> 
<!--footer  end-->
</body>
</html><?php return array (
  0 => '/www/wwwroot/test.admin868.com/template/default/html/head.html',
  1 => '/www/wwwroot/test.admin868.com/template/default/html/right.html',
  2 => '/www/wwwroot/test.admin868.com/template/default/html/foot.html',
); ?>