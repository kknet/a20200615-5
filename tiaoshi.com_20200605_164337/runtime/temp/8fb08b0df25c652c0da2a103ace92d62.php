<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:39:"template/RX03/new1685/user/popedom.html";i:1586287957;s:64:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/user/include.html";i:1576939983;s:61:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/user/head.html";i:1576939971;s:61:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/user/menu.html";i:1577449667;s:63:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/foot.html";i:1577472563;}*/ ?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <meta http-equiv="Cache-Control" content="max-age=60" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <meta http-equiv="Cache-Control" content="no-transform" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="renderer" content="webkit" /> 
  <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" /> 
  <meta name="apple-mobile-web-app-title" content="<?php echo $maccms['site_name']; ?>" /> 
  <title>充值中心 - 个人中心 - <?php echo $maccms['site_name']; ?></title> 
  <meta name="keywords" content="个人中心,<?php echo $maccms['site_keywords']; ?>" /> 
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <!-- Favicon Icon --> 
  <link rel="icon" type="image/png" href="<?php echo $maccms['path_tpl']; ?>html/style/images/favicon.png" /> 
  <!-- Bootstrap core CSS--> 
  <link href="<?php echo $maccms['path_tpl']; ?>html/style/css/bootstrap.min.css" rel="stylesheet" /> 
  <!-- Custom fonts for this template--> 
  <link href="<?php echo $maccms['path_tpl']; ?>html/style/css/all.min.css" rel="stylesheet" type="text/css" /> 
  <!-- Custom styles for this template--> 
  <link href="<?php echo $maccms['path_tpl']; ?>html/style/css/osahan.css" rel="stylesheet" /> 
  <!-- Owl Carousel --> 
  <link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>html/style/css/owl.carousel.css" /> 
  <link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>html/style/css/owl.theme.css" /> 
  <link href="<?php echo $maccms['path_tpl']; ?>html/style/css/sweetalert.css" rel="stylesheet" type="text/css" /> 
  <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/sweetalert.min.js" type="text/javascript"></script> 
  <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/jquery.min.js"></script> 
  <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/jquery.lazyload.min.js"></script> 
  <script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['site_wapurl']; ?>js/jquery.superslide.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['site_wapurl']; ?>js/formValidator-4.0.1.js" type="text/javascript"></script>
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
<link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/orang.css" rel="stylesheet" type="text/css" /> 
<style>.table.table-sm .div-pc {display: table-row-group;vertical-align: middle;border-color: inherit;}.table.table-sm ul {padding-left: 0;display: table-row;vertical-align: inherit;border-color: inherit;}.ui-slide-block li {float: left;border-bottom: 1px solid #dee2e6;list-style-type: none;width: 25%;padding: .3rem;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}.ui-slide-block-pc li,.ui-slide-block-pc-down li,.ui-slide-block-pc-down2 li{width: 120px;font-size: 14px;line-height: 25px !important;padding: .3rem;vertical-align: top;float: left;border-bottom: 1px solid #dee2e6;list-style-type: none;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}@media (max-width: 768px){body.sidebar-toggled #block-slide{display: block !important}.navbar-brand{width:8rem;margin-right: 0rem!important;}.table.table-sm ul{display:block;overflow:hidden;}}</style>    
   <style>
        .sidebar .nav-item .dropdown-menu{
            top: -100%!important;
        }
        .shadow_border{border: 1px solid #000;padding: 60px; width:100px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: #666 0px 0px 10px;
            -moz-box-shadow: #666 0px 0px 10px;
            box-shadow: #666 0px 0px 10px;}


        .shadow_font{text-shadow: #f00 3px 3px 3px;}

        .nav_new{
            position: fixed;

            z-index: 99;
            width: 100%;
        }
        .ui-fix-top{
            position: fixed;
            left:0;
            right:0;
            top:0
        }
        .ui-wrapper{
            margin-top: 58px;
        }
        .ui-slide-block-pc,.ui-slide-block-pc-down2{
            background: linear-gradient(123deg, #ff516b 0%,#8876ea 100%);
            display: none;
            /*position: sticky;*/
            position: fixed;
            z-index: 100;
            margin-left: 14.1rem;
            border-bottom:5px solid #ffbfef;
            border-right:5px solid #ffbfef;
            /*border-left:5px solid #ffbfef;*/
        }


         .ui-slide-block-pc td,.ui-slide-block-pc-down2 td{
             width: 120px;
             font-size: 14px;
             line-height: 25px !important;
         }

        .ui-slide-block-pc-down{
            background: linear-gradient(123deg, #69dccc 0%,#5b4baf 100%);
            display: none;
            /*position: sticky;*/
            position: fixed;
            z-index: 100;
            margin-left: 14.1rem;
            border-bottom:5px solid #a8f7ee;
            border-right:5px solid #a8f7ee;
            /*border-left:5px solid #ffbfef;*/
        }

        .ui-slide-block-pc-down td{
            width: 120px;
            font-size: 14px;
            line-height: 25px !important;
        }

        .ui-slide-block{
            background: linear-gradient(123deg, #ff516b 0%,#8876ea 100%);
            display: none;
            position: sticky;
            position: fixed;
            z-index: 100;
        }

        .no-border{
            border-top: 0px solid #dee2e6 !important;
        }


    </style>   
 </head>
 <body id="page-top" class="fed-min-width">
  <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
  <button type="button" class="d-block d-sm-none btn btn-primary border-none btn-sm order-1 order-sm-0" id="sidebarToggle"><i
		 class="fa fa-bars"></i>导航</button>
  <button class="d-none d-sm-block btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle"> <i class="fa fa-bars"></i> </button>
  <a class="navbar-brand" href="/" style="margin-right: 1.3rem;"><img class="img-fluid" style="max-width: 90%;" alt="<?php echo $maccms['site_name']; ?>"
		 src="/<?php echo $maccms['site_logo']; ?>" /></a>
  <button type="button" class="d-none d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0" id="sidebarTogglePc"><i
		 class="fa fa-bars"></i> 在线视频分类</button>
<!--  <button type="button" style="margin-left: 20px" class="d-none d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0"
	 id="sidebarTogglePcDown"><i class="fa fa-bars"></i> 套图专区分类</button>-->
  <button type="button" style="margin-left: 20px" class="d-none d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0"
	 id="sidebarTogglePcDown2"><i class="fa fa-bars"></i> 小说专区分类</button>
  <!-- Navbar Search -->
  <form id="search" action="<?php echo mac_url('vod/search'); ?>" method="get" onSubmit="return qrsearch();" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
    <div class="input-group">
      <input type="text" id="wd" name="wd" class="form-control" placeholder="输入关键字进行搜索…" />
      <div class="input-group-append">
        <button class="btn btn-light" type="submit"> <i class="fa fa-search"></i> </button>
      </div>
    </div>
  </form>
  <!-- Navbar -->
  <?php if($GLOBALS['user']['user_id']): ?>
  <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
    <li class="nav-item dropdown no-arrow osahan-right-navbar-user"> <a class="nav-link dropdown-toggle user-dropdown-link"
			 id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
				 alt="Avatar" src="<?php echo mac_get_user_portrait($user['user_id']); ?>" /> 个人中心 </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> <?php echo $user['user_name']; ?></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo mac_url('user/index'); ?>"><i class="fa fa-fw fa-user-circle"></i> 进入会员中心</a> <a class="dropdown-item" href="<?php echo mac_url('user/upgrade'); ?>"><i class="fa fa-fw fa-money-bill"></i> 升级VIP</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo url('user/logout'); ?>" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out"></i> 退出</a> </div>
    </li>
  </ul>
  <?php else: ?>
  <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
    <li class="nav-item dropdown no-arrow osahan-right-navbar-user"> <a class="nav-link" href="<?php echo mac_url('user/login'); ?>"
			 style="font-size: 14px"> <i class="fa fa-user-circle fa-fw"></i> 登录 </a> </li>
    <li class="nav-item dropdown no-arrow osahan-right-navbar-user"> <a class="nav-link" href="<?php echo mac_url('user/reg'); ?>"
			 style="font-size: 14px"> <i class="fa fa-registered fa-fw"></i> 注册 </a> </li>
  </ul>
  <?php endif; ?> </nav>
<div class="ui-slide-block" style="font-size: 12px;display: none;" id="block-slide">
  <div class="container">
    <div class="table table-sm" style="margin-bottom: 0rem;">
      <div>
        <div style="line-height:20px;padding: .3rem;">
          <form id="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();" class="form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 ">
            <div class="input-group">
              <input class="form-control border-form-control search-input" style="background-color: white;border: none" id="wd"
							 name="wd" placeholder="输入关键字进行搜索" type="text" />
              <button type="submit" class="btn btn-danger border-none"> 搜索 </button>
            </div>
          </form>
        </div>
        <span style="color: #ffade8;font-size: 16px" target="_blank"><i class="fa fa-fw fa-video"></i>视频区</span>
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="<?php echo mac_url('user/upgrade'); ?>" target="_blank"><b>升级VIP</b></a></li>
		  <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/type/id/20.html" target="_blank"><b>试看</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/time_add.html" target="_blank"><b>最近更新</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/hits.html" target="_blank"><b>最多观看</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"child","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!--<span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fa fa-image"></i>套图区</span>
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/index.php/art/search/by/time_add.html" target="_blank">最新套图</a></li>
          <li style="line-height:20px"><a style="color: white;" href="/index.php/art/search/by/hits.html" target="_blank">热门套图</a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>-->
        <span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fa fa-fw fa-book"></i>小说区</span>
        <ul>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="ui-slide-block-pc" id="block-slide-pc">
  <div class="container">
    <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
      <div class="div-pc">
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/user/upgrade.html" target="_blank"><b>升级VIP</b></a></li>
		  <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/type/id/20.html" target="_blank"><b>试看</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/time_add.html" target="_blank"><b>最近更新</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/hits.html" target="_blank"><b>最多观看</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"child","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="ui-slide-block-pc-down" id="block-slide-pc-down">
  <div class="container">
    <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
      <div class="div-pc">
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="<?php echo mac_url('user/upgrade'); ?>" target="_blank"><b>升级VIP</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/art/search/by/time_add.html" target="_blank"><b>最新套图</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/art/search/by/hits.html" target="_blank"><b>热门套图</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="ui-slide-block-pc-down2" id="block-slide-pc-down2">
  <div class="container">
    <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
      <div class="div-pc">
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="<?php echo mac_url('user/upgrade'); ?>" target="_blank"><b>升级VIP</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

  <div class="fed-main-info fed-min-width"> 
   <div class="fed-part-case"> 
    <div class="fed-user-head fed-margin-top fed-back-whits"> 
     <div class="fed-list-pics fed-lazy fed-part-5by2 fed-part-rows" style="background:url(<?php echo $maccms['path_tpl']; ?>html/style/images/user.jpg);"> 
      <div class="fed-part-core fed-text-center"> 
       <div class="fed-user-image" data-role="<?php echo mac_url('user/portrait'); ?>"> 
        <img class="face fed-user-avat fed-part-roun" src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'static/images/touxiang.png')); ?>?v=<?php echo time(); ?>" /> 
       </div> 
       <span class="fed-visible fed-text-white fed-padding"><?php echo $obj['user_name']; ?></span> 
      </div> 
     </div> 
     <div class="fed-padding fed-part-rows fed-back-whits fed-hide-md"> 
      <ul class="fed-user-brief fed-part-rows fed-back-whits"> 
       <li class="fed-padding-x fed-text-center fed-col-xs4"> <span class="fed-visible fed-text-gules"><?php echo $obj['user_points']; ?></span> <span class="fed-visible">我的积分</span> </li> 
       <li class="fed-padding-x fed-text-center fed-line-left fed-col-xs4"> <span class="fed-visible fed-text-gules"><?php echo $obj['group']['group_name']; ?></span> <span class="fed-visible">我的等级</span> </li> 
       <li class="fed-padding-x fed-text-center fed-line-left fed-col-xs4"> <span class="fed-visible fed-text-gules"><?php echo $obj['user_extend']; ?></span> <span class="fed-visible">推广次数</span> </li> 
      </ul> 
     </div> 
    </div> 
    <div class="fed-part-rows"> 
     <div class="fed-main-left fed-col-xs12 fed-col-md4 fed-col-lg3 fed-hide-xs fed-hide-sm fed-show-md-block">
       <div class="fed-part-layout fed-back-whits fed-margin-right fed-hide-xs fed-hide-sm fed-show-md-block">
  <ul class="fed-user-brief fed-part-rows fed-back-whits">
    <li class="fed-padding-x fed-text-center fed-col-xs4"> <span class="fed-visible fed-text-gules"><?php echo $obj['user_points']; ?></span> <span class="fed-visible">我的积分</span> </li>
    <li class="fed-padding-x fed-text-center fed-line-left fed-col-xs4"> <span class="fed-visible fed-text-gules"><?php echo $obj['group']['group_name']; ?></span> <span class="fed-visible">我的等级</span> </li>
    <li class="fed-padding-x fed-text-center fed-line-left fed-col-xs4"> <span class="fed-visible fed-text-gules"><?php echo $obj['user_login_num']; ?></span> <span class="fed-visible">登录次数</span> </li>
  </ul>
</div>
<div class="fed-part-layout fed-back-whits fed-margin-right">
  <ul class="fed-user-list fed-part-rows fed-back-whits">
    <li class="fed-padding-x fed-part-rows fed-line-bottom fed-hide-md"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/ajax_info'); ?>"> <span class="fed-col-xs4 fed-part-eone">我的资料</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows"> <a class="fed-rims-info fed-btns-info fed-btns-green fed-col-xs12" href="<?php echo mac_url('user/buy'); ?>">充值会员</a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/upgrade'); ?>"> <span class="fed-col-xs4 fed-part-eone">积分兑换</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom fed-hide fed-show-md-block"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/index'); ?>"> <span class="fed-col-xs4 fed-part-eone">我的资料</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/info'); ?>"> <span class="fed-col-xs4 fed-part-eone">修改资料</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/favs'); ?>"> <span class="fed-col-xs4 fed-part-eone">我的收藏</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/plays'); ?>"> <span class="fed-col-xs4 fed-part-eone">播放记录</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/popedom'); ?>"> <span class="fed-col-xs4 fed-part-eone">我的权限</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/orders'); ?>"> <span class="fed-col-xs4 fed-part-eone">充值记录</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <li class="fed-padding-x fed-part-rows fed-line-bottom"> <a class="fed-tabs-title fed-visible fed-font-xvi fed-part-rows" href="<?php echo mac_url('user/reward'); ?>"> <span class="fed-col-xs4 fed-part-eone">我的推广</span> <span class="fed-col-xs8 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </a> </li>
    <div class="fed-part-rows fed-padding-top"></div>
    <li class="fed-padding-x fed-part-rows"> <a class="fed-rims-info fed-btns-info fed-btns-green fed-col-xs12" href="<?php echo mac_url('user/logout'); ?>">退出</a> </li>
  </ul>
</div> 
     </div> 
     <div class="fed-main-right fed-col-xs12 fed-col-md8 fed-col-lg9"> 
      <div class="fed-part-layout fed-back-whits"> 
       <div class="fed-user-title fed-list-head fed-part-rows fed-padding fed-line-bottom"> 
        <h2 class="fed-font-xvi fed-padding">充值中心</h2> 
        <ul class="fed-part-tips fed-padding"> 
         <li class="fed-padding"> <a class="fed-more" href="<?php echo mac_url('user/index'); ?>">返回</a> </li> 
        </ul> 
       </div> 
       <ul class="fed-user-list fed-part-rows fed-back-whits">
	   <li class="fed-padding-x fed-part-rows"> 
         <div class="fed-user-input fed-visible fed-font-xvi fed-part-rows"> 
          <div class="leagueTable_Box">
          <p><input type="text" name="card_no" class="form-control" maxlength="40" placeholder="请在此输入充值卡密"></p>
          <p><input type="button" id="btn_submit_card" value="确认激活VIP会员" class="btn btn-danger btn-lg"></p>
          </div>
         </div> </li>
		
		<div class="donation_intro">
<p class="titleBig"><strong>请在下方选择套餐并购买相应的卡密，购买卡密后在上方输入框激活VIP会员！</strong></p>
<div class="abox">
    <a href="/index.php/user/upgrade.html" class="a1">不会充值?请查看教程</a>
    <a href="http://www.hcfaka.com/orderquery" target="_blank">没收到卡密?点击查询</a>
</div>

 <div class="featureContent">
  <div class="featureList"> <a href="http://suo.im/4zt8jc" target="_blank">
    <div class="youhui"> <span class="youhui-msg1">Vip体验/天</span> <span class="youhui-msg2">￥20</span> <span class="youhui-msg3">24小时试用体验</span> <i>购买卡密</i> </div>
    </a> </div>
  <div class="featureList"> <a href="http://suo.im/4zt8jc" target="_blank">
    <div class="youhui"> <span class="youhui-msg1">Vip会员/月</span> <span class="youhui-msg2">￥1.2</span> <span class="youhui-msg3">一个月无限观看</span> <i>去充值</i> </div>
    </a> </div>
  <div class="featureList"> <a href="http://suo.im/4zt8jc" target="_blank">
    <div class="youhui"> <span class="youhui-msg1">Vip会员/季度</span> <span class="youhui-msg2">￥1.3</span> <span class="youhui-msg3">季度套餐小试牛刀</span> <i>去充值</i> </div>
    </a> </div>
</div>
<div class="featureContent">
<div class="featureList"> <a href="http://suo.im/4zt8jc" target="_blank">
  <div class="youhui"> <span class="youhui-msg1">Vip会员/半年</span> <span class="youhui-msg2">￥1.4</span> <span class="youhui-msg3">半年无限视频冲浪</span> <i>去充值</i> </div>
  </a> </div>
<div class="featureList"> <a href="http://suo.im/4zt8jc" target="_blank">
  <div class="youhui"> <span class="youhui-msg1">Vip会员/年</span> <span class="youhui-msg2">￥268</span> <span class="youhui-msg3">年度会员更超值</span> <i>去充值</i> </div>
  </a> </div>
<div class="featureList"> <a href="http://t.cn/AiQxwbao" target="_blank">
  <div class="youhui"> <span class="youhui-msg1">Vip会员/终身</span> <span class="youhui-msg2">￥668</span> <span class="youhui-msg3">终身会员应有尽有</span> <i>购买卡密</i> </div>
  </a> </div>         
          
</div>
</div>
        <li class="fed-padding-x fed-part-rows fed-line-bottom">
              <div class="fed-user-input fed-visible fed-font-xvi fed-part-rows"> <span class="fed-col-xs12 fed-part-eone">
                <center>
                  每日50-100部与日本同步最新视频<br/>
                  手机以及电脑皆可观看<br/>
                  24小时不间断更新<br/>
                </center>
				<div class="abox"> <a href="/index.php/art/detail/id/7.html" class="a1">充值后未到账点这里！</a> <a href="/index.php/art/detail/id/7.html" target="_blank">充值后未到账点这里！</a> </div>
                </span> </div>
            </li>
            <li class="fed-padding-x fed-part-rows fed-line-top fed-line-bottom">
              <div class="fed-user-input fed-visible fed-font-xvi fed-part-rows"> <span class="fed-col-xs4 fed-col-sm3 fed-part-eone">联系QQ客服:</span> <span class="fed-col-xs7 fed-col-sm6 fed-part-eone"><a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $maccms['site_qq']; ?>&site=qq&menu=yes" target="_blank"><?php echo $maccms['site_qq']; ?></a></span> <span class="fed-col-xs1 fed-col-sm3 fed-part-eone fed-text-right"><i class="fed-icon-font fed-icon-you"></i></span> </div>
            </li>
            <div class="donation_thumbnail">
              <p class="secTitle">升级VIP会员 精彩影片看到爽</p>
              <div class="thumbRow left">
                <div class="nakedGirl"></div>
                <p>每天更新，大大满足</p>
              </div>
              <div class="thumbRow middle">
                <div class="nakedGirl"></div>
                <p>精品直送，当日同步</p>
              </div>
              <div class="thumbRow right">
                <div class="nakedGirl"></div>
                <p>各类视频，极度畅享</p>
              </div>
            </div>
         <div class="donation_info">
        <p class="titlebox">贴心说明</p>
        <p>* 升级VIP会员流程由系统自动完成，升级成功后即可立即享有VIP会员资格，无需人工验证；</p>
        <p>*「VIP会员」虽拥有以上观影资格，但您与普通会员一样必须遵守本站规定；</p>
        <p>*「VIP会员」相关方案除「有效期」外，到期后会自动转为普通会员的权限继续使用；</p>
       </div>
            </ul>
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <footer class="sticky-footer" style="margin-left: initial; margin-top: 30px;">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-6 col-sm-6">
        <p class="mt-1 mb-0">© Copyright 2019 <strong class="text-dark"><?php echo $maccms['site_name']; ?></strong>. All Rights Reserved<br />
          <small class="mt-0 mb-0"><?php echo $maccms['site_tj']; ?></small> </p>
      </div>
      <div class="col-lg-6 col-sm-6 text-right">
        <div class="app"> <a  target="_self" href="/index.php/art/detail/id/5295.html"><img alt="" src="<?php echo $maccms['site_wapurl']; ?>html/style/images/google.png" /></a> <a  target="_self" href="/index.php/art/detail/id/5295.html"><img alt="" src="<?php echo $maccms['site_wapurl']; ?>html/style/images/apple.png" /></a> </div>
      </div>
    </div>
  </div>
</footer>
<div class="m-footer" style="display:none;"> <a class="navFooter" target="_self" href="/"><i class="fa fa-home"></i>首页</a>
  <button type="button" class="navFooter" id="sidebarToggle"><i class="fa fa-list"></i>分类</button>
  <a class="navFooter" target="_self" href="/index.php/vod/type/id/20.html"><i class="fas fa-layer-group"></i>试看</a> <a class="navFooter" target="_self" href="<?php echo mac_url('user/buy'); ?>"><i class="fa fa-diamond"></i>充值VIP</a> <a class="navFooter" target="_self" href="<?php echo mac_url('user/login'); ?>"><i class="fa fa-user"></i>我的</a> </div>
  <script>
	$('#btn_submit_card').click(function(){
		var that=$(this);
		var no = $('input[name="card_no"]').val();
		if(no==''){
			alert('请输入充值卡');
			return;
		}
		if(confirm('确定要使用充值卡充值吗')) {
			$.ajax({
				url: "<?php echo mac_url('user/buy'); ?>",
				type: "post",
				dataType: "json",
				data: {card_no: no,flag:'card'},
				beforeSend: function () {
					$("#btn_submit_card").val("loading...");
				},
				success: function (r) {
					alert(r.msg);
					if(r.code==1){
						location.href="<?php echo mac_url('user/index'); ?>";
					}
					
				},
				complete: function () {
					$("#btn_submit_card").val("提交");
				}
			});
		}
	});

	$(".face").imageUpload({
		formAction: "<?php echo url('user/portrait'); ?>",
		inputFileName:'file',
		browseButtonValue: '',
		browseButtonClass:'btn btn-default btn-xs fed-user-alter fed-part-roun fed-icon-font fed-icon-xiugai',
		automaticUpload: true,
		hideDeleteButton: true,
		hover:true
	})
	$(".jQuery-image-upload-controls").mouseenter(function(){
    $(".jQuery-image-upload-controls").css("display","block");
	});
	$(".jQuery-image-upload-controls").mouseleave(function(){
    $(".jQuery-image-upload-controls").css("display","none");
	});
	$(".face").on("imageUpload.uploadFailed", function (ev, err) {
		alert(err);
	});
</script> 
  <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/bootstrap.bundle.min.js"></script> 
  <!-- Core plugin JavaScript--> 
  <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/jquery.easing.min.js"></script> 
  <!-- Owl Carousel --> 
  <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/owl.carousel.js"></script> 
  <!-- Custom scripts for all pages--> 
  <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/custom.js"></script> 
  <script>
    $(document).on('click','#sidebarTogglePc',function (e) {
        e.preventDefault();
        $("#block-slide-pc").slideToggle("fast")
        if($("#block-slide-pc-down").is(":visible")){
            $("#block-slide-pc-down").slideToggle("fast")
        }


        // $("#block-slide-pc-down").slideToggle("fast")
    });
    $(document).on('click','#sidebarTogglePcDown',function (e) {
        e.preventDefault();
        $("#block-slide-pc-down").slideToggle("fast")
        if($("#block-slide-pc").is(":visible")){
            $("#block-slide-pc").slideToggle("fast")
        }


        // $("#block-slide-pc").slideToggle("fast")
    });
    $(document).on('click','#sidebarTogglePcLeft',function (e) {
        e.preventDefault();
        $("#block-slide-pc").slideToggle("fast")
        if($("#block-slide-pc-down").is(":visible")){
            $("#block-slide-pc-down").slideToggle("fast")
        }

    });
    $(document).on('click','#sidebarTogglePcLeftDown',function (e) {
        e.preventDefault();
        $("#block-slide-pc-down").slideToggle("fast")
        if($("#block-slide-pc").is(":visible")){
            $("#block-slide-pc").slideToggle("fast")
        }

    });


    $(document).ready(function() {
        $("img.lazy").lazyload({
            effect : "fadeIn",
            threshold : 500
        });
        $("img.lazy1").lazyload({
            effect : "fadeIn",
            threshold : 500
        });

    });
</script>  
 </body>
</html>