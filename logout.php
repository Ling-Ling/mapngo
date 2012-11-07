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


<body onLoad="if (location.href.indexOf('reload')==-1) location.replace(location.href+'?reload')">
	<div data-role="page" id="whale">

	<div data-role="header" data-position="fixed">
		<a href="#" data-role="button" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>User Login</h1>
	</div><!-- /header -->

	<div data-role="content">	
	</div><!-- /content -->

<script type="text/javascript">
	Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
</script>

	<form name="loginform" action="validate.php" method="post">

		<div data-role="fieldcontain">
		<center>
	 	<label for="user"><center><b>Username</b></center></label>
		<input name="username" type="text" id="user">
		</center>
	</div>

	<div data-role="fieldcontain">
	<center>
		<label for="pass"><center><b>Password</b></center></label> 
		<input name="password" type="password" id="pass">
		</center>
	</div>

	<div data-role="buttoncontain" id="buttons">
		<center>
		<a href="#" data-inline="true" data-theme="a" data-role="button" 			name="reset" data-icon="delete" >Reset Password</a>
		<input href="javascript: submitform()"
			name="login" type="submit" value="Login" 						data-inline="true" data-theme="b" data-role="button"   					data-icon="check">
		</center>
	</div>
	</form>

	<div data-role="footer" data-position="fixed">
		<h1>Map'n'Go</h1>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>