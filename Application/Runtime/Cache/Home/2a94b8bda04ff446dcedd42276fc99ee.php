<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://www.yixun.com/ -->
<html lang="zh-cn" class="csstransitions cssanimations ic_webkit ic_chrome ic_latest">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo ($title?$title:$web["wname"]); ?>-易迅购物网站|100%正品低价_闪电配送_买贵就赔！支持货到付款_机打发票_分期付款_送货上门！</title>
        <meta name="keywords" content="<?php echo ($web["wrecords"]); ?>">
        <meta name="description" content="<?php echo ($description?$description:$web["describe"]); ?>">
        <link rel="stylesheet" href="/li/yixun/Public/home/css/style.css" type="text/css" media="screen">
                    <!--[if !IE]>|xGv00|8d8871c57bdd50638a9c8dbef4b4e250<![endi<>f]-->
        <link rel="stylesheet" href="/li/yixun/Public/home/css/index.css" type="text/css" media="screen">
        <!--[if !IE]>|xGv00|862996b1d71bcbc1ca1b249e59fcf6e2<![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="/li/yixun/Public/home/css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
    <body class="ic_rwd">
        <!--[if IE]>
         <style>
         .mod_dropmenu_hd {
         border-width: 0 0 0;
         }
         .mod_dropmenu_on .mod_dropmenu_hd {
         border-width: 1px 1px 0;
         }
         #second_list{
         left:190px;
         overflow:hidden;
         }
         .mod_subcate_main dl {
         margin-left:80px;
         overflow: hidden;
         padding: 10px 0 30px 65px;
         }
         </style>
         <![endif]-->
        <!-- top 条 -->
        <div class="ic_toolbar">
            <div class="grid_c1">
                <div class="mod_entry">
                    <!-- <a target="_blank" class="mod_entry_mix" href=""><b>手机易迅</b></a> -->
                </div>
                <div class="mod_sitemap" role="navigation">
                    <ul class="mod_sitemap_ul" id="j_sitemap">
                        <?php if(empty($_SESSION[uname])): ?><li class="mod_sitemap_li">
                                <a href="/li/yixun/index.php/home/login">登录&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a href="/li/yixun/index.php/home/register">注册&nbsp;</a>
                            </li>
                            <?php else: ?>
                            <li class="mod_sitemap_li">
                                欢迎您，<a target="_blank" ><a href="/li/yixun/index.php/home/center"><?php echo (session('uname')); ?></a>&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a target="_blank" href="/li/yixun/index.php/home/center">我的易迅&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a  href="/li/yixun/index.php/home/index/exitlogin">退出&nbsp;</a>
                            </li><?php endif; ?>
                        
                        
                        <li class="mod_sitemap_gap">|</li>
                        <li class="mod_sitemap_li">
                                <a target="_blank" href="/li/yixun/index.php/Home/Center/indent">我的订单&nbsp;</a>
                            </li>
                        <li class="mod_sitemap_gap">|</li>
                        <li class="mod_sitemap_li">
                            <a target="_blank" href="/li/yixun/index.php/Home/Service">服务中心&nbsp;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- top 条结束 -->
        
        <!-- 头部 -->
        <div class="ic_header">
                <div class="grid_c1">
                    
                    <!-- 头部横幅广告《js》 -->
                    
    <div class="mod_fbanner" id="j_fbanner">
        <a target="_blank" href="<?php echo ($indexad[1][0]['adurl']); ?>" ><img src="/li/yixun/Public/Uploads/<?php echo ($indexad[1][0]['adpic']); ?>"></a>
        <i class="mod_fbanner_close" id="j_fbanner_close">close</i>
    </div>

                    <!-- logo -->
                    <div class="mod_logo">
                        <h1>
                            <!--<a href="/li/yixun/index.php/Home/Index/index"><img src="/li/yixun/Public/home/images/logo_2013_v1.png" alt="易迅网"></a>-->
                            <a href="/li/yixun/index.php/Home/Index/index"><img src="/li/yixun/Public/Uploads/<?php echo (implode('/',explode('/',$web["wlogo"]))); ?>" alt="易迅网"></a>
                        </h1>
                    </div>
                    
                    <!-- 送货地址《js》 -->
                    <div class="mod_city" id="j_mod_city">
                        <div class="mod_city_choose">
                            <p class="mod_city_tit">闪电配送</p>
                        </div>
                        <p class="mod_city_prom hide" id="j_dispatch_prom" style="display: block;">
                        <a target="_blank" href="/li/yixun/index.php/Home/Index/index" >购物满49元免运费，晚上买明早到</a>
                        </p>
                    </div>
                    
                    <!-- 搜索 -->
                    <div class="search_cart_wrap" id="j_search">
                        <div class="mod_search">
                            <form name="search" action="" target="_top">
                                <label for="" class="hide">全站搜索</label>
                                <input class="mod_search_con mod_search_txt no_cur" type="text" id="q_show" name="searchval" accesskey="s" tabindex="8" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" value="请输入商品进行搜索">
                                    <input class="mod_search_btn" tabindex="9" type="submit">
                                        </form>
                        </div>
                        
                        <!-- 购物车 -->
                        <div class="mod_minicart" id="j_minicart">
                            <div class="mod_minicart_con">
                                <a href="/li/yixun/index.php/Home/Showcart/index" class="mod_minicart_lk">
                                    <i class="mod_minicart_ico">&nbsp;</i>
                                    <span class="mod_minicart_tit">购物车</span>
                                </a>
                                <i class="mod_minicart_gap">|</i>
                                <span class="mod_minicart_num" id="j_minicart_num">1</span>
                                <b class="mod_minicart_arrow"><i></i></b>
                            </div>
                            
                            <div class="mod_minicart_pop" id="j_minicart_pop">
                                <i class="mod_minicart_pop_bod"></i>
                                <div class="mod_minicart_pop_inner" id="j_minicart_layer">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- 购物车结束 -->
                     <!--    
                        <div class="mod_skey" id="page_sKey">
                            <a href="">热门搜索</a> <a href="">热门搜索</a> <a href="">热门搜索</a>
                        </div>
                        <div class="mod_skey hide" id="j_skey">
                            <a href="">热门搜索</a> <a href="">热门搜索</a> <a href="">热门搜索</a>
                        </div>
                        <textarea class="hide" id="j_skey_area"></textarea> -->
                    </div>
                </div>
            </div>
        <!-- 头部结束 -->
        
            <div class="ic_nav" id="j_nav">
                <div class="grid_c1">
                    
                    <!-- 分类菜单 -->
                    <div class="mod_cate mod_cate_on" id="category_container">
                    <div class="mod_cate_hd">
                        <div class="mod_cate_hd_con"><a target="_blank" >全部商品分类</a></div>
                        <i class="mod_cate_hd_arrow"></i>
                    </div>
                    <ul class="mod_cate_bd" id="frist_list">
                        
                        <!--[if !IE]>|xGv00|66a2a3e7c8a92a4b32f79489dddd252e<![endif]-->
                        <!-- build with ec0f339a71a9206904c22c6fe287e706 -->
                        <!-- build at -->
                        <!-- done -->
                        <!--[if !IE]>|xGv00|671a4f824afc05bb5c74d1de10462d0a<![endif]-->
                    </ul>
                    <div class="mod_subcate" id="second_list" style="display: none; top: 40px;">
                        
                    </div>
                </div>
                <!-- 分类菜单结束 -->
                
                <!-- 导航 -->
                <div class="mod_nav">
                    <ul class="mod_nav_ul" id="j_hornav">
                        <!-- <li class="mod_nav_li" id="nav2"><a target="_blank" href="">家电城</a><i class="mod_nav_ico mod_nav_hot"></i></li> -->
                    </ul>
                </div>
            </div>
        </div>
    <!-- 头部结束 -->

    
    <div class="ic_content">
        <div class="core">
            <div class="grid_c1">
                <div class="grid_s"></div>
                <div class="grid_m">

                    <!-- 幻灯片 -->
                    <div class="slider" id="j_main_slider">
                        <ul class="slider_img">
                            <?php if(is_array($indexad[2])): $i = 0; $__LIST__ = $indexad[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filmad): $mod = ($i % 2 );++$i; if($i < 9): if($i == 1): ?><li class="" style="display: list-item; opacity: 1;">
                                    <?php else: ?>
                                        <li class="hide" style="opacity: 1; display: none;"><?php endif; ?>
                                        <a target="_blank" href="<?php echo ($filmad['adurl']); ?>">
                                        <img src="/li/yixun/Public/Uploads/<?php echo ($filmad['adpic']); ?>" width="1000" height="330" alt="<?php echo ($filmad['adtitle']); ?>">
                                        </a>
                                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="slider_trigger" id="j_strigger">
                            <?php if(is_array($indexad[2])): $i = 0; $__LIST__ = $indexad[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filmad): $mod = ($i % 2 );++$i; if($i < 9): if($i == 1): ?><li class="on" index="1">
                                    <?php else: ?>
                                        <li class="" index="<?php echo ($i); ?>"><?php endif; ?>
                                        <?php echo ($i); ?>
                                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <a href="javascript:;" class="slider_go_prev hide" id="j_sprev"></a>
                        <a href="javascript:;" class="slider_go_next hide" id="j_snext"></a>
                    </div>

                    <i class="daily_bod"></i>

                    <!-- 限时抢购 -->
                    <div class="dailybeta">
                        <div class="dailybeta_hd">
                            <p class="dailybeta_tit"><i class="dailybeta_tit_ico">&nbsp;</i><b>五折专区，限时抢购</b></p>
                            <p class="dailybeta_time_p1">还剩</p>
                            <div class="dailybeta_time" id="j_daily_timer">
                                <div class="dailybeta_time_item timer_h" id="j_daily_h">14</div>
                                <i></i>
                                <div class="dailybeta_time_item timer_i" id="j_daily_m">18</div>
                                <i></i>
                                <div class="dailybeta_time_item timer_s" id="j_daily_s">28</div>
                            </div>
                            <p class="dailybeta_time_p2">结束</p>
                        </div>
                        <div class="dailybeta_bd">

                            <!-- 抢购商品列表 -->
                            <ul class="dailybeta_goods">
                            <?php if(is_array($indexad[3])): $i = 0; $__LIST__ = $indexad[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rushad): $mod = ($i % 2 );++$i; echo ($rushad['title']); ?>
                                <?php if($i < 9): ?><li>
                                        <div class="mod_goods mod_goods_w100">
                                            <div class="mod_goods_img load_effect">
                                                <a href="">
                                                    <img class="lazy" src="/li/yixun/Public/home/images/icon/loading-60.gif" data-original="/li/yixun/Public/Uploads/<?php echo ($rushad['adpic']); ?>" alt="<?php echo ($filmad['adtitle']); ?>">
                                                    <b class="hide "></b></a>
                                            </div>
                                            <div class="mod_goods_info">
                                                <p class="mod_goods_tit"><a href="<?php echo ($rushad['adurl']); ?>"><?php echo ($rushad['adtitle']); ?></a></p>
                                                <p class="mod_goods_price">
                                                    <a href=""><span class="mod_price mod_price_now"><span>5折低价</span></span></a>
                                                </p>
                                                <div class="mod_goods_stock">
                                                    <a href=""><em>库存</em>  
                                                    <span><i class="mod_goods_stock_bg2" w="style=&quot;width:100%&quot;" style="width: <?php echo rand(10,60);?>%;"></i></span></a>
                                                </div>
                                                <p class="dailybeta_goods_btn_wrap">
                                                    <a href="<?php echo ($rushad['adurl']); ?>" class="dailybeta_goods_btn">立即抢</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <ul class="dailybeta_goods hide" id="POS_1_300034">
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 抢购end -->

                <!-- 幻灯片右侧 -->
                <!-- <div class="grid_e"></div> -->

            </div>
        </div>

        <!-- 楼层 -->
        <?php if(is_array($floors)): $k = 0; $__LIST__ = $floors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fval): $mod = ($k % 2 );++$k;?><div class="grid_c1 sx_mod_f f1" id="floor_<?php echo ($k); ?>" ftag="floorsnum">
                <div class="sx_mod_f_hd">
                    <div class="sx_mod_f_tit">
                     <h2><?php echo ($k); ?>F<a target="_blank" href=""><?php echo ($fval['cname']); ?></a></h2>
                    </div>
                </div>
                <div class="sx_mod_f_bd">

                    <!-- 楼层幻灯片 -->
                    <div class="grid_s">
                        <div class="sx_mod_glide">
                            <ul class="sx_mod_glide_img">

                                <?php if(is_array($fval['picad'][1])): $i = 0; $__LIST__ = $fval['picad'][1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ffilm): $mod = ($i % 2 );++$i; if($i < 4): if($i == 1): ?><li class="" style="display: list-item; opacity: 1;">
                                        <?php else: ?>
                                            <li class="hide" style="opacity: 1; display: none;"><?php endif; ?>
                                                <a target="_blank" href="<?php echo ($ffilm['fadurl']); ?>">
                                                <img class="lazy" src="/li/yixun/Public/home/images/icon/loading-190.gif" data-original="/li/yixun/Public/Uploads/<?php echo ($ffilm['fadpic']); ?>" alt="<?php echo ($ffilm['fadtitle']); ?>">
                                                </a>
                                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <div class="sx_mod_glide_trigger">
                                 <?php if(is_array($fval['picad'][1])): $i = 0; $__LIST__ = $fval['picad'][1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ffilm): $mod = ($i % 2 );++$i; if($i < 4): if($i == 1): ?><i class="glide_on" index="1">
                                        <?php else: ?>
                                            <i class="" index="<?php echo ($i); ?>"><?php endif; ?>
                                            •</i><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="grid_m">
                        <div class="sx_mod_fgoods_wrap">
                            <ul class="sx_mod_fgoods" id="POS_1_300021" >
                                <!-- 中间推荐位 -->
                                <?php if(is_array($fval['picad'][2])): $i = 0; $__LIST__ = $fval['picad'][2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fcenter): $mod = ($i % 2 );++$i; if($i < 5): ?><li class="sx_mod_fgoods_high">
                                            <a target="_blank" href="/li/yixun/index.php<?php echo ($fcenter['fadurl']); ?>"> <img class="lazy" src="/li/yixun/Public/home/images/icon/loading-210.gif" data-original="/li/yixun/Public/Uploads/<?php echo ($fcenter['fadpic']); ?>"></a>

                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                                <!-- 热销推荐 -->
                                <?php if(is_array($fval['goods'])): $i = 0; $__LIST__ = $fval['goods'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li class="sx_mod_fgoods_low">
                                        <div class="mod_goods mod_goods_w80" _loaded="true">
                                            <div class="mod_goods_img load_effect">
                                                <a target="_blank" href="">
                                                <img class="lazy" src="/li/yixun/Public/home/images/icon/loading-60.gif" data-original="/li/yixun/Public/Goodsuploads/<?php echo ($goods['gpic']); ?>" width="80" height="80">
                                                </a>
                                            </div>
                                            <div class="mod_goods_info">
                                                <p class="mod_goods_promo"><a href="/li/yixun/index.php/Home/Goods/index/gid/<?php echo ($goods['gid']); ?>"><?php echo ($goods['gname']); ?></a></p>
                                                <p class="mod_goods_price"><span class="mod_price"><i>¥</i><span><?php echo ($goods['goldprice']); ?>.00</span></span></p>
                                            </div>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- 右侧广告 -->
                    <div class="grid_e">
                        <div class="sx_mod_extimg">
                            <a target="_blank" href="<?php echo ($fval['picad'][3][0]['fadurl']); ?>">
                            <img class="lazy" src="/li/yixun/Public/home/images/icon/loading-190.gif" data-original="/li/yixun/Public/Uploads/<?php echo ($fval['picad'][3][0]['fadpic']); ?>">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 楼层下得分类列表 -->
                <div class="sx_mod_f_bd grid_s5m25" id="j_mod_300027">
                    <div class="grid_s">
                        <div class="sx_mod_key">
                            <dl class="sx_mod_key_dl">
                                <?php if(is_array($fval['textad'])): $i = 0; $__LIST__ = $fval['textad'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$textad): $mod = ($i % 2 );++$i; if($i == 1): ?><dt><a target="_blank" href="<?php echo ($textad['fturl']); ?>"><?php echo ($textad['ftext']); ?></a></dt>
                                        <dd>
                                    <?php else: ?>                              
                                        <a target="_blank" href="<?php echo ($textad['fturl']); ?>"><?php echo ($textad['ftext']); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </dd>
                            </dl>                  
                        </div>
                    </div>
                    
                    <!-- 选项卡-本周热销 -->
                    <div class="grid_m">
                        <i class="sx_mod_rank_bod"></i>
                        <div class="sx_mod_rank" id="fhots_<?php echo ($k); ?>" name="hotsale">
                            <div class="sx_mod_rank_hd">
                                <div class="sx_mod_rank_tit">热销排行榜</div>
                                <ul class="sx_mod_rank_ext" name="hottabs">
                                    <?php if(is_array($fval['hottab'])): $i = 0; $__LIST__ = $fval['hottab'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i; if($i == 1): ?><li id="ftab_<?php echo ($tab['cid']); ?>" class="on">
                                                <a href="javascript:void(0)"><?php echo ($tab['cname']); ?></a>
                                            </li>
                                        <?php else: ?>
                                            <li class="sx_mod_rank_gap">|</li>
                                            <li id="ftab_<?php echo ($tab['cid']); ?>" class="">
                                                <a href="javascript:void(0)"><?php echo ($tab['cname']); ?></a>
                                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>    
    <div class="mod_backtop hide" id="j_backtop">
        <a href="javascript:" title="回顶部" ytag="72300">回顶部</a>
    </div>


    <div class="ic_footer">
    <div class="ic_market" id="j_market">
        <div class="grid_c1">
            <a class="market_link"><img src="/li/yixun/Public/home/images/foot.jpg" class="market_img_1"></a>
        </div>
    </div>
        <div class="ic_footer_inner">
            <div class="mod_agree">
                <ul class="mod_agree_con">
                    <li class="mod_agree_item mod_agree_item1">
                        <i></i>
                        <a target="_blank" rel="nofollow"><strong>正品保障</strong><span>全场正品，行货保障</span></a>
                    </li>
                    <li class="mod_agree_item mod_agree_item2">
                        <i></i>
                        <a target="_blank" rel="nofollow"><strong>一日三送</strong><span>闪电配送，谁比我快</span></a>
                    </li>
                    <li class="mod_agree_item mod_agree_item3">
                        <i></i>
                        <a target="_blank" rel="nofollow"><strong>货到付款</strong><span>货到付款，安心便捷</span></a>
                    </li>
                    <li class="mod_agree_item mod_agree_item4">
                        <i></i>
                        <a target="_blank" rel="nofollow"><strong>维修保障</strong><span>服务保证，全国联保</span></a>
                    </li>
                    <li class="mod_agree_item mod_agree_item5">
                        <i></i>
                        <a target="_blank" rel="nofollow"><strong>无忧退货</strong><span>无忧退货，7日尊享</span></a>
                    </li>
                    <li class="mod_agree_item mod_agree_item6">
                        <i></i>
                        <a target="_blank" rel="nofollow"><strong>价格保护</strong><span>价格保护，下单无忧</span></a>
                    </li>
                </ul>
            </div>
            <div class="mod_help">
                <div class="mod_help_item">
                    <h5>常用服务</h5>
                    <ul>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/service/index" rel="nofollow">问题咨询</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/service/AmendIndent" rel="nofollow">修改订单</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/service/Favorable" rel="nofollow">取消订单</a></li>
                    </ul>
                </div>
                <div class="mod_help_item">
                    <h5>常用服务</h5>
                    <ul>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/register" rel="nofollow">新用户注册</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/login" rel="nofollow">用户登录</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/communication" rel="nofollow">沟通相关</a>
                    </ul>
                </div>
                <div class="mod_help_item">
                    <h5>常用服务</h5>
                    <ul>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/presales" rel="nofollow">售前相关</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/transaction" rel="nofollow">交易相关</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/logistics" rel="nofollow">物流相关</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/after" rel="nofollow">售后相关</a></li>
                        </li>
                    </ul>
                </div>
                <div class="mod_help_item">
                    <h5>常用服务</h5>
                    <ul>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/integral" rel="nofollow">积分介绍</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/member" rel="nofollow">会员制介绍</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/comment" rel="nofollow">评论介绍</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/balance" rel="nofollow">账户余额介绍</a></li>
                    </ul>
                </div>
                <div class="mod_help_item">
                    <h5>常用服务</h5>
                    <ul>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/payment" rel="nofollow">货到付款</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/line" rel="nofollow">在线支付</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/bill" rel="nofollow">发票说明</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/favorable" rel="nofollow">优惠劵介绍</a></li>
                    </ul>
                </div>
                <div class="mod_help_item">
                    <h5>常用服务</h5>
                    <ul>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/yixun" rel="nofollow">易迅快递</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/common" rel="nofollow">普通快递</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/EMS" rel="nofollow">邮政EMS</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/user" rel="nofollow">用户条款</a></li>
                        <li><a target="_blank" href="/li/yixun/index.php/Home/Protocol/sun" rel="nofollow">阳光行动</a></li>
                    </ul>
                </div>
            </div>

            <div class="mod_way">
                <div class="mod_way_item mod_way_mb">
                    <i class="mod_way_mb_img"></i>
                    <div class="mod_way_mb_info">
                        <h5>手机易迅</h5>
                        <p>轻松易点，迅速到家！</p>
                    </div>
                </div>
                <div class="mod_way_item mod_way_wx">
                    <i class="mod_way_wx_img"></i>
                    <div class="mod_way_wx_info">
                        <h5>易迅官方微信</h5>
                        <p>扫描二维码，即刻与小三亲密互动，还有劲爆优惠等你来拿！</p>
                    </div>
                </div>
                <div class="mod_way_item mod_way_em">
                    <i class="mod_way_em_img"></i>
                    <div class="mod_way_em_info">
                        <h5>订阅QQ邮件</h5>
                        <p><a target="_blank" href="http://mail.qq.com" rel="nofollow">第一手促销资讯，尊享邮件特惠商品，优惠不错过！</a></p>
                    </div>
                </div>
                <div class="mod_way_item mod_way_wb">
                    <ul>
                        <li><span class="mod_way_wb_sina">易迅网官方新浪微博</span><a target="_blank" href="http://www.weibo.com">立即关注</a></li>
                        <li><span class="mod_way_wb_tc">易迅网官方腾讯微博</span><a target="_blank" href="http://t.qq.com">立即关注</a></li>
                    </ul>
                </div>
            </div>

            <!--友情链接-->
           <div class="mod_link">
            <ul>
            <?php if(is_array($friend)): foreach($friend as $key=>$f): ?><li><a href="http://<?php echo ($f["furl"]); ?>" target="_blank"><?php echo ($f["fname"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
            </div>
             <!--友情链接结束-->
             <div style="height:20px;"></div>
        </div>
    </div>

    <div class="ic_subfooter">
        <div class="grid_c1">
            <div class="sf_p1">
                <a target="_blank" href="/li/yixun/index.php/Home/Protocol/yixun" rel="nofollow">易迅简介</a>|
                <a target="_blank" href="/li/yixun/index.php/Home/Protocol/user" rel="nofollow">易迅公告</a>|
                <a target="_blank" href="/li/yixun/index.php/Home/Protocol/sun" rel="nofollow">招纳贤士</a>|
                <a target="_blank" href="" rel="nofollow">联系我们</a>|
                <span>客服热线：<?php echo ($web["wcontact"]); ?></span>
            </div>
            <p class="sf_p2">Copyright © 2006 - 2015 意象图文网络工作室版权所有 &nbsp;  </p>
            <div class="sf_verify" id="j_sf_verify">
                <a target="_blank" ytag="72202" class="sf_verify_lk_1" id="j_kx_verify" >可信网站</a>
                <a target="_blank" ytag="72203" id="j_sh_verify" class="sf_verify_lk_2" >上海工商</a>
            </div>
        </div>
    </div>
    <!--[if !IE]>|xGv00|4da65d2861cd0ec0d5b6b7fa7f660c86<![endif]-->
    <!-- build with bb081d58c2f1c31d4551eedb17f1d641 -->
    <!-- build at -->
    <!-- done -->
    <!--[if !IE]>|xGv00|bf5d5add5132b38eb3eedd0f48ee7d3f<![endif]-->

    </body>
	<script> 
		var ROOT = '/li/yixun';
		var PUBLIC = ROOT+'/Public/Home';
		var APP = ROOT+'/index.php';
	</script>
    <script src="/li/yixun/Public/home/js/jquery.js" type="text/javascript"></script>
    <script src="/li/yixun/Public/home/js/common.js" type="text/javascript"></script>
    
<script src="/li/yixun/Public/home/js/index.js"></script>
<script type="text/javascript" src="/li/yixun/Public/home/js/lazyload.js"></script>
<script type="text/javascript">
    jQuery(document).ready(
        function($){
            $(".lazy").lazyload({
                 placeholder :"/li/yixun/Public/home/images/icon/loading.gif",
                 effect: "fadeIn"
            });
    });
</script>

</html>