<?
//Set no caching
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Go</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="themes/derp.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<script src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>	

</head> 

<body>
	<div data-role="page" id="allevents">

	<div data-role="header" data-position="fixed" data-tap-toggle="false">
		<a href="index.html" data-role="button"  data-icon="arrow-l">Home</a>
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
		<div class="ui-grid-a">
			<div class="ui-block-a"><a href="test.php" data-role="button">All Events</a></div>
			<div class="ui-block-b"><a href="" data-role="button" class="ui-btn-active ui-state-persist">My Favorites</a></div>	   
		</div>
    <p>
		<ul data-role="listview" data-inset="true" data-filter="true">
		<?php
			$host="mysql-user-master.stanford.edu"; 
			$username="ccs147defade"; 
			$password="chietiwe"; 
			$db_name="c_cs147_defade"; 
			$tbl_name="favorites";


			$link = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
			mysql_select_db("$db_name")or die("cannot select DB");
			$query = "SELECT * FROM favorites";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				echo "<li><a href='desc.php?event=".$row["name"]."'>";
                echo "<img src='".$row["image"]."'>";
   				echo "<h1>".$row["name"]."</h1></a></li>";
			} 
			?>
</ul>


	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar">
			<ul>
				<li><a href="map.html">Map</a></li>
				<li><a href="events.php" class="ui-btn-active ui-state-persist">Events</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</div><!-- /page -->
</body>
<head>
</head>
</html>