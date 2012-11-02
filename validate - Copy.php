<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Go</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="themes/derp.min.css" />
	<link rel="stylesheet" 		href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-			1.2.0.min.css" 	/>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-			1.2.0.min.js"></script>
	<script src="jquery.js"></script>



</head> 
<body> 

	<div data-role="page" id="whale">

	<div data-role="header" data-position="fixed">
		<h1>Validating</h1>
	</div><!-- /header -->

	<div data-role="content">	

	<?php

	$myusername=$_POST['username']; 
	$mypassword=$_POST['password']; 

	$mypassword = "test";
	$myusername = "test';


	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	[Parse setApplicationId:@"zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4"
              clientKey:@"35yXc1m4iuW1ekz8pGh14mFk2pKJAlCV1PcqEwIA"];

	Parse.User.logIn($myusername, $mypassword, {
		success: function(user) {
			alert("Success");
		},
		error: function(user, error) {
			alert("Failed");
		}
	}
?>

	</div><!-- /content -->



	<div data-role="footer" data-position="fixed">
		<h1>Map'n'Go</h1>
	</div><!-- /footer -->
	</div><!-- /page -->

</body>
</html>