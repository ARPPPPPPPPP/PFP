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
				<h3>SignUp:<?php echo ($signUp['signupname']); ?></h3>
				<ul class="content-box-tabs">
					<li><a href="#tab2">Edit</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- End .content-box-header -->
			<div class="content-box-content">
				<form
					action="<?php echo U('SignUp/editSignUpSubmit','signupid=' . $signUp[signupid]);?>"
					method="post">
					<fieldset>
						<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						<p>
							<label>SignUpName</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupname"
								value="<?php echo ($signUp['signupname']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpSex</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupsex"
								value="<?php echo ($signUp['signupsex']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpBirthDay</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupbirthday"
								value="<?php echo ($signUp['signupbirthday']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpSchool</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupschool"
								value="<?php echo ($signUp['signupschool']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpMajor</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupmajor"
								value="<?php echo ($signUp['signupmajor']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpGradeYear</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupgradeyear"
								value="<?php echo ($signUp['signupgradeyear']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpCellPhone</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupcellphone"
								value="<?php echo ($signUp['signupcellphone']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpMail</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupmail"
								value="<?php echo ($signUp['signupmail']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpWeiXing</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupweixing"
								value="<?php echo ($signUp['signupweixing']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpReferee</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupreferee"
								value="<?php echo ($signUp['signupreferee']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpIDCard</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupidcard"
								value="<?php echo ($signUp['signupidcard']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpFamilyContact</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupfamilycontact"
								value="<?php echo ($signUp['signupfamilycontact']); ?>" /> <br />
						</p>
						<p>
							<label>SignUpExperience</label>
							<textarea class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupexperience"
								style="height: 200px; overflow: auto;"><?php echo ($signUp['signupexperience']); ?></textarea>
							<br />
						</p>
						<p>
							<label>SignUpAward</label>
							<textarea class="text-input medium-input datepicker" type="text"
								id="medium-input" name="signupaward"
								style="height: 200px; overflow: auto;"><?php echo ($signUp['signupaward']); ?></textarea>
							<br />
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