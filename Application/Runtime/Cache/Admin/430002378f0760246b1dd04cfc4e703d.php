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
<body style="background-image: none">
	<!-- Wrapper for the radial gradient background -->
	<div id="main-content" style="width: 75%; margin: 0 auto;">
		<div class="content-box">
			<!-- Start Content Box -->
			<div class="content-box-header">
				<h3>Edit Content:<?php echo ($breakingNews['breakingnewsname']); ?></h3>
				<ul class="content-box-tabs">
					<li><a href="#tab2">Edit</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- End .content-box-header -->
			<div class="content-box-content">
				<form
					action="<?php echo U('BreakingNews/editBreakingNewsSubmit','breakingnewsid=' . $breakingNews[breakingnewsid]);?>"
					method="post">
					<fieldset>
						<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						<p>
							<label>Content Title</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="breakingNewsName"
								value="<?php echo ($breakingNews['breakingnewsname']); ?>" /> <br />
						</p>
						<p>
							<label>Content Type</label> <select id="selectType"
								name="breakingNewsType" class="small-input">
								<?php if($breakingNews['breakingnewstype'] == all): ?><option value="all" selected="selected">ALL</option>
								<?php else: ?>
								<option value="all">ALL</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 1): ?><option value="1" selected="selected">新聞</option>
								<?php else: ?>
								<option value="1">新聞</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 2): ?><option value="2" selected="selected">留學考試區</option>
								<?php else: ?>
								<option value="2">留學考試區</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 3): ?><option value="3" selected="selected">世界排名一覽</option>
								<?php else: ?>
								<option value="3">世界排名一覽</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 4): ?><option value="4" selected="selected">留學區域資料</option>
								<?php else: ?>
								<option value="4">留學區域資料</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 5): ?><option value="5" selected="selected">申請步驟</option>
								<?php else: ?>
								<option value="5">申請步驟</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 6): ?><option value="6" selected="selected">項目費用明細</option>
								<?php else: ?>
								<option value="6">項目費用明細</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 7): ?><option value="7" selected="selected">常見問題</option>
								<?php else: ?>
								<option value="7">常見問題</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 8): ?><option value="8" selected="selected">遊學優勢</option>
								<?php else: ?>
								<option value="8">遊學優勢</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 9): ?><option value="9" selected="selected">留學案例</option>
								<?php else: ?>
								<option value="9">留學案例</option><?php endif; ?>
								<?php if($breakingNews['breakingnewstype'] == 10): ?><option value="10" selected="selected">學生之聲</option>
								<?php else: ?>
								<option value="10">學生之聲</option><?php endif; ?>
							</select> <br />
						</p>
						<p>
							<label>Content MainContent</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="breakingNewsMainContent"
								value="<?php echo ($breakingNews['breakingnewsmaincontent']); ?>" /> <br />
						</p>
						<p>
							<label>Picture</label> <a
								href="/PFP/Public/Download/<?php echo (substr($breakingNews[breakingnewsreleasedate],0,10)); ?>/<?php echo ($breakingNews[breakingnewsurl]); ?>"><?php echo ($breakingNews[breakingnewsurl]); ?></a>
						</p>
						<p>
							<label>Content Content</label>
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
			<!-- End .content-box-content -->
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	
</script>