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
					<h3>EditContent</h3>
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
									<th width="20%">ContentTitle</th>
									<th width="20%">ContentType</th>
									<th width="20%">ContentReleaseDate</th>
									<th width="20%">ContentMainContent</th>
									<th width="20%">ContentMainPageView</th>
									<th width="20%">Operation</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="bulk-actions align-left">
											<a class="button" onclick="deleteMulti()">Delete Select</a>
										</div>
										<div class="bulk-actions align-left"></div>
										<div class="bulk-actions align-left">
											<label>&nbsp;&nbsp;&nbsp;Type</label> <select id="selectType"
												class="small-input"
												onChange="selectedTypeChanged(this.value)">
												<?php if($selectedtype == all): ?><option value="all" selected="selected">ALL</option>
												<?php else: ?>
												<option value="all">ALL</option><?php endif; ?>
												<?php if($selectedtype == 1): ?><option value="1" selected="selected">新聞</option>
												<?php else: ?>
												<option value="1">新聞</option><?php endif; ?>
												<?php if($selectedtype == 2): ?><option value="2" selected="selected">留學考試區</option>
												<?php else: ?>
												<option value="2">留學考試區</option><?php endif; ?>
												<?php if($selectedtype == 3): ?><option value="3" selected="selected">世界排名一覽</option>
												<?php else: ?>
												<option value="3">世界排名一覽</option><?php endif; ?>
												<?php if($selectedtype == 4): ?><option value="4" selected="selected">留學區域資料</option>
												<?php else: ?>
												<option value="4">留學區域資料</option><?php endif; ?>
												<?php if($selectedtype == 5): ?><option value="5" selected="selected">申請步驟</option>
												<?php else: ?>
												<option value="5">申請步驟</option><?php endif; ?>
												<?php if($selectedtype == 6): ?><option value="6" selected="selected">項目費用明細</option>
												<?php else: ?>
												<option value="6">項目費用明細</option><?php endif; ?>
												<?php if($selectedtype == 7): ?><option value="7" selected="selected">常見問題</option>
												<?php else: ?>
												<option value="7">常見問題</option><?php endif; ?>
												<?php if($selectedtype == 8): ?><option value="8" selected="selected">遊學優勢</option>
												<?php else: ?>
												<option value="8">遊學優勢</option><?php endif; ?>
												<?php if($selectedtype == 9): ?><option value="9" selected="selected">留學案例</option>
												<?php else: ?>
												<option value="9">留學案例</option><?php endif; ?>
												<?php if($selectedtype == 10): ?><option value="10" selected="selected">學生之聲</option>
												<?php else: ?>
												<option value="10">學生之聲</option><?php endif; ?>
											</select>
										</div>
										<div class="pagination"><?php echo ($page); ?></div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php if(is_array($list)): foreach($list as $key=>$item): ?><tr>
									<td><input type="checkbox" name='checkboxscut'
										id='<?php echo ($item[breakingnewsid]); ?>' /></td>
									<td
										style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[breakingnewsname]); ?></td>
									<td
										style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[breakingnewstype]); ?></td>
									<td
										style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[breakingnewsreleasedate]); ?></td>
									<td
										style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[breakingnewsmaincontent]); ?></td>
									<td
										style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo ($item[breakingnewspageview]); ?></td>
									<td><a
										href="<?php echo U('BreakingNews/editBreakingNews','breakingnewsid=' . $item[breakingnewsid]);?>"
										title="Edit" target="_blank"><img
											src="/PFP/Public/resources/images/icons/pencil.png" alt="编辑" /></a>
										<a
										href="<?php echo U('BreakingNews/allBreakingNews','delete=' . $item[breakingnewsid]);?>"
										title="Delete"><img
											src="/PFP/Public/resources/images/icons/cross.png"
											onclick="javascript:return confirm('Do Delete?');" alt="删除" /></a></td>
								</tr><?php endforeach; endif; ?>

							</tbody>
						</table>
					</div>
					<!-- End #tab1 -->
					<div class="tab-content" id="tab2">
						<form action="<?php echo U('BreakingNews/addBreakingNews');?>" enctype="multipart/form-data" method="post">
							<fieldset>
								<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>ContentTitle</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="breakingNewsName" /> <br />
								</p>
								<p>
									<label>ContentType</label><select name="breakingNewsType"
										class="small-input">
										<option value="1" selected="selected">新聞</option>
										<option value="2">留學考試區</option>
										<option value="3">世界排名一覽</option>
										<option value="4">留學區域資料</option>
										<option value="5">申請步驟</option>
										<option value="6">項目費用明細</option>
										<option value="7">常見問題</option>
										<option value="8">遊學優勢</option>
										<option value="9">留學案例</option>
										<option value="10">學生之聲</option>
									</select> <br />
								</p>
								<p>
									<label>ContentAbstract</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="breakingNewsMainContent" /> <br />
								</p>
								<p>
									<label>Picture (學生之聲)</label> <input
										class="text-input medium-input datepicker" type="file"
										id="medium-input" name="breakingNewsURL" /> <br />
								</p>
								<p>
									<label>ContentContent</label>
									<div style='height: 600px'><?php echo ($editorHtml); ?></div>
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
			window.location = "<?php echo U('BreakingNews/allBreakingNews','deleteMulti=-1');?>"
					+ "," + value.toString();
		}
	}

	function selectedTypeChanged(value) {
		window.location = "<?php echo U('BreakingNews/allBreakingNews');?>"
				+ "?selectedType=" + value;
	}
</script>