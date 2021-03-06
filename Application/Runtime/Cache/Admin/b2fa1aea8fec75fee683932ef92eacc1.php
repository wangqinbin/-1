<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($title); ?>——易迅网后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link rel="stylesheet" href="/yixun/Public/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/yixun/Public/admin/css/font-awesome.min.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/yixun/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/yixun/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/yixun/Public/admin/css/ace-skins.min.css" />
		
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="index">
						<img src="/yixun/Public/admin/images/admin_logo.png" class="img-responsive" />
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/yixun/Public/admin/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo (session('uname')); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo U('Admin/Profile/index');?>">
										<i class="icon-cog"></i>
										修改密码
									</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Admin/Login/loginOut');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				
				<!-- 加载左部分 -->
				        <!-- 侧边菜单开始 -->
        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>
            <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="height:42px;">
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <?php if(authCheck('Admin/Index/index',session('uid'))): ?><li>
                        <a id="indexpage" href="<?php echo U('Admin/Index/index');?>">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> 控制台 </span>
                        </a>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Websetting/index',session('uid')) or authCheck('Admin/Navsetting/index',session('uid')) or authCheck('Admin/Friendlink/index',session('uid'))): ?><li>
                        <a href="" class="dropdown-toggle">
                            <i class="icon-cog"></i>
                            <span class="menu-text"> 网站配置 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        <ul class="submenu">
                            <?php if(authCheck('Admin/Websetting/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Websetting/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        基本配置
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Navsetting/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Navsetting/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        导航设置
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Friendlink/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Friendlink/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        友情链接
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Indexset/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Indexset/index');?>">
                            <i class="icon-desktop"></i>
                            <span class="menu-text"> 首页设置 </span>
                        </a>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Adset/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Adset/index');?>">
                            <i class="icon-eye-open"></i>
                            <span class="menu-text"> 广告管理 </span>
                        </a>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Member/index',session('uid')) or authCheck('Admin/Memlevel/index',session('uid')) ): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-group"></i>
                            <span class="menu-text"> 用户管理 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        
                        <ul class="submenu">
                            <?php if(authCheck('Admin/Member/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Member/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        会员管理
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Memlevel/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Memlevel/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        会员等级
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Goodsclass/index',session('uid')) or authCheck('Admin/Goodsattr/index',session('uid')) or authCheck('Admin/Goodsbrand/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span class="menu-text"> 分类管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <?php if(authCheck('Admin/Goodsclass/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsclass/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品分类
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsattr/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsattr/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品属性
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsbrand/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsbrand/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品品牌
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Goodsissue/index',session('uid')) or authCheck('Admin/Goodsup/index',session('uid')) or authCheck('Admin/Goodsdown/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-asterisk"></i>
                            <span class="menu-text"> 商品管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <?php if(authCheck('Admin/Goodsissue/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsissue/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品发布
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsup/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsup/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        上架商品
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsdown/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsdown/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        仓库商品
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Ordermanage/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Ordermanage/index');?>">
                            <i class="icon-bar-chart"></i>
                            <span class="menu-text">  订单管理 </span>
                        </a>
                    </li><?php endif; ?>
            
              <?php if(authCheck('Admin/Reviewmanage/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Reviewmanage/index');?>">
                            <i class="icon-comment"></i>
                            <span class="menu-text"> 评价管理 </span>
                        </a>
                    </li><?php endif; ?>
            
                <?php if(authCheck('Admin/Articleclass/index',session('uid')) or authCheck('Admin/Articlemanage/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-book"></i>
                            <span class="menu-text"> 文章管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>
                    
                        <ul class="submenu">
                            <?php if(authCheck('Admin/Articleclasses/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Articleclasses/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        文章分类
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Articlemanage/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Articlemanage/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        文章管理
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
               
                <?php if(authCheck('Admin/Groulist/index',session('uid')) or authCheck('Admin/Accesslist/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-cogs"></i>
                           <span class="menu-text"> 权限管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <?php if(authCheck('Admin/Grouplist/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Grouplist/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        角色配置
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Accesslist/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Accesslist/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        权限列表
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Profile/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-tag"></i>
                            <span class="menu-text"> 其他设置 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo U('Admin/Profile/index');?>">
                                    <i class="icon-double-angle-right"></i>
                                    用户信息
                                </a>
                            </li>
                        </ul>
                    </li><?php endif; ?>
            </ul>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>
        </div>

				<!-- 中间部分开始 -->
				
        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <!-- 面包屑导航 -->
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="<?php echo U('Admin/Index/index');?>">首页</a>
                    </li>
                    <li class="active"><?php echo ($title); ?></li>
                </ul><!-- .breadcrumb -->
                
            </div>
            
            <div class="page-content">
                
                <!-- 页面导航 -->
                <div class="page-header">
                    <h1>
                        <?php echo ($title); ?>
                        <small>
                            <i class="icon-double-angle-right"></i>
                            查看
                        </small>
                    </h1>
                </div>
                

                <div class="row">
                    <div class="col-xs-12">
                        <div class="tabbable">
                            <ul id="myTab" class="nav nav-tabs">

                            <?php if(is_array($floors)): $i = 0; $__LIST__ = $floors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="ftitle-<?php echo ($vo['frid']); ?>" class="">
                                    <a href="#floor_<?php echo ($vo['frid']); ?>" data-toggle="tab">
                                        <i class="green icon-barcode bigger-110"></i>
                                        <?php echo ($i); ?>F--<?php echo ($vo['cname']); ?>
                                    </a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                <!-- 添加按钮 -->
                                <li class="pull-right" style="position:relative;right:1px;">
                                    <a id="addfloor" data-toggle="modal" class="btn btn-info btn-sm " href="#addModal">
                                        <i class="icon-plus-sign bigger-110"></i>
                                        添加楼层
                                    </a> 
                                </li>
                            </ul>
                            <div class="tab-content">

                            <?php if(is_array($floors)): $i = 0; $__LIST__ = $floors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="floor_<?php echo ($vo['frid']); ?>" class="tab-pane">
                                    <div style="height:auto;overflow:hidden;">
                                    <h4 class="pink pull-left">
                                        <i class="icon-flag green"></i>
                                        <a class="blue" data-toggle="modal" role="button" href="#modal-form"> 图片设置</a>
                                    </h4>
                                    <a class="btn btn-info pull-left" style="padding:1px 10px;margin-left:20px;" href="<?php echo U('Admin/Indexset/createPic',array('frid'=>$vo['frid']));?>">
                                        <i class="icon-plus-sign bigger-125"></i>
                                        添加图片
                                    </a>
                                    <a id="delete-floor-<?php echo ($vo['frid']); ?>" name="<?php echo ($i); ?>F <?php echo ($vo['cname']); ?>" class="btn btn-danger btn-xs pull-right" style="padding:1px 10px;margin-left:5px;" data-toggle="modal" href="#deleteFloor">
                                        <i class="icon-bolt bigger-125"></i>
                                        删除楼层
                                    </a>
                                    <a id="edit-floor-<?php echo ($vo['frid']); ?>" ytag="<?php echo ($vo['frsort']); ?>" name="<?php echo ($i); ?>F <?php echo ($vo['cname']); ?>" class="btn btn-warning btn-xs pull-right" style="padding:1px 10px;margin-left:5px;" data-toggle="modal" href="#editFloor">
                                        <i class="icon-warning-sign bigger-125"></i>
                                        修改楼层信息
                                    </a>
                                    </div>
                                    <div class="hr hr-18 dotted hr-double"></div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="table-responsive">
                                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th class="widht-15">图片标题</th>
                                                            <th class="widht-15">图片url</th>
                                                            <th class="widht-15">有效期</th>
                                                            <th class="widht-15">缩略图</th>
                                                            <th class="widht-15">
                                                                <div class="dropdown" id="select-search">
                                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                                                        <span>广告位置</span>
                                                                        <i class="icon-caret-down bigger-110 width-auto"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-info">
                                                                        <li>
                                                                            <a href="#floorads_0" >所有广告</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#floorads_1" >左侧幻灯片</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#floorads_2" >中间推荐位</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#floorads_3" >右侧广告</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </th>
                                                            <th style="width:100px;">操作</th>
                                                        </tr>
                                                    </thead>
                                                    <!--一行的开始-->
                                                    <!--遍历查询到的数据-->
                                                    <tbody id="floorset-<?php echo ($vo['frid']); ?>">

                                                    </tbody>
                                                </table> 
                                                <div class="no-margin-top">
                                                    <ul id="page-ctrl" class="pagination pull-right no-margin">
                                                        <li class="prev">
                                                            <button class="btn btn-white">
                                                                <i class="icon-double-angle-left"></i>
                                                                上一页
                                                            </button>
                                                        </li>
                                                        <li class="next">
                                                            <button class="btn btn-white">
                                                                下一页
                                                                <i class="icon-double-angle-right"></i>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>                                            
                                            </div>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                    <!-- 文字链接 -->
                                    <div class="hr hr-18 dotted hr-double"></div>
                                    <div style="height:auto;overflow:hidden;">
                                    <h4 class="orange pull-left">
                                        <i class="icon-flag orange"></i>
                                        <a class="blue" data-toggle="modal" role="button" href="#modal-form"> 文字推荐</a>
                                    </h4>
                                    <a class="btn btn-warning pull-left" style="padding:1px 10px;margin-left:20px;" href="<?php echo U('Admin/Indexset/createText',array('frid'=>$vo['frid']));?>">
                                        <i class="icon-plus-sign bigger-125"></i>
                                        添加推荐
                                    </a>
                                    </div>
                                    <div class="hr hr-18 dotted hr-double"></div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="table-responsive">
                                                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th class="widht-15">文字推荐标题</th>
                                                            <th class="widht-15">文字推荐url</th>
                                                            <th style="width:100px;">操作</th>
                                                        </tr>
                                                    </thead>
                                                    <!--一行的开始-->
                                                    <!--遍历查询到的数据-->
                                                    <tbody id="floortext-<?php echo ($vo['frid']); ?>">

                                                    </tbody>
                                                </table> 
                                                <div class="no-margin-top">
                                                    <ul id="page-text" class="pagination pull-right no-margin">
                                                        <li class="prev">
                                                            <button class="btn btn-white">
                                                                <i class="icon-double-angle-left"></i>
                                                                上一页
                                                            </button>
                                                        </li>
                                                        <li class="next">
                                                            <button class="btn btn-white">
                                                                下一页
                                                                <i class="icon-double-angle-right"></i>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 中间部分结束 -->
        
        <!-- 删除按钮弹出层 -->
        <div class="modal modal-small fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:300px;">
                <div class="modal-content" style="top:160px;left:80%;">
                    <div class="modal-header" style="height:40px;padding:5px 10px;line-height:30px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <p class="bigger-120" id="myModalLabel">删除数据</p>
                    </div>
                    <div class="modal-body" style="height:70px;padding:5px 10px;line-height:60px;">
                        <p class="text-danger bigger-150">确定删除数据！</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" id="delete-data">删除</button>
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- 删除按钮弹出层结束 -->
        
        <!-- 查看弹出层开始 -->
        <div class="modal modal-small fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="padding:10px;">
                <div class="modal-content" >
                    <div class="modal-header" style="height:50px;padding:5px 10px;line-height:40px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <p class="bigger-120" id="viewModalLabel"></p>
                    </div>
                    <div class="modal-body" style="padding:25px;">

                    </div>
                    <div class="modal-footer" style="margin:0px;padding:10px;">
                        <p class="text-primary align-left bigger-40 orange pull-left">连接：<span></span><br />有效期：<span></span></p>
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">确定</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- 查看弹出层结束 -->

        <!-- 添加弹出层开始 -->
        <div class="modal modal-small fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="padding:10px;">
                <div class="modal-content" style="top:50px;">
                    <div class="modal-header" style="height:50px;padding:5px 10px;line-height:40px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <p class="bigger-120" id="addModalLabel">添加楼层</p>
                    </div>
                    <div class="modal-body" style="padding:25px;height:auto;overflow:hidden;">
                        <div class="form-group col-sm-12">
                            <label class="col-sm-2 control-label no-padding-right" style="line-height:25px;"> 楼层栏目 </label>
                            <div class="col-sm-10">
                                <div class="col-xs-10 col-sm-5 no-padding">
                                    <select id="floorsel" class="form-control" name="floorclass">
                                        <option value=""}>请选择本楼层栏目</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-sm-2 control-label no-padding-right" style="line-height:25px;"> 排序 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-5" type="text" value="0" id="floor-sort" name="floorsort">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin:0px;padding:10px;">
                        <button id="addsure" type="button" class="btn btn-sm btn-primary" >添加楼层</button>
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- 添加弹出层结束 -->

         <!-- 修改弹出层开始 -->
        <div class="modal modal-small fade" id="editFloor" tabindex="-1" role="dialog" aria-labelledby="editFloorLabel" aria-hidden="true">
            <div class="modal-dialog" style="padding:10px;">
                <div class="modal-content" style="top:50px;">
                    <div class="modal-header" style="height:50px;padding:5px 10px;line-height:40px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <p class="bigger-120" id="editFloorLabel">修改楼层</p>
                    </div>
                    <div class="modal-body" style="padding:25px;height:auto;overflow:hidden;">
                        <div class="form-group col-sm-12">
                            <label class="col-sm-2 control-label no-padding-right" style="line-height:25px;"> 当前楼层 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-8" type="text" id="editfname" value="" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-sm-2 control-label no-padding-right" style="line-height:25px;"> 重设栏目 </label>
                            <div class="col-sm-10">
                                <div class="col-xs-10 col-sm-8 no-padding">
                                    <select id="floorsel-edit" class="form-control">
                                        <option value=""}>如果需要重设请选择</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-sm-2 control-label no-padding-right" style="line-height:25px;"> 排序 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-8" type="text" value="0" id="floorsort">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin:0px;padding:10px;">
                        <button id="modifysure" type="button" class="btn btn-sm btn-primary" >确定修改</button>
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- 修改弹出层结束 -->

        <!-- 删除楼层弹出层 -->
        <div class="modal modal-small fade" id="deleteFloor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:400px;">
                <div class="modal-content" style="top:160px;left:80%;">
                    <div class="modal-header" style="height:40px;padding:5px 10px;line-height:30px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <p class="bigger-120" id="myModalLabel">删除数据</p>
                    </div>
                    <div class="modal-body" style="height:120px;padding:20px 10px;">

                        <p class="text-danger bigger-120" style="padding-left:10px;">删除楼层，将删除楼层内的所有数据！</p>
                        <div class="form-group col-sm-12" style="padding:0px;">
                            <div class="col-sm-12" style="margin-bottom:10px;">
                                <label class="col-sm-3 col-xs-5 control-label no-padding-right" style="line-height:25px;"> 当前楼层 </label>
                                <input class="col-xs-7 col-sm-8" type="text" id="curr-floor-name" value="1F 手机" readonly>
                            </div>
                            <div class="col-sm-12">
                                <label class="col-sm-3 col-xs-5 control-label no-padding-right" style="line-height:25px;"> 密码 </label>
                                <input class="col-xs-7 col-sm-8" type="password" id="adminpwd" placeholder="请输入密码进行删除">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-sm btn-default" id="deletefloor-data">确定删除</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- 删除楼层弹出层结束 -->

        
        <!-- 提示信息 -->
        <div id="success-info" class="alert alert-success fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
            <strong></strong>
        </div>
        <div id="error-info" class="alert alert-danger fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
            <strong></strong>
        </div>

			
			</div>
			<!-- 返回顶部 -->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- //加载公共js -->
		<script type="text/javascript">
		window.jQuery || document.write("<script src='/yixun/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/yixun/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/yixun/Public/admin/js/bootstrap.min.js"></script>
		<script src="/yixun/Public/admin/js/ace-elements.min.js"></script>
		<script src="/yixun/Public/admin/js/ace.min.js"></script>
		<script src="/yixun/Public/admin/js/ace-extra.min.js"></script>
		
    <script type="text/javascript">
        jQuery(function($) {         
            //设置当前页面的菜单高亮显示 开始
            var nownav = "#sidebar a[href*=Indexset]";
            var parentattr = $(nownav).parent().parent().attr("class");
            $(nownav).parent().addClass('active');
            if (parentattr == 'submenu') {
                $(nownav).parent().parent().parent().addClass('active open');
            };
            //设置当前页面的菜单高亮显示 结束

            //全选js
            $('table th input:checkbox').on('click' , function(){
                var that = this;
                $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function(){
                     this.checked = that.checked;
                     $(this).closest('tr').toggleClass('selected');
                     });
            });

            //选项卡切换
            $('li a[href^=#floor_]').on('click',function(){
                floorsel = $(this).attr('href').split('_')[1];
                loadData(floorsel);
                loadText(floorsel);
            });

            //图片分页
            var page = 1;
            var floorsel = 1;
            $('#page-ctrl li[class="next"] button').on('click',function(){
                if ($('#floorset-'+floorsel).children().length == 10) {
                    page++;
                };            
                loadData(floorsel,page,fadplace);
            });
            $('#page-ctrl li[class="prev"] button').on('click',function(){
                page--;
                if (page < 1) {
                    page = 1;
                };
                loadData(floorsel,page,fadplace);
            });

            //文字分页
            var tpage = 1;
            $('#page-text li[class="next"] button').on('click',function(){
                if ($('#floortext-'+floorsel).children().length == 10) {
                    tpage++;
                };            
                loadText(floorsel,tpage);
            });
            $('#page-text li[class="prev"] button').on('click',function(){
                tpage--;
                if (tpage < 1) {
                    tpage = 1;
                };
                loadText(floorsel,tpage);
            });            

            //弹出框
            var delid;
            var delline;
            var ytag;
            $('div[class="tab-content"]').mouseover(function(){
                //查看
                $('a[name=table-view]').on('click',function(){
                    var viewline = $(this).parent().parent().parent();
                    $('#viewModal .modal-header p').html(viewline.children().eq(1).html());
                    $('#viewModal .modal-body').html("<img class='img-responsive' src='/yixun/Public/Uploads/"+viewline.children().eq(4).children().attr("alt")+"' width='600'>");
                    $('#viewModal .modal-footer p span').eq(0).html(viewline.children().eq(2).html());
                    $('#viewModal .modal-footer p span').eq(1).html(viewline.children().eq(3).children().html());
                });

                $('a[name^=del]').on('click',function(){
                    delid = ($(this).attr('name').split('_'))[1];
                    delline = $(this).parent().parent().parent();
                    ytag = $(this).attr('ytag');
                });
            });

            //删除数据
            $('#delete-data').on('click',function(){
                $.ajax({
                    url:"/yixun/admin.php/Admin/Indexset/deleteAd",
                    type:"post",
                    data:{fadid:delid,adtype:ytag},
                    success:function(data){
                    if (data == 1) {
                        delline.remove();
                        warningInfo('#success-info','删除数据成功!');
                    }else if(data == 2){
                        warningInfo("#error-info","没有删除权限！");
                    }else{
                        warningInfo('#error-info','删除数据失败!');
                    }
                    $('#deleteModal').modal('hide');
                    }
                });
            });

            //添加楼层框显示信息
            var view = 1;
            $('#addfloor').on('click',function(){
                if (view == 1) {
                   viewClass('#floorsel'); 
                };
                view++;
            });

            //添加楼层状态
            $('#addsure').on('click',function(){
                var fclass = $('#floorsel').val();
                var fsort = $('#floor-sort').val();
                if(fclass == ''){
                    $(this).attr("data-dismiss","");
                    return;
                }
                $.ajax({
                    url:"/yixun/admin.php/Admin/Indexset/addFloor",
                    type:"post",
                    data:{cid:fclass,frsort:fsort},
                    success:function(data){
                        if (data == 1) {
                            warningInfo('#success-info','楼层添加成功!');
                            location.href="/yixun/admin.php/Admin/Indexset/index";
                        }else if(data == 2){
                            warningInfo('#error-info','没有添加权限!');
                        }else{
                            warningInfo('#error-info','楼层添加失败!');
                        }
                    }
                });
                $(this).attr("data-dismiss","modal");
            });

            //修改楼层框显示信息
            var editfrid;
            var currview;
            $('a[id^=edit-floor]').on('click',function(){
                editfrid = $(this).attr('id').split('-')[2];
                if (editfrid != currview) {
                    viewClass('#floorsel-edit');
                };
                currview = editfrid;
                $('#editfname').val($(this).attr('name'));
                $('#floorsort').val($(this).attr('ytag'));
            });

            //修改楼层状态
            $('#modifysure').on('click',function(){
                var fclass = $('#floorsel-edit').val();
                var fsort = $('#floorsort').val();
                $.ajax({
                    url:"/yixun/admin.php/Admin/Indexset/modifyFloor",
                    type:"post",
                    data:{cid:fclass,frsort:fsort,frid:editfrid},
                    success:function(data){
                        if (data == 1) {
                            warningInfo('#success-info','楼层修改成功!');
                            location.href="/yixun/admin.php/Admin/Indexset/index";
                        }else if(data == 2){
                            warningInfo('#error-info','没有修改权限!');
                        }else{
                            warningInfo('#error-info','楼层修改失败!');
                        }
                    }
                });
                $(this).attr("data-dismiss","modal");
            });

            //删除楼层
            var deletefrid;

            $('a[id^=delete-floor-]').on('click',function(){
                deletefrid = $(this).attr('id').split('-')[2];
                $('#curr-floor-name').val($(this).attr('name'));
            });

            //删除ING
            $('#deletefloor-data').on('click',function(){
                var adminpwd = $('#adminpwd').val();
                if (adminpwd == '') {
                    $('#adminpwd').focus();
                    $('#adminpwd').css('color','red');
                    return;
                };
                $.ajax({
                    url:"/yixun/admin.php/Admin/Indexset/deleteFloor",
                    type:"post",
                    data:{frid:deletefrid,adminpwd:adminpwd},
                    success:function(data){
                        if (data == 9) {
                            warningInfo('#error-info','楼层删除失败，密码错误！');
                        }else if(data == 2){
                            warningInfo('#error-info','没有删除权限!');
                        }else if(data == 1){
                            warningInfo('#success-info','楼层删除成功!');
                            location.href="/yixun/admin.php/Admin/Indexset/index";
                        }else{
                            warningInfo('#error-info','楼层删除失败，部分数据可能被删除!');
                        }
                    }
                });
                $(this).attr("data-dismiss","modal");
            });

            //选择搜索
            var fadplace;
            $('#select-search ul li a').on('click',function(){
                $('#select-search>a>span').html($(this).html());
                fadplace = $(this).attr('href').split('_')[1];
                page = 1;
                loadData(floorsel,page,fadplace);
            });
            
            var curractive = $('div[id^=floor_]').attr('id').split('_')[1];
            //当前加载的数据
            var currurl = window.location.href.split('/floor/')[1];
            currurl = parseInt(currurl);
            if (currurl>0) {
                loadData(currurl,1,0);
                loadText(currurl,1);
                viewTab(currurl);
            }else{
                loadData(curractive,1,0);
                loadText(curractive,1);
                viewTab(curractive);
            }

            //信息提示函数
            function warningInfo(id,info){
                $(id).removeClass('hide');
                $(id).fadeOut(0);
                $(id).children().eq(1).html(info);
                $(id).fadeToggle(0).delay(1000).fadeToggle(1000);
            }

            function viewTab(currurl){
                $('#ftitle-'+currurl).toggleClass('active');
                $('#floor_'+currurl).toggleClass('active');
            }

            function loadData(floor,page,fadplace){
                $.ajax({
                    url:"/yixun/admin.php/Admin/Indexset/loadData",
                    type:"post",
                    data:{frid:floor,page:page,fadplace:fadplace},
                    success:function(data){
                        $('#floorset-'+floor).html('');
                        $('#floorset-'+floor).html(data);
                    }
                })
            }

            function loadText(floor,tpage){
                $.ajax({
                    url:"/yixun/admin.php/Admin/Indexset/loadText",
                    type:"post",
                    data:{frid:floor,page:tpage},
                    success:function(data){
                        $('#floortext-'+floor).html('');
                        $('#floortext-'+floor).html(data);
                    }
                })
            }

            function viewClass(id){
                $.ajax({
                    url:"/yixun/admin.php/Admin/Indexset/viewClass",
                    type:"post",
                    datatype:'json',
                    success:function(data){
                        var datas = JSON.parse(data);
                        $(id).children().eq(0).nextAll().remove();
                        for (i in datas) {
                            $(id).append('<option value="'+datas[i].cid+'">'+datas[i].cname+'</option>');
                        };
                    }
                });
            }
        });
    </script>

	</body>
</html>