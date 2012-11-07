<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Go</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="themes/derp.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>
	
</head> 




<body>
<script type="text/javascript">setTimeout(function() {
  window.location.href = "favorites.php";
}, 5000);</script>

	<div data-role="page" id="description">

	<div data-role="header" data-position="fixed">
		<a href="favorites.php" data-role="button" data-icon="arrow-l">Back</a>
		<h1>CS Career Fair(Comiket)</h1>
		<a class="ui-btn-right" href="logout.php" data-inline="true" data-theme="a" data-role="button" name="logoutButton" id="logoutButton" data-icon="gear" visibility='hidden'>Logout</a>
		<a class="ui-btn-right" href="login.php" data-inline="true" data-theme="a" data-role="button" name="loginButton" id="loginButton" data-icon="gear" visibility='hidden'>Login</a>
	</div><!-- /header -->
	<script type="text/javascript">
		Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
		var currentUser = Parse.User.current();
		if (currentUser) {
			document.getElementById("loginButton").style.visibility='hidden';
			document.getElementById("logoutButton").style.visibility='visible';
		} else {
			document.getElementById("loginButton").style.visibility='visible';
			document.getElementById("logoutButton").style.visibility='hidden';
		}
	</script>


	
	<div data-role="content">
	<?php

	$host="mysql-user-master.stanford.edu"; 
	$username="ccs147defade"; 
	$password="chietiwe"; 
	$db_name="c_cs147_defade"; 
	$tbl_name="events";


	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$event=$_POST['event'];
	    $query = "delete from favorites WHERE name ='$event'";
    $result=mysql_query($query);
    if(!result){
    echo "shit blew up";	
    }
    else{
    echo "Successfully removed from favorites. You will be redirected shortly."; 	
    }
	?>

		
	

		</div><!-- /content -->
     

	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
			<ul>
				<li><a href="map.html">Map</a></li>
				<li><a href="test.php" class="ui-btn-active ui-state-persist">Events</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>