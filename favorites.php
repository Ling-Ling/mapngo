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
	<title>My Favorites</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="themes/derp.min.css" />
<link rel="stylesheet" href="jquery.mobile.structure-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>

</head> 

<body> 
	<div data-role="page" id="favorites">
<script type="text/javascript">
		//Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
		</script>
	<div data-role="header" data-position="fixed" data-tap-toggle="false">
		<a href="index.html" data-role="button" data-inline="true" data-icon="home">Home</a>
		<h1>CS Career Fair(Comiket)</h1>
		<a href="logout.php" class="ui-btn-right" data-role="button" data-inline-"true" data-them="a" name="logoutButton" id="logoutButton">Logout</a>

	</div><!-- /header -->

	<div data-role="content">	
	
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
				<li><a href="map.php">Map</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="favorites.php" class="ui-btn-active ui-state-persist">Favorites</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</div><!-- /page -->
</body>
<head>
</head>
</html>