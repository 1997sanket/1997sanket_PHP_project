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
				<?php include("login_form.html"); ?>
				</div>
				
			</div>

			<?php require("footer.html"); ?>
		
		</div>
		
</body>
			
			