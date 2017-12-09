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
        
    <link rel="stylesheet" href="/li/yixun/Public/home/css/search_v2.css">

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
                    <div class="mod_cate" id="category_container">
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

    
    <!-- 路径面包屑 -->        
    <div id="crumbBox" class="crumb">
        <div class="grid_c1">
            <div class="crumb_wrap">
                <div class="crumb_inner" style="width: 10000px; left: 0px;">
                    <a class="crumb_lk" href="/li/yixun/index.php/Home/Index/index" >首页</a>
                    <span class="crumb_arrow">&gt;</span>
                    <?php if(is_array($bnav)): $i = 0; $__LIST__ = $bnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bval): $mod = ($i % 2 );++$i;?><a class="crumb_lk" href="<?php echo U('Home/Search/index',array('cid'=>$bval['cid']));?>" ><?php echo ($bval['cname']); ?></a>
                        <span class="crumb_arrow">&gt;</span><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <!-- 选中下 -->
                    
                    <?php if($currbrand['bid'] > 0): ?><a class="crumb_selected" href="javascript:;" keyname="brand" title="brandkey" >
                            <span class="crumb_selected_tit">品牌：</span>
                            <span class="crumb_selected_cnt"><?php echo ($currbrand['bname']); ?></span><i>×</i>
                        </a><?php endif; ?>
                    <?php if($currselect[0]['id'] > 0): if(is_array($currselect)): $i = 0; $__LIST__ = $currselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$currvo): $mod = ($i % 2 );++$i;?><a class="crumb_selected" href="javascript:;" keyname="attr" attrkey="<?php echo ($currvo['id']); ?>" title="brandkey" >
                                    <span class="crumb_selected_tit"><?php echo ($currvo['attrname']); ?>：</span>
                                    <span class="crumb_selected_cnt"><?php echo ($currvo['attrvalue']); ?></span><i>×</i>
                                </a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    <?php if(($currselect[0]['id'] > 0) OR ($currbrand['bid'] > 0)): ?><span class="crumb_arrow">&gt;</span><?php endif; ?>
                    <div class="crumb_search ">
                        <input id="crumbKey" value="<?php echo ($_GET['searchval']); ?>" class="crumb_input" type="text">
                        <a id="crumbSearchKey" href="javascript:;" class="crumb_btn_submit"></a>
                    </div>
                </div>
            </div>
            
            <div class="crumb_clear">
                <a id="crumbClearAttr" class="crumb_clear_lk" href="<?php echo U('Home/Search/index',array('cid'=>$_GET['cid']));?>" >清空已选属性</a>
            </div>
            
            <a id="crumbShiftLeft" href="javascript:;" class="crumb_act crubm_act_l hide"><!-- 向左 --></a>
            <a id="crumbShiftRight" href="javascript:;" class="crumb_act crubm_act_r hide"><!-- 向右 --></a>
        </div>
    </div><!--[if !IE]>|xGv00|9bc8c77a35890211d2b072ea1d6a4e74<![endif]-->

    <!-- 中间部分 -->
    <div id="container" class="ic_content scontent">
        <div class="grid_c2a">                
            <div class="grid_s sside">
                <!-- 有关键字时导航聚类 -->    
                <div class="cate cate_2" id="cateList">
                    <div class="cate_hd"><h3 class="cate_hd_tit">搜索结果分类</h3></div>
                    <div class="cate_bd">
                        <?php if(is_array($allclass)): $i = 0; $__LIST__ = $allclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='cate_item <?php echo ($vo["cid"] == $cid?"cate_item_on":""); ?>' <?php echo ($vo["cid"] == $cid?"mtag='active'":""); ?> name="left_cate" ytag="leftc_<?php echo ($vo['cid']); ?>">
                                <div class="cate_tit ">
                                    <a class="cate_tit_a" title="<?php echo ($vo['cname']); ?>" href="<?php echo U('Home/Search/index',array('cid'=>$vo['cid']));?>" ><span class="cate_tit_name"><?php echo ($vo['cname']); ?></span></a>
                                    <span class="cate_tit_ico"></span>
                                </div>
                                <div class="cate_cnt">
                                    <?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><a class='cate_lk2 <?php echo ($child["cid"] == $cid?"cate_lk2_on":""); ?>' <?php echo ($child["cid"] == $cid?"name='active'":""); ?>href="<?php echo U('Home/Search/index',array('cid'=>$child['cid']));?>" title="<?php echo ($child['cname']); ?>" ><span class="cate_lk2_name"><?php echo ($child['cname']); ?></span></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                
                <!--本周热销榜-->
                <div id="hotSell" class="recommend">
                    <div class="recommend_hd">
                        <h3 class="recommend_tit">本类热销榜</h3>
                    </div>
                    <div class="recommend_bd">
                        <div class="recommend_goods">
                            <ul>
                                <?php if(is_array($hotsales)): $i = 0; $__LIST__ = $hotsales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotvo): $mod = ($i % 2 );++$i;?><li class="recommend_goods_li" commid="853958">
                                        <div class="mod_goods mod_goods_w60">
                                            <div class="mod_goods_img">
                                                <a class="img"  href="/li/yixun/index.php/Home/Goods/index/gid/<?php echo ($hotvo['gid']); ?>" target="_blank" title="">
                                                    <img iguid="8" src="/li/yixun/Public/Goodsuploads/<?php echo ($hotvo['gpic']); ?>" height="60" width="60"><span class="recommend_goods_rank"><?php echo ($i); ?></span>
                                                </a>
                                            </div>
                                            <div class="mod_goods_info">
                                                <p class="mod_goods_tit">
                                                    <a  href="/li/yixun/index.php/Home/Goods/index/gid/<?php echo ($hotvo['gid']); ?>" target="_blank" title="<?php echo ($hotvo['gname']); ?>"><?php echo ($hotvo['gname']); ?></a>
                                                </p>
                                                <p class="mod_goods_price"><span class="mod_price"><i>¥</i><span><?php echo ($hotvo['gprice']); ?></span></span></p>
                                            </div>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--[if !IE]>|xGv00|77fa72dbde67d1e4a653952321fbd2de<![endif]-->
                    
            <div class="grid_m smain">
                <div class="grid_m_inner" >
                    <div class="filter" id="attrList">                
                        <div class="filter_area filter_area_nav">
                            <!-- 二级导航选中 -->                    
                            <div isshow="1" attrindex="2015_1" class="filter_item" attrkey="705856" attrtype="nav" attrnum="1">
                                <div class="filter_tit" title="手机"><?php echo ($curr['cname']); ?></div>
                                <div class="filter_con">
                                    <dl class="filter_dl">
                                        <?php if(is_array($childs)): foreach($childs as $key=>$child): ?><dd class="filter_dd " attrvalue="707217">
                                                <a class="filter_lk" href="<?php echo U('Home/Search/index',array('cid'=>$child['cid']));?>" >
                                                <span class="filter_lk_name"><?php echo ($child['cname']); ?></span>        
                                                <i class="filter_dd_arrow"></i></a>
                                            </dd><?php endforeach; endif; ?>
                                    </dl>
                                </div>
                            </div>
                            <div class="filter_item_blank"></div>
                        </div>
            
                        <div class="filter_area">                
                            <!-- 普通属性 -->
                            <div name="goodsbrand" class="filter_item filter_item_brand filter_item_multiple">
                                <div class="filter_tit" title="品牌">品牌</div>
                                <div class="filter_con">                
                                    <div class="filter_atoz hide">
                                        <a class="filter_atoz_item filter_atoz_current" href="javascript:void(0);"><b>全部</b></a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">A</a><a class="filter_atoz_item " href="javascript:void(0);">B</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">C</a><a class="filter_atoz_item " href="javascript:void(0);">D</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">E</a><a class="filter_atoz_item " href="javascript:void(0);">F</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">G</a><a class="filter_atoz_item " href="javascript:void(0);">H</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">I</a><a class="filter_atoz_item " href="javascript:void(0);">J</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">K</a><a class="filter_atoz_item " href="javascript:void(0);">L</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">M</a><a class="filter_atoz_item " href="javascript:void(0);">N</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">O</a><a class="filter_atoz_item " href="javascript:void(0);">P</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">Q</a><a class="filter_atoz_item " href="javascript:void(0);">R</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">S</a><a class="filter_atoz_item " href="javascript:void(0);">T</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">U</a><a class="filter_atoz_item " href="javascript:void(0);">V</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">W</a><a class="filter_atoz_item " href="javascript:void(0);">X</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">Y</a><a class="filter_atoz_item " href="javascript:void(0);">Z</a>
                                        <a class="filter_atoz_item " href="javascript:void(0);">其他</a>
                                    </div>
                                    
                                    <dl class="filter_dl" id="brand_dl">
                                        <dt class="filter_dt filter_dt_on" brandvalue="0">
                                            <a href="javascript:" nametag="brand">不限</a>
                                        </dt>
                                        <?php if(is_array($brands)): $bnum = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($bnum % 2 );++$bnum;?><dd isshow="1" class="filter_dd" bindex="<?php echo ($brand['firstchar']); ?>" brandvalue="<?php echo ($brand['bid']); ?>">
                                                <a class="filter_lk" title="<?php echo ($brand['bname']); ?>" nametag="brand" href="javascript:"><?php echo ($brand['bname']); ?><span class="filter_x">×</span></a>
                                            </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </dl>
                                </div>
                                <div class="filter_act hide">
                                    <a class="filter_showmore" href="javascript:;"><i></i><span>更多</span></a><a href="javascript:;" class="filter_choosemore" style="visibility: hidden;"><i></i><span>多选</span></a>
                                </div>
                            </div>

                            <!-- 普通属性 -->
                            <?php if(is_array($attr)): $keyn = 0; $__LIST__ = $attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$av): $mod = ($keyn % 2 );++$keyn; if($keyn < 5): ?><div class="filter_item  filter_item_single">
                                    <div class="filter_tit" title="<?php echo ($av['attrname']); ?>"><?php echo ($av['attrname']); ?></div>
                                    <div class="filter_con" id="attr_<?php echo ($keyn-1); ?>">
                                        <dl class="filter_dl">
                                            <dt class="filter_dt filter_dt_on" attrvalue="0">
                                                <a href="javascript:" nametag="attr">不限</a>
                                            </dt>
                                            <?php if(is_array($av['value'])): $attrid = 0; $__LIST__ = $av['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aval): $mod = ($attrid % 2 );++$attrid;?><dd isshow="1" class="filter_dd " attrvalue="<?php echo ($aval['id']); ?>">
                                                    <a class="filter_lk" href="javascript:" nametag="attr"><?php echo ($aval['attrvalue']); ?><span class="filter_x">×</span></a>
                                                </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </dl>
                                    </div>
                                    <div class="filter_act hide">
                                        <a class="filter_showmore" href="javascript:;"><i></i><span>更多</span></a><a href="javascript:;" class="filter_choosemore" style="visibility: hidden;"><i></i><span>多选</span></a>
                                    </div>
                                </div>
                                <?php else: ?>
                                    <!-- 属性集 -->
                                    <?php if($keyn == 5): ?><div class="filter_item filter_item_attrmore">
                                        <div class="filter_tit">更多选项</div>
                                        <div class="filter_con">
                                            <dl class="filter_dl" ><?php endif; ?>
                                                <dd class="filter_attr" id="attr_<?php echo ($keyn-1); ?>">
                                                    <a class="filter_attr_hd" nametag="viewattr"><?php echo ($av['attrname']); ?><i></i><span class="filter_x">×</span></a>
                                                    <div attrindex="2015_6" class="filter_attr_bd">
                                                        <div class="filter_attr_list">
                                                            <a class="filter_attr_item filter_attr_item_on" attrvalue="0" href="javascript:" nametag="attrsel">不限<span class="filter_x">×</span></a>
                                                            <?php if(is_array($av['value'])): $i = 0; $__LIST__ = $av['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aval): $mod = ($i % 2 );++$i;?><a class="filter_attr_item " href="javascript:" attrvalue="<?php echo ($aval['id']); ?>" nametag="attrsel"><?php echo ($aval['attrvalue']); ?><span class="filter_x">×</span></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </div>
                                                    </div>
                                                </dd><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            <?php if($keyn > 5): ?></dl>
                                    </div>
                                </div><?php endif; ?>
                        <div class="filter_item_blank"></div>
                        </div>    
                    </div>
                    <input type="hidden" name="attr" value="<?php echo ($_GET['attr']); ?>">
                    <!-- 排序和价格筛选区 -->

                    <div class="sort" id="list" name="list">
                        <div class="sort_cate">
                            <a nametag="sort" sortbtntype="0" href="javascript:" class="sort_cate_lk sort_cate_default" title="点击恢复默认排序" ><span>默认</span></a>
                            <a nametag="sort" sortbtntype="1" href="javascript:" class="sort_cate_lk " title="点击按销量从高到低排序" ><span>销量</span><b class="sort_arrow"></b></a>
                            <!-- <a nametag="sort" sortbtntype="2" href="javascript:" class="sort_cate_lk " title="点击按评论数从高到低排序" ><span>评论</span><b class="sort_arrow"></b></a> -->
                            <a nametag="sort" sortbtntype="3_4" href="javascript:" class="sort_cate_lk sort_cate_price" title="点击按价格从低到高排序" ><span>价格</span><b class="sort_arrow"></b></a>
                        </div>
                        <div id="sPriceFloat" class="sort_price">
                            <div class="sort_price_inner">
                                <div class="sort_price_detail">
                                    <span id="sPriceHover" class="sort_price_detail_main">
                                        <input value="最低价" id="sBeginPrice" placeholder="最低价" class="sort_price_input" type="text">
                                        <span class="sort_price_bar">-</span>
                                        <input value="最高价" id="sEndPrice" placeholder="最高价" class="sort_price_input" type="text">
                                        <span id="sPriceMore" class="sort_price_arrow"></span>
                                    </span>
                                    <a id="sConfirmPrice" href="javascript:;" class="sort_price_sure">确定</a>
                                </div>
                                <!-- 价格区间 -->
                                
                                <div id="sPriceRange" class="sort_price_lists">                    
                                    <p class="sort_price_item">
                                        <a href="javascript:" >0-499</a>
                                    </p>                    
                                    <p class="sort_price_item">
                                        <a href="javascript:" >500-999</a>
                                    </p>                    
                                    <p class="sort_price_item">
                                        <a href="javascript:" >1000-1499</a>
                                    </p>                    
                                    <p class="sort_price_item">
                                        <a href="javascript:" >1500-1999</a>
                                    </p>                    
                                    <p class="sort_price_item">
                                        <a href="javascript:" >2000-2999</a>
                                    </p>                    
                                    <p class="sort_price_item">
                                        <a href="javascript:" >3000-3999</a>
                                    </p>                    
                                    <p class="sort_price_item">
                                        <a href="javascript:" >4000以上</a>
                                    </p>
                                </div>                
                            </div>
                        </div>

                        <div class="sort_type">
                            <div class="sort_type_inner" id="filterTypes">
                                <div class="sort_type_main">
                                    <a id="stockFilterChk" href="javascript:;" class="sort_type_radio"><i></i><span>仅显示有货</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="sort_page">
                            <div class="sort_page_txt">正品保障</div>
                        </div>
                        <div class="sort_style">
                            <!-- 选中时，增加class="sort_style_lk_on" -->
                            <a showbtntype="0" href="javascript:;" title="大图"  class="sort_style_lk sort_style_lk_on">
                                <b class="sort_style_pic"><i></i></b>
                            </a>
                            <a showbtntype="1" href="javascript:;" title="列表"  class="sort_style_lk ">
                                <b class="sort_style_list"><i></i></b>
                            </a>
                        </div>
                    </div>
                    <form name="searchattr" action="<?php echo U('Home/search/index');?>" method="get">
                        <input type="hidden" name="cid" value="<?php echo ($_GET['cid']); ?>">
                        <input type="hidden" name="bid" value="<?php echo ($_GET['bid']); ?>">
                        <input type="hidden" name="attr" value="<?php echo ($_GET['attr']); ?>">
                        <input type="hidden" name="sort" value="<?php echo ($_GET['sort']); ?>">
                        <input type="hidden" name="price" value="<?php echo ($_GET['price']); ?>">
                        <input type="hidden" name="stockfilter" value="<?php echo ($_GET['stockfilter']); ?>">
                        <input type="hidden" name="style" value="<?php echo ($_GET['style']); ?>">
                        <input type="hidden" name="searchval" value="<?php echo ($_GET['searchval']); ?>">
                        <input type="hidden" name="page" value="<?php echo ($_GET['page']); ?>">
                        <input type="hidden" name="search" value="<?php echo ($_GET['search']); ?>">
                    </form>
                    <div class="goods">
                        <ul class="goods_ul" id="itemList">
                            <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsvo): $mod = ($i % 2 );++$i;?><li style="cursor: pointer;" class="goods_li">
                                <div class="mod_goods">
                                    <div class="mod_goods_img">
                                        <a class="link_pic" target="_blank" href="/li/yixun/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" pos="1" >
                                             <img class="lazy" iguid="0" src="/li/yixun/Public/home/images/icon/loading-200.gif" data-original="/li/yixun/Public/Goodsuploads/<?php echo ($goodsvo['gpic']); ?>" height="200" width="200">
                                        </a>
                                    </div>
                                    <div class="mod_goods_info">
                                        <p class="mod_goods_promo" title=""></p>
                                        <p class="mod_goods_tit"><a href="/li/yixun/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" target="_blank" title="<?php echo ($goodsvo['gname']); ?>"><?php echo ($goodsvo['gname']); ?></a></p>
                                        <p class="mod_goods_price">
                                            <span class="mod_price">
                                                <i>¥</i><span><?php echo ($goodsvo['goldprice']); ?>.00</span>
                                            </span>
                                            <span class="goods_comments"><a target="_blank" href="/li/yixun/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" pos="201" ><b><?php echo ($goodsvo['gsellnums']); ?></b>销量</a></span>
                                        </p>
                                        <div class="goods_more">
                                            <div class="goods_more_hd">
                                                <a class="goods_buy" ptag="<?php echo ($goodsvo['goldprice']); ?>" idtag="<?php echo ($goodsvo['gid']); ?>" style="width:83px;height:24px;" href="javascript:;">
                                                <i></i></a>
                                            </div>
                                        </div>
                                        <div class="goods_btn">
                                            <a class="goods_buy" ptag="<?php echo ($goodsvo['goldprice']); ?>" idtag="<?php echo ($goodsvo['gid']); ?>" href="javascript:;"> </a>
                                            <i></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div class="mod_carttip mod_carttip2 hide" style="position: absolute; z-index: 29;">
                            <div class="mod_carttip_inner">
                                <div class="mod_carttip_bd clearfix">
                                    <div class="mod_carttip_ico">
                                    <i class="mod_carttip_ico_success"></i>
                                    </div>
                                    <div class="mod_carttip_con">
                                        <h4>添加成功!</h4>
                                        <div class="mod_carttip_action">
                                            <a class="mod_carttip_btn mod_carttip_btn_bg2 mod_carttip_btn1" onclick="$('.mod_carttip_close').click()" target="_blank" href="/li/yixun/index.php/Home/Showcart/index">
                                            <span>去结算</span>
                                            </a>
                                            <a class="mod_carttip_btn mod_carttip_btn_bg1 mod_carttip_btn2" style="margin-left: 5px;" onclick="$('.mod_carttip_close').click()" href="javascript:void(0)" ytag="71003">继续购物</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <i class="mod_carttip_arr mod_carttip_arr3"> </i>
                            <a class="mod_carttip_close" title="关闭" href="javascript:;" ytag="71001">×</a>
                        </div>
                    </div>
                    <!--底部翻页器-->
                    <?php echo ($page); ?>
                    <!--或许你还想找-->
                    <div class="otherwords hide" id="bottomProwords"> </div>
                    <!--底部搜索框-->
                    <div class="sbottom">
                        <form id="searchform" action="<?php echo U('Home/Search/index');?>" target="_top">
                            <input id="areacode2" name="area" value="1" type="hidden">
                            <input id="charset2" name="charset" value="utf-8" type="hidden">
                            <input id="as2" name="as" value="1" type="hidden">
                            <input id="q_show2" name="searchval" autocomplete="off" x-webkit-speech="" class="sbottom_input" type="text">
                            <button type="submit" class="sbottom_btn" >搜索</button>
                        </form>
                    </div>
                    <!-- 无结果导航 -->
                    <div class="navmap hide" id="navMapPage"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mod_backtop" id="j_backtop">
        <a href="javascript:" title="回顶部" >回顶部</a>
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
    
    <script src="/li/yixun/Public/home/js/search.js"></script>
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