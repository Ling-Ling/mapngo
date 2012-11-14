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
<link rel="stylesheet" href="jquery.mobile.structure-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>
	
</head> 

<body> 
	<div data-role="page" id="description">

	<div data-role="header" data-position="fixed" data-tap-toggle="false">
		<a href="events.php" data-role="button" data-inline="true" data-icon="arrow-l" data-rel="back">Back</a>
		<h1>CS Career Fair(Comiket)</h1>
		<a href="logout.php" class="ui-btn-right" data-role="button" data-inline-"true" data-them="a" name="logoutButton" id="logoutButton">Logout</a>
		
	</div><!-- /header -->

	<div data-role="content">
	<?php

	$host="mysql-user-master.stanford.edu"; 
	$username="ccs147defade"; 
	$password="chietiwe"; 
	$db_name="c_cs147_defade"; 
	$tbl_name="events";


	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$event=$_GET['event'];

	$query="SELECT * FROM $tbl_name WHERE name='$event'";
	$result=mysql_query($query);

	$count=mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);


	if($count==1){	
	}
	else {
		echo "No such thing found.";
	}
	?>
    	<div class="ui-grid-a">
			<div class="ui-block-a"><a href="" data-role="button" class="ui-btn-active ui-state-persist">Description</a></div>
			<?php
			echo "<div class='ui-block-b'><a href='jobs.php?event=".$row["name"]."' data-role='button'>Jobs</a></div>";	   
			?>
		</div>
		<?php
		    $query = "SELECT * FROM favorites WHERE name='$event'"; 
		    $result = mysql_query($query); 
		    $count = mysql_num_rows($result); 
		    echo "<img src='".$row["image"]."' alignt='left'>";
		    if($count==1) {
		       echo "<form action='remove.php' method='post'>";
		       echo "<input type='hidden' name='event' value='".$event."' />";
		       echo "<input type='submit' data-icon='delete' data-mini='true' data-inline='true' value='Remove from favorites'/>";
               echo "</form>";
		    }
		    else{
		       echo "<form action='add.php' method='post'>";
		       echo "<input type='hidden' name='event' value='".$event."' />";
		       echo "<input type='submit' data-mini='true' data-inline='true' value='Add to favorites'/>";
               echo "</form>";
		    }
		    
		    echo "<dl title='Description'>";
		    echo "<dt><strong>Description</strong></dt>";
		    echo "<p>";
		    echo "<dd>".$row["description"]."</dd></dl>";
	     ?>

		</div><!-- /content -->
     

	<div data-role="footer" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar">
			<ul>
				<li><a href="map.php">Map</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="favorites.php">Favorites</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>