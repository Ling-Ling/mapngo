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
	<div data-role="page" id="description">

	<div data-role="header" data-position="fixed">
		<a href="main.html" data-role="button" data-inline="true" data-icon="arrow-l" data-rel="back">Back</a>
		<h1>CS Career Fair(Comiket)</h1>
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

	$event=$_POST['event'];
	$query="SELECT * FROM $tbl_name WHERE name='$event'";
	$result=mysql_query($query);

	$count=mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);
    $image = $row["image"];
    $query = "insert into favorites (name, image) values ('$event','$image')";
    $result=mysql_query($query);
    if(!result){
    echo "shit blew up";	
    }
    else{
    echo "successfully added"; 	
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