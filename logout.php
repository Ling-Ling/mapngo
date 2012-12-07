<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Go</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="themes/derp.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-	1.2.0.min.css"/>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-	1.2.0.min.js"></script>

	<script src="jquery.mobile-1.2.0.js"></script>
	<script src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>
</head> 

<body> 
	<div data-role="page" id="whale">

	<div data-role="header" data-position="fixed">
		<h1>User Logout</h1>
	</div><!-- /header -->

	<div data-role="content">	
	</div><!-- /content -->
	<center>You have been successfully logged out.
	</center> 

<script type="text/javascript">
	Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
	Parse.User.logOut();
	var currentUser = Parse.User.current();  // this will now be null
</script>

	<div data-role="buttoncontain" text-align: "center" data-inline="true"> 
		<center><a href="login.php" data-role="button" name="reset" data-icon="home" >Return to Login.</a></center>

	<script type="text/javascript">
		alert("You have been successfully logged out.");
		window.location.href="login.php";
	</script>
	</div>

	<div data-role="footer" data-position="fixed">
		<h1>Map'n'Go</h1>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>