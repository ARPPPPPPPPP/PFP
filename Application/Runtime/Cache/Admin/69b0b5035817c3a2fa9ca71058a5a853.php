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
		<div id="main-content">
			<div class="content-box">
				<!-- Start Content Box -->
				<div class="content-box-header">
					<h3>SignUp</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">List</a></li>
						<!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">

						<table style="table-layout: fixed;">
							<thead>
								<tr>
									<th width="10%"><input class="check-all" type="checkbox" /></th>
									<th width="20%">SignUpName</th>
									<th width="20%">SignUpSex</th>
									<th width="20%">SignUpSchool</th>
									<th width="20%">SignUpMajor</th>
									<th width="20%">SignUpCellPhone</th>
									<th width="20%">SignUpWeiXing</th>
									<th width="20%">SignUpTime</th>
									<th width="20%">Operation</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="10">
										<div class="bulk-actions align-left">
											<a class="button" onclick="deleteMulti()">Delete Select</a>
										</div>
										<div class="pagination"><?php echo ($page); ?></div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php if(is_array($list)): foreach($list as $key=>$item): ?><tr>
									<td><input type="checkbox" name='checkboxscut'
										id='<?php echo ($item[signupid]); ?>' /></td>
									<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[signupname]); ?></td>
									<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[signupsex]); ?></td>
									<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[signupschool]); ?></td>
									<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[signupmajor]); ?></td>
									<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[signupcellphone]); ?></td>
									<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[signupweixing]); ?></td>
									<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[signuptime]); ?></td>
									<td><a
										href="<?php echo U('SignUp/editSignUp','signupid=' . $item[signupid]);?>"
										title="Edit" target="_blank"><img
											src="/PFP/Public/resources/images/icons/pencil.png" alt="Edit" /></a>
										<a href="<?php echo U('SignUp/allSignUp','delete=' . $item[signupid]);?>"
										title="Delete"><img
											src="/PFP/Public/resources/images/icons/cross.png"
											onclick="javascript:return confirm('Do Delete?');"
											alt="Delete" /></a></td>
								</tr><?php endforeach; endif; ?>

							</tbody>
						</table>
					</div>
					<!-- End #tab1 -->
					<div class="tab-content" id="tab2">
						<form action="<?php echo U('SignUp/addSignUp');?>" method="post">
							<fieldset>
								<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>SignUpName</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupname" /> <br />
								</p>
								<p>
									<label>SignUpSex</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupsex" /> <br />
								</p>
								<p>
									<label>SignUpBirthDay</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupbirthday" /> <br />
								</p>
								<p>
									<label>SignUpSchool</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupschool" /> <br />
								</p>
								<p>
									<label>SignUpMajor</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupmajor" /> <br />
								</p>
								<p>
									<label>SignUpGradeYear</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupgradeyear" /> <br />
								</p>
								<p>
									<label>SignUpCellPhone</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupcellphone" /> <br />
								</p>
								<p>
									<label>SignUpMail</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupmail" /> <br />
								</p>
								<p>
									<label>SignUpWeiXing</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupweixing" /> <br />
								</p>
								<p>
									<label>SignUpReferee</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupreferee" /> <br />
								</p>
								<p>
									<label>SignUpIDCard</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupidcard" /> <br />
								</p>
								<p>
									<label>SignUpFamilyContact</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupfamilycontact" /> <br />
								</p>
								<p>
									<label>SignUpExperience</label> <textarea
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupexperience" style="height: 200px; overflow:auto;"></textarea> <br />
								</p>
								<p>
									<label>SignUpAward</label> <textarea
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="signupaward" style="height: 200px;"></textarea> <br />
								</p>
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
							</fieldset>
							<div class="clear"></div>
							<!-- End .clear -->
						</form>
					</div>
					<!-- End #tab2 -->
				</div>
				<!-- End .content-box-content -->
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function deleteMulti() {
		if (confirm('Do Delete?')) {
			var id = document.getElementsByName('checkboxscut');
			var value = new Array();
			for (var i = 0; i < id.length; i++) {
				if (id[i].checked)
					value.push(id[i].id);
			}
			//alert(value.toString());
			window.location = "<?php echo U('SignUp/allSignUp','deleteMulti=-1');?>" + ","
					+ value.toString();
		}
	}
</script>