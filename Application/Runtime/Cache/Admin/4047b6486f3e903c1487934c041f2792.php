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
				

				<!-- 中间部分开始 -->
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<!-- 面包屑导航 -->
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="/yixun/admin.php/admin/index">首页</a>
							</li>
							<li class="active">导航管理</li>
						</ul><!-- .breadcrumb -->

					</div>

					<div class="page-content">

						<!-- 页面导航 -->
						<div class="page-header">
							<h1>
								导航管理
								<small>
									<i class="icon-double-angle-right"></i>
									 查看
								</small>
							</h1>
						</div>

						<div class="row">
							<div class="col-xs-12">
										<div class="table-responsive">
										<!--<div>
										<form action="/yixun/admin.php/Admin/Navsetting/search" method="post" style="margin-bottom:5px;">
										<input type="text" class="user_search" required placeholder="Search" name="uname" style="height:30px;margin-top:5px;">
										<input type="submit" value="搜索" style="height:30px;margin-top:-4px;" class="btn btn-xs">
										<a href="/yixun/admin.php/Admin/Navsetting/insert" class="btn btn-primary"><small><i class="icon-plus-sign bigger-125"></i> 添加导航</small></a>
										</form>

										</div>-->
				<!--搜索-->
				<div class="row" style="padding:0px;height:auto;overflow:hidden;margin-bottom:10px;">
                                <div class="col-xs-12 col-sm-8">
                                <a class="btn btn-primary pull-left" style="padding:1px 10px;" href="/yixun/admin.php/Admin/Navsetting/insert">
                                    <i class="icon-plus-sign bigger-125"></i>
                                    添加导航
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <form action="/yixun/admin.php/Admin/Navsetting/search" method="get">
                                    <div class="input-group pull-right">
                                        <input class="form-control search-query" type="text"  name="nname" required placeholder="输入搜索内容...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-sm" type="submit">
                                                Search
                                                <i class="icon-search icon-on-right bigger-110"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
				</div><!--搜索结束-->

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" id="check"/>
																<span class="lbl"></span>
															</label>
														</th>
														<th>导航名称</th>
														<th>排序编号</th>
														
														<th class="hidden-480">导航链接网址</th>

														
														

														<th>操作</th>
													</tr>
												</thead>
												<!--一行的开始-->
												<!--遍历查询到的数据-->
												<?php if(is_array($nav)): foreach($nav as $key=>$v): ?><tbody>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace" name="box"/>
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo ($v["nname"]); ?></a>
														</td>
														<td><?php echo ($v["nsort"]); ?></td>
														<td class="hidden-480"><?php echo ($v["nweb"]); ?></td>
													

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="/yixun/admin.php/Admin/Navsetting/mod/nid/<?php echo ($v["nid"]); ?>">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a name="del_<?php echo ($v["nid"]); ?>" class="red" data-toggle="modal" href="#deleteModal">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>


																		<li>
																			<a href="#" class="tooltip-error" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<!--遍历结束--><?php endforeach; endif; ?>
													<tr style="height:50px;">
														<td colspan=7><?php echo ($page); ?></td>
													</tr>
													<!--一行的结束-->

													
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
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
                <div id="success-info" class="alert alert-success fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				<strong></strong>
			</div>
			<div id="error-info" class="alert alert-danger fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				<strong></strong>
			</div>
			<!-- 删除按钮弹出层结束 -->								
		
			
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
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {

				//设置当前页面的菜单高亮显示 开始
				var nownav = "#sidebar a[href*=Navsetting]";
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
                    
                    //删除弹窗和信息提示
                    $('#delete-success').fadeOut(0);
                    $('#delete-error').fadeOut(0);
                    
                    var delid;
                    var delline;
                    $('a[name^=del]').on('click',function(){
                        delid = ($(this).attr('name').split('_'))[1];
                        delline = $(this).parent().parent().parent();
                    });
                   
                    $('#delete-data').on('click',function(){
                        $.ajax({
                               url:"/yixun/admin.php/Admin/Navsetting/del",
                               type:"get",
                               data:{nid:delid},
                               success:function(data){
                                   if (data == 1) {
                                warningInfo("#success-info","删除成功！");
                                location.href='';
                            }else if(data == 2){
                                warningInfo("#error-info","没有删除权限！");
                            }else{
                                warningInfo("#error-info","删除失败！");
                            }
                            $('#deleteModal').modal('hide');
                       }
                });
            });
                   
                   
                   
                   //信息提示函数
            function warningInfo(id,info){
	                $(id).removeClass('hide');
	                $(id).fadeOut(0);
	                $(id).children().eq(1).html(info);
	                $(id).fadeToggle(0).delay(1000).fadeToggle(1000);
            	}


			});
		</script>

	</body>
</html>