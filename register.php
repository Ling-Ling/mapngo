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
<body>

<div data-role="page" id="whale">
<div data-role="header" data-position="fixed">
		<h1>Registering</h1>
	</div><!-- /header -->

	<div data-role="content">	

<?php

        if ($_POST["password"] == $_POST["password2"]) {
?>
             <script type="text/javascript">
// Save the username in local storage. That way you
// can access it later even if the user closes the app.
        
             localStorage.setItem('username', '<?=$_POST["username"]?>');
             Parse.initialize("zTwaq4vFOY1fjkbQT3SIL1bydVt8ZJMHG1nmzBV4", "yfuAy4J8hcPcLpTFiwXdjEcSg1kvkMzikKRUQCsI");
             var user = new Parse.User();
             user.set("username", "<?php echo $_POST["username"]?>");
             user.set("password", "<?php echo $_POST["password"]?>");
             user.signUp(null, {
                success: function(user) {       
           alert("  <?php
                        echo "".$_POST["username"].", Welcome to MapnGo! You are now logged in.";
             ?>"); 
                }, 
                error: function(user, error) {
                        alert("Error: " + error.code + " " + error.message);
                }
        });
        </script> 
        <?php
        } else {
                echo "Passwords don't match";
        }
        ?>

	
	</div><!-- /content -->



	<div data-role="footer" data-position="fixed">
		<h1>Map'n'Go</h1>
	</div><!-- /footer -->
	</div><!-- /page -->

</body>


</html>
