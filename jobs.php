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
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.7.min.js"></script>
	
</head> 

<body> 
	<div data-role="page" id="description">

	<div data-role="header" data-position="fixed">
		<a href="test.php" data-role="button" data-inline="true" data-icon="arrow-l">Back</a>
		<h1>CS Career Fair(Comiket)</h1>
	</div><!-- /header -->

	<div data-role="content">
	<?php

	$host="mysql-user-master.stanford.edu"; 
	$username="ccs147defade"; 
	$password="chietiwe"; 
	$db_name="c_cs147_defade"; 
	$tbl_name="jobs";


	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$event=$_GET['event'];
	$query="SELECT * FROM $tbl_name WHERE name='$event' AND fulltime='1'";
	$result=mysql_query($query);
	
	?>
    	<div class="ui-grid-a">
    	    <?php
			echo "<div class='ui-block-b'><a href='desc.php?event=".$event."' data-role='button'>Description</a></div>";	   
			?>
			<div class="ui-block-b"><a href="" data-role="button" class="ui-btn-active ui-state-persist">Job openings</a></div>	   
		</div>
		<div data-role="collapsible">
   			<h3>Full-time Openings</h3>
   			<ul data-role="listview">
   			<?php
   			while ($row = mysql_fetch_assoc($result)) {
				echo "<li>".$row["job"]."</li>";
   				}
			?>
			</ul>
		</div>
		<?php
		    $query = "SELECT * FROM $tbl_name WHERE name='$event' AND fulltime='0'";
		    $result = mysql_query($query);
		    $count=mysql_num_rows($result);
		    if($count > 0){
		    echo "<div data-role='collapsible'>";
		    echo "<h3>Internship Openings</h3>";
		    echo "<ul data-role='listview'>";
		    while($row = mysql_fetch_assoc($result)){
		         echo "<li>".$row["job"]."</li>";	
		       }	
		    echo "</ul></div>";
		    	
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