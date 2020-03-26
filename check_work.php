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
                

				<div id="main" style="margin-top:20px; margin-left:50px;">
                        <?php
                                $c=count($_POST);
                         ?>       

                         <table cellpadding="20" border="1">
                             <tr> <th colspan="2"> Your Total </th> </tr>

                             <?php
                                $sum=0;
                                    foreach($_POST as $k=>$v)
                                    {
                                        $sum=$sum+$v;
                                      echo " <tr> <td> $k </td><td> $v </td> </tr>";
                                    }

                                  echo " <tr> <th> Total </th> <th> $sum </th> </tr> ";

                            ?>

                         </table>




				
				</div>
				
			</div>

			<?php require("footer.html"); ?>
		
		</div>
		
</body>
			
			