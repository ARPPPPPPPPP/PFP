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
				<h3>HomePicture :<?php echo ($homePicture['homepicturename']); ?></h3>
				<ul class="content-box-tabs">
					<li><a href="#tab2">Edit </a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- End .content-box-header -->
			<div class="content-box-content">
				<form
					action="<?php echo U('HomePicture/editHomePictureSubmit','homepictureid=' . $homePicture[homepictureid]);?>"
					enctype="multipart/form-data"
					method="post">
					<fieldset>
						<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						<p>
							<label>HomePicture Name</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="homePictureName"
								value="<?php echo ($homePicture[homepicturename]); ?>" /> <br />
						</p>
						<p>
							<label>HomePicture URL</label> <a
								href="/PFP/Public/Download/<?php echo (substr($homePicture[homepicturereleasedate],0,10)); ?>/<?php echo ($homePicture[homepicturecontenturl]); ?>"><?php echo ($homePicture[homepicturecontenturl]); ?></a>
						</p>
						<p>
							<label>Update</label> <input
								class="text-input medium-input datepicker" type="file"
								id="medium-input" name="homePictureContentURL"/> <br />
						</p>
						<p>
							<input class="button" type="submit" value="Submit" />
						</p>
					</fieldset>
					<div class="clear"></div>
					<!-- End .clear -->
				</form>
				<!-- End #tab2 -->
			</div>
			<!-- End .content-box-content -->
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	
</script>