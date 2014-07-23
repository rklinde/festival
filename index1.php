<!DOCTYPE html>

<?php
	if (isset($_GET["section"])) {
		$section = $_GET["section"];
	} else {
		$section = "home";	
	}
?>


<head>
	<link rel="STYLESHEET" type="text/css" href="Styles/newstyle.css" />
	<!-- Media query for narrow browser width -->
		<link rel="stylesheet" media="only screen and (max-width: 480px)" href="Styles/mobile.css" />

		<!-- Media query for smartphones -->
		<link rel="stylesheet" media="only screen and (max-device-width: 568px)" href="Styles/mobile.css" />

		<!-- Media query for medium browser width -->
		<link rel="stylesheet" media="only screen and (min-width: 481px) and (max-width: 960px)" href="Styles/tablet.css" />

		<!-- Media query for tablets -->
		<link rel="stylesheet" media="only screen and (min-device-width : 768px) and (max-device-width : 1024px)" href="Styles/tablet.css" />

		<!-- Media query for full browser width -->
		<link rel="stylesheet" media="only screen and (min-width: 961px)" href="Styles/desktop.css" />

		<!-- Prevents smartphones from scaling pages down -->
		<meta name="viewport" content="initial-scale=1" />

</head>

<body>
	<div id="header">
		<a href="http://gkids.com"><img src="https://s3.amazonaws.com/nyicff_images/logo_long.png" /></a>
	</div>
	<div id="nav">
		<a href="http://gkids.com">FESTIVAL HOME</a> <a href="http://gkidsfilms.com" target="_blank">GKIDS FILMS</a>
	</div>
	<div id="mainWrap">

	<div id="leftWrap">
		<div class="leftmenu">
			<!--<a href="index1.html"><p class="leftmenu">FESTIVAL</p></a>
			<a href="leftmenu.html"><p class="leftmenu">TICKETS</p></a>
			<a href="workshop.html"><p class="leftmenu">FILM CAMPS</p></a>
			<a href="membership.html"><p class="leftmenu">MEMBERSHIP</p></a>
			<a href="sponsors.html"><p class="leftmenu">SPONSORS</p></a>
			<a href="jury.html"><p class="leftmenu">JURY</p></a>
			<a href="submit.html"><p class="leftmenu">SUBMIT</p></a>
			<a href="support.html"><p class="leftmenu">SUPPORT</p></a>
			<a href="http://gkids.com/benefit"><p class="leftmenu">BENEFIT</p></a>
			<a href="about.html"><p class="leftmenu">ABOUT</p></a>-->
			<?php include('leftmenu.html') ?>
		</div>
		<div class="content">
			<!-- EMAIL SIGNUP //-->
				<span style="color:#5a579c;font-size:18px;">SIGN UP</span>
				<FORM METHOD="POST" ACTION="http://www.gkids.com/cgi-bin/mailto">
					<input type="hidden" name="recipient" value="events@gkids.com" />
					<input type="hidden" name="subject" value="EVENTS" />
					<input type="hidden" name="redirect" value="http://gkids.com/?section=thankyou" />
					<input type="hidden" name="email" value="from gkids form @ gkids.com" />
					<input type="hidden" name="sort" value="order:useremail" />
				<p style="color:333333; font-size:10px;">
					Enter your email address for the latest NYICFF news!
				<input type="TEXT" name="name" size=20 maxlength=30 />
				<input type="SUBMIT" value="Submit" name="SUBMIT2" />
				</form>
				

				<span style="color:#5a579c;font-size:18px;">SOCIALIZE:</span>
				<a href="http://www.facebook.com/nyicff" target="_blank"><img src="https://s3.amazonaws.com/gkids_images/f_icon.gif" style="height:18px; margin-left:2px; margin-top:5px;" /></a>
				<a href="http://www.twitter.com/nyicff" target="_blank"><img src="https://s3.amazonaws.com/gkids_images/t_icon.gif" style="height:18px; margin-top:5px;"/></a>
			</span>
		</div>
	</div><!--END OF LEFT COLUMN -->

	<div id="rightWrap">
		
	<!--HOMEPAGE -->
		<div id="index">
			<div class="indexL">
				<?php if($section = "home"){
				php include([img src="https://s3.amazonaws.com/nyicff_web2014/submit_index1.png" style="border-radius:7px;"]); 
				elseif ($section = "sponsorship" || "about" || "submit") {
					# code...
				}
				?>
				<img src="https://s3.amazonaws.com/nyicff_web2014/submit_index1.png" style="border-radius:7px;" />
			</div>
			<div class="indexR">
				<img src="https://s3.amazonaws.com/nyicff_web2014/member_right.png" style="border-radius:7px;" />
			</div>
		</div>
		<div class="clear"></div>
		<!--END OF INDEX IMAGES-->
		<div class="content">
		</div>
	<!--END OF HOMEPAGE CONTENT -->

	</div><!--END OF RIGHT COLUMN-->

	<div id="footer"></div>
</div><!--END OF MAIN CONTENT -->
</body>

</html>