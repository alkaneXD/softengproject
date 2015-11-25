<!DOCTYPE html>
<html lang = 'en'>

<head>
	<meta charset = 'utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href='css/login.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.min.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.css'>
	<style>
            header{
                margin:10%;
            }
            header p{
                text-align: center;
            }
            p{
				text-align: center;
                font-size:10px;
            }
        </style>
</head>

<body>
			<img src='images/sapangmaragul.png' class='bg img-responsive nohighlight' draggable='false' galleryimg="no">
            <div class="container">	
			
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="images/adminlogo.png" class="img-responsive nohighlight" draggable="false" galleryimg="no"/>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" class="form-signin form-horizontal" method="post" action="home.php">
                                    <fieldset>
                                        <label class="panel-login">
										<br></br>
										<div class="login_result error text-center">
										<?php session_start();
 if(ISSET($_SESSION["newmember"])){
	header("Location: adminpanel.php");
	exit();
}
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$username = $_POST["username"];
			$password = $_POST["password"];
				if($username == "admin" && $password == "sapangmaragul"){
					$_SESSION["newmember"] = $username;
					header("Location: adminpanel.php");
					}
					else{
					echo "Couldn't sign in, Incorrect username or password.";
				}
			}?></div>
                                        </label>
                                        <input class="form-control" placeholder="Username" id="username" type="text" name="username" required>
                                        <input class="form-control" placeholder="Password" id="password" type="password" name="password" required>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login »">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
<!-- jQuery library -->
	<script src = 'dist/css/jquery-1.11.2.min.js'></script>
<!-- Latest compiled JavaScript -->
	<script src = 'dist/js/bootstrap.min.js'></script>
	
</html>