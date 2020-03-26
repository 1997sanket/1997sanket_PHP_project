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
					<table border="" cellspacing="0" height="100" width="100" cellpadding="50">
						 <?php 
						 
						 $r=$_POST["row"];

						 $c=$_POST["col"];

						 for($i=1; $i<=$r; $i++)
						 {
							 echo "<tr>";
								for($j=1; $j<=$c; $j++)
								{
									echo "<td> </td>";
								}

								echo "</tr>";


						 }
		
		
    
    					?>
   				 </table>                
				
				</div>
				
			</div>
			

			<?php require("footer.html"); ?>
		
		</div>
		
</body>