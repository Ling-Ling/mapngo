<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Go</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="themes/derp.min.css" />
	<link rel="stylesheet" 		href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-			1.2.0.min.css" 	/>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>

</head>
<body>

<div data-role="page" id="whale">
<div data-role="header" data-position="fixed">
		<h1>Checking Email</h1>
		
	</div><!-- /header -->

	<div data-role="content">	

<script type="text/javascript">
	var myEmail= "<?php echo $_POST["email"]?>";
	Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
	Parse.User.requestPasswordReset(myEmail, {
		success: function() {
			alert("Request successful! An email has been sent to verify your identity.");
			// Password reset request was sent successfully
			window.location = "login.php";
		},
		error: function(error) {
			// Show the error message somewhere
			alert("Error: " + error.code + " " + "Invalid email address. Please try again.");
			window.location = "reset_password.php";
		}
	});
</script>
	
	</div><!-- /content -->



	<div data-role="footer" data-position="fixed">
		<h1>Map'n'Go</h1>
	</div><!-- /footer -->
	</div><!-- /page -->

</body>


</html>
