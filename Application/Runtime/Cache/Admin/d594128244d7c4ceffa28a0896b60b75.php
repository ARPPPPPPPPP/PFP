<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($APPLICATION_NAME); ?> System</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" type="text/css" href="/PFP/Public/resources/css/reset.css" />
<!-- Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="/PFP/Public/resources/css/style.css" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" type="text/css" href="/PFP/Public/resources/css/invalid.css" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/PFP/Public/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/PFP/Public/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/PFP/Public/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/PFP/Public/resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="/PFP/Public/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="/PFP/Public/resources/scripts/jquery.date.js"></script>
</head>
<body>
	<div id="body-wrapper">
		<!-- Wrapper for the radial gradient background -->
		<div id="sidebar">
			<div id="sidebar">
				
<div id="sidebar-wrapper">
	<!-- Logo (221px wide) -->
	<img id="logo" src="/PFP/Public/resources/images/logo.JPG"
		style="width: 200px; height: 200px; align: center;"
		alt="<?php echo ($APPLICATION_NAME); ?> System" />
	<!-- Sidebar Profile links -->
	<div id="profile-links">
		Hello, <a href="<?php echo U('User/userSetting','userid=' . $USER_ID);?>"
			title="Edit your profile"><?php echo session('userAccount');?> ! </a><br /> <br />
		<a href="<?php echo U('User/userSetting','userid=' . $USER_ID);?>"
			title="View the Site">AccountSetting</a> | <a
			href="<?php echo U('Login/logout');?>" title="Sign Out">Log out</a>
	</div>
	<ul id="main-nav">
		<li><a href="<?php echo U('Login/home');?>"<?php if($CURRENT_MENU == 'HOME'): ?>class="nav-top-item
				no-submenu current" <?php else: ?> class="nav-top-item no-submenu"<?php endif; ?>>Home</a></li>
		<li><a href="<?php echo U('BreakingNews/allBreakingNews');?>"<?php if($CURRENT_MENU == 'BREAKINGNEWS'): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>EditContent</a></li>
		<li><a href="<?php echo U('SignUp/allSignUp');?>"<?php if($CURRENT_MENU == 'SIGNUP'): ?>class="nav-top-item
				no-submenu current" <?php else: ?> class="nav-top-item no-submenu"<?php endif; ?>>SignUp</a></li>
		<li><a href="<?php echo U('Download/allDownload');?>"<?php if($CURRENT_MENU == 'DOWNLOAD'): ?>class="nav-top-item
				no-submenu current" <?php else: ?> class="nav-top-item no-submenu"<?php endif; ?>>Download</a></li>
		<li><a href="<?php echo U('HomePicture/allHomePicture');?>"<?php if($CURRENT_MENU == 'HOMEPICTURE'): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>HomePagePicture</a></li>
		<li><a href="<?php echo U('SystemSetting/systemSetting','userid=' . $USER_ID);?>"<?php if($CURRENT_MENU == 'SYSTEM'): ?>class="nav-top-item
				no-submenu current" <?php else: ?> class="nav-top-item no-submenu"<?php endif; ?>>SystemSetting</a></li>
		<li><a href="<?php echo U('User/userSetting','userid=' . $USER_ID);?>"<?php if($CURRENT_MENU == 'USER'): ?>class="nav-top-item
				no-submenu current" <?php else: ?> class="nav-top-item no-submenu"<?php endif; ?>>AccountSetting</a></li>
	</ul>
</div>

			</div>
		</div>
		<!-- End #sidebar -->

	</div>
	<div id="main-content">
		<!-- 
		<img src="/PFP/Public/resources/images/scut_logo2.jpg" />
		 -->
		<!--
		<div class="notification attention png_bg">
			<a href="#" class="close"><img
				src="/PFP/Public/resources/images/icons/cross_grey_small.png"
				title="Close this notification" alt="close" /></a>
			<div>警告通知</div>
		</div>
		<div class="notification information png_bg">
			<a href="#" class="close"><img
				src="/PFP/Public/resources/images/icons/cross_grey_small.png"
				title="Close this notification" alt="close" /></a>
			<div>提示通知</div>
		</div>
		<div class="notification success png_bg">
			<a href="#" class="close"><img
				src="/PFP/Public/resources/images/icons/cross_grey_small.png"
				title="Close this notification" alt="close" /></a>
			<div>成功通知</div>
		</div>
		<div class="notification error png_bg">
			<a href="#" class="close"><img
				src="/PFP/Public/resources/images/icons/cross_grey_small.png"
				title="Close this notification" alt="close" /></a>
			<div>错误通知</div>
		</div>
		<div class="clear"></div>
		<div class="content-box column-left">
			<div class="content-box-header">
				<h3>左框</h3>
			</div>
			<div class="content-box-content">
				<div class="tab-content default-tab">
					<h4>左框标题</h4>
					<p>左框内容</p>
				</div>
			</div>
		</div>
		<div class="content-box column-right closed-box">
			<div class="content-box-header">
				<h3>右框 默认关闭</h3>
			</div>
			<div class="content-box-content">
				<div class="tab-content default-tab">
					<h4>右框标题</h4>
					<p>右框内容</p>
				</div>
			</div>
		</div>
		-->
	</div>
</body>
</html>