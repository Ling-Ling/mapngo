<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Go</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="themes/derp.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>
	
</head> 

<body> 
	<div data-role="page" id="allevents">

	<div data-role="header" data-position="fixed" data-tap-toggle="false">
		<a href="index.html" data-role="button" data-inline="true" data-icon="arrow-l">Back</a>
		<h1>CS Career Fair(Comiket)</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<script type="text/javascript">
		Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
		</script>

		<div class="ui-grid-a">
			<div class="ui-block-a"><a href="" data-role="button" class="ui-btn-active ui-state-persist">All Events</a></div>
			<div class="ui-block-b"><a href="favorites.php" data-role="button">My Favorites</a></div>	   
		</div>
    <p>
		<ul data-role="listview" data-inset="true" data-filter="true">
		<?php
			
			$host="mysql-user-master.stanford.edu"; 
			$username="ccs147defade"; 
			$password="chietiwe"; 
			$db_name="c_cs147_defade"; 
			$tbl_name="events";


			mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
			mysql_select_db("$db_name")or die("cannot select DB");

			$query = "SELECT * FROM events";
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
				<li><a href="test.php" class="ui-btn-active ui-state-persist">Events</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</div><!-- /page -->
</body>
</html>
