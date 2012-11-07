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

<body onLoad="if (location.href.indexOf('reload')==-1) location.replace(location.href+'?reload')">
	<div data-role="page" id="whale">
	<div data-role="header" data-position="fixed">
		<a href="#" data-role="button" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Validating</h1>
	</div><!-- /header -->

	<div data-role="content">	

	<script type="text/javascript">

	var myusername= "<?php echo $_POST["username"]?>";
	var mypassword= "<?php echo $_POST["password"]?>"; 

	Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");


	Parse.User.logIn(myusername, mypassword, {
		success: function(user) {
			alert("Success");
			localStorage.setItem('username', myusername);
			window.location = "index.html";

		},
		error: function(user, error) {
			alert("Error: " + error.code + " " + error.message);
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
