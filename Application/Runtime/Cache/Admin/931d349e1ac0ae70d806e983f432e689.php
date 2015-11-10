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
		<div id="main-content">
			<div class="content-box">
				<!-- Start Content Box -->
				<div class="content-box-header">
					<h3>個人設置</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">个人设置</a></li>
						<!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div>
				<!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">

						<form action="<?php echo U('User/userSettingSubmit','userid=' . $USER_ID);?>"
							method="post">
							<fieldset>
								<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>账号</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userAccount" disabled="disabled"
										style="background-image:none;background-color:#ECE3E3"
										value="<?php echo ($tempUser[0]['useraccount']); ?>" /> <br />
								</p>
								<p>
									<label>修改密碼：原密碼</label> <input
										class="text-input medium-input datepicker" type="password"
										id="medium-input" name="exUserPassword" /> <br />
								</p>
								<p>
									<label>修改密碼：新密碼</label> <input
										class="text-input medium-input datepicker" type="password"
										id="medium-input" name="newUserPassword" /> <br />
								</p>
								<p>
									<label>郵箱</label> <input
										class="text-input medium-input datepicker" type="text"
										value="<?php echo ($tempUser[0]['usermail']); ?>" id="medium-input"
										name="userMail" /> <br />
								</p>
								<p>
									<label>創建時間</label> <input
										class="text-input medium-input datepicker" type="text"
										value="<?php echo ($tempUser[0]['usercreatetime']); ?>" id="medium-input"
										style="background-image:none;background-color:#ECE3E3"
										name="userCreatetime" disabled="disabled" /> <br />
								</p>

								<p>
									<input class="button" type="submit" value="确定" />
								</p>
							</fieldset>
							<div class="clear"></div>
							<!-- End .clear -->
						</form>
					</div>
					<!-- End #tab1 -->
				</div>
				<!-- End .content-box-content -->
			</div>
		</div>
	</div>
</body>
</html>