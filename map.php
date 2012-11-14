<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Map'n'Go</title>
		<title>Page Title</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 


	     <link rel="stylesheet" href="themes/derp.min.css" />
<link rel="stylesheet" href="jquery.mobile.structure-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>
</head>
<body>
<div data-role="header" data-position="fixed" data-tap-toggle="false">
<?php
			
			$host="mysql-user-master.stanford.edu"; 
			$username="ccs147defade"; 
			$password="chietiwe"; 
			$db_name="c_cs147_defade"; 
			$tbl_name="events";


			mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
			mysql_select_db("$db_name")or die("cannot select DB");
			?>
			
<style type="text/css">
		#map {
			position: relative;
			margin:0;
			padding:0;
			width:1082px;
			height:834px;
			background:url(careermap.png) top left no-repeat #fff;
			font-family:arial, helvetica, sans-serif;
			font-size:8pt;
		}
		
		#map li {
			margin:0;
			padding:0;
			list-style:none;
		}
		
		#map li a {
			position:absolute;
			display:block;
			/*
			   Specifying a background image
			   (a 1px by 1px transparent gif)
			   fixes a bug in older versions of
			   IE that causeses the block to not
			   render at its full dimensions.
			*/
   			background:url(blank.png);
   			text-decoration:none;
			color:#000;
		}
		
		#map li a span { display:none; }
		
		<?php
	     	$query = "SELECT * FROM events";
		 	$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				echo "#map a.".$row["name"]."{";
				echo "top:".$row["top"].";";
				echo "left:".$row["left"].";";
				echo "width:".$row["width"].";";
				echo "height:".$row["height"].";";
				echo "}";
			} 
		?>
			</style>

		<a href="index.html" data-role="button" data-inline="true" data-icon="home">Home</a>
		<h1>CS Career Fair(Comiket)</h1>
		<a href="logout.php" class="ui-btn-right" data-role="button" data-inline-"true" data-them="a" name="logoutButton" id="logoutButton">Logout</a>

	</div><!-- /header -->

		<?php
	     	$query = "SELECT * FROM events";
		 	$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				echo "<div data-role='popup' id='".$row["name"]."'>";
				echo "<p>".$row["oneline"]."</p>";
				echo "<p><a href='desc.php?event=".$row["name"]."'>Learn More</a></p>";
				echo "</div>";
			} 
		?>
<div data-role="content">

<ul id="map">
<?php
	     	$query = "SELECT * FROM events";
		 	$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				echo "<li><a class='".$row["name"]."' href='#".$row["name"]."' data-rel='popup'></a></li>";
			} 
		?>
	</ul>
</div>
	<div data-role="footer" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar">
			<ul>
				<li><a href="map.html" class="ui-btn-active ui-state-persist">Map</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="favorites.php">Favorites</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</body>
</html>
