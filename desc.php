<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Whales</title> 
	
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

	<div data-role="header">
		<h1>NO TEST, YOU ARE THE DEMONS.</h1>
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
	
	// echo $row["description"];
}
else {
	echo "No such thing found.";
}

?>
    	<div class="ui-grid-a">
			<div class="ui-block-a"><a href="" data-role="button" class="ui-btn-active ui-state-persist">Description</a></div>
			<div class="ui-block-b"><a href="applejobs.html" data-role="button">Job openings</a></div>	   
		</div>
		<?php
		    echo "<img src='".$row["image"]."' alignt='left'>";
		    echo "<dl title='Description'>";
		    echo "<dt><strong>Description</strong></dt>";
		    echo "<p>";
		    echo "<dd>".$row["description"]."</dd></dl>";
	?>

	
	     	</div><!-- /content -->

	<div data-role="footer">
		<h4>And then test was a troll.</h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>