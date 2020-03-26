
<?php
                       $servername = "localhost";
						$username="root";
						$password="";
                        $db="my_website";
                        //print_r($_COOKIE);
                        

						$con= new mysqli($servername, $username, $password, $db);

						if($con->connect_error)
						{
							die("COnnection failed : " .$con->connect_error);
                        }
                                    $i=$_POST["id"];
                                    $user_entered_pass=$_POST["pass"];

                                    $sql="select firstname, lastname, password from new_reg where email = '$i';";

                                    $request=$con->query($sql);      //creates a object called mysqli_request and returns its reference 

                                    if($request->num_rows>0)            //num_rows method of class msqli_request
                                    {
                                        while ($row= $request->fetch_assoc())
                                        {
                                            
                                           $f=$row["firstname"];
                                           $l=$row["lastname"];
                                           $original_pass=$row["password"];
                                          if($user_entered_pass===$original_pass) //if pass matches with database then session id is created.
                                         {
                                             session_start();
                                             $ses_id= session_id();
                                         }
                                    }
                                }

                               

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
                <?php require("nav_with_shop.html"); ?>
                

				<div id="main">

                    <?php   
                                
                               
                               
                               
                                if($request->num_rows>0)            //num_rows method of class msqli_request
                                {
                                    
                                
                                    if (isset($f))
                                    {
                                        
                                    
                                      
                                      if($user_entered_pass===$original_pass)  //if password matches show message.
                                       {     
                                            echo "Your session id is -->";
                                            echo "$ses_id";
                                             echo "<br> <br>";
                                             echo "<h2>You have successfully logged in Mr. $f $l</h2>";
                                             echo "<br>";
                                       
                                             echo "<h3>Feel free to SHOP, check out the navigation bar and ENJOY :) </h3>";
                                             echo "<br>";
                                             echo "<a href='logout.php?key=" .$ses_id. "' target='_self'> <h3> LOGOUT </h3> </a>"; //this line is important, as we are sending session_id() of a particular user thru hyperlink so that, that particular user gets logged out and no one else
                                        }
                                     else 
                                        {
                                            //echo "<h3>Wrong password</h3>";

                                            header("Location:error_in_login.php");
                                        }
                                    }
                                }



                                      
                                      
                                

                               

                    ?>

                        
                            


                        
				
				</div>
				
			</div>

			<?php require("footer.html"); ?>
		
		</div>
		
</body>
</html>