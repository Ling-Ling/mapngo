<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Go</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="themes/derp.min.css" />
	<link rel="stylesheet" 	href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-	1.2.0.min.css"/>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-	1.2.0.min.js"></script>

	<script src="jquery.mobile-1.2.0.js"></script>
<script src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>
</head> 

<body> 
	<div data-role="page" id="whale">

	<div data-role="header" data-position="fixed">
		<h1>Reset Password</h1>
		<a href="login.php" data-role="button" data-inline="true" data-icon="arrow-l">Back</a>
	</div><!-- /header -->

	<div data-role="content">	
	</div><!-- /content -->

<script type="text/javascript">
	Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
</script>

	<form name="resetform" action="check_email.php" method="post">

	<div data-role="fieldcontain">
	<center>
		<label for="pass"><center><b>Please enter the email associated with your account:</b></center></label> 
		<input name="emailInput" type="email" id="emailInput">
		</center>
	</div>

	<div data-role="buttoncontain" id="buttons">
		<center>
		<input href="javascript: submitform()"
			name="submitButton" type="submit" value="Submit" data-inline="true" data-theme="b" data-role="button" data-icon="check">
		</center>
	</div>
	</form>

	<div data-role="footer" data-position="fixed">
		<h1>Map'n'Go</h1>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>