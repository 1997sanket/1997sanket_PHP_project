<?php 
// print_r($_REQUEST);   we "NEED" to use $_REQUEST, because when we send data through hyperlink, it gets stored in $_REQUEST array, nothing else.
	session_start();            //continuing my session from check_login page.
	if($_REQUEST['key']===session_id())    //comparing if session_id() of a particular user is same as key inside $_REQUEST array.
		session_destroy();
		//echo "session destroyed";
?>



<!DOCTYPE html>
<html>
<head>
		<title> My website </title>
		<link rel="stylesheet" href="style.css" style="text/css" />
</head>

<body>
		<div id="container">
            <?php require("header.html"); ?>
            

			<div id="content">
                <?php require("nav.html"); ?>
                

				<div id="main">
						<h2> Thank you for visiting us.  </h2>

						<?php echo session_id(); 
								echo "session destroyed <br>"; 
								echo "Session array is empty -->";
								print_r($_SESSION);
						?>
						
				</div>
				
			</div>

			<?php require("footer.html"); ?>
		
		</div>
		
</body>