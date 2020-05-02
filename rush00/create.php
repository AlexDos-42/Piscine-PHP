<?php
include "createutil.php";

function post($key) {
	return isset($_POST[$key]) ? $_POST[$key] : null;
}

session_start();

if (post('submit') == "OK") {
	if (!($status = create(post('login'), post('passwd')))) {
            header('Location: login.php');
	}
}
else
	$status = "rien";

?>


<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--        Bootstrap       -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--        End Bootstrap       -->
        
        <link href="css.css" rel="stylesheet">
        
        <title>Les Frères Riapailles</title>
        
        <style>
            body {
                background: url('img/triangle.png') repeat ;
                background-size: 400px;
            }
            div.link {
                background-color: #333;
                color: white;
                padding: 10px 10px 5px 10px;
                text-align: center;
                width: 230px;
            }
            div.liens a{
                margin: auto;
            }
            div.liens a:hover{
                position: relative;
                top: 2px;
                left: 2px;
            }
            
            div.pic {
                padding: 0;
                margin: auto;
            }
            div.pic img.carre {
                width: 180px;
                height: 180px;
                border: solid 3px #333;
            }
            div.picdiv {
                margin: auto;
            }
            
            div.log {
                background-color: rgba(9, 65, 122);
                margin: auto;
                width: 90%;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 10px;
                margin-bottom: 40px;
                color: white;
            }
            
            @media {
                
            }
        </style>
    </head>
    <body>
        <nav class="top nav navbar-fixed-top navbar-inverse">
                <div class="container">
                    <div class="login navbar-right">
                            <a href="login.html">Connectez-vous</a>
                    </div>
                    <div class="navbar-header row">
                        <a class="navbar-brand offset-sm-2" href="index.php">
                            <h1>
                                Les freres
                                <hr style="height:2px;border-width:0;background-color:white;padding:0;margin:0;margin-bottom: 4px">
                                Ripailles
                            </h1>
                        </a>
                        </div>
                </div>
        </nav>
                    <br><br><br><br><br>
         <div class="log container">
            <h3>Create a new account</h3>
            <hr>
             <div class="row">
             <form action="create.php" method="POST" class="col-sm-8 offset-sm-2">
                 <p style="color:red;"><?php
            if (post('submit') == "OK" && $status !== null)
	           echo "$status\n";
                ?></p>
                  <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" name="login" class="form-control" placeholder="Enter login" id="login" value=""/>
                  </div>
                  <div class="form-group">
                    <label for="passwd">Password:</label>
                    <input type="password" name="passwd" class="form-control" placeholder="Enter password" id="passwd" value=""/>
                  </div>
                  <input type="submit" name="submit" value="OK" class="btn btn-primary my-2" style="float: right">
                </form> 
                </div>
             <br><hr>
             <a href="index.html">
                <button type="button" class="btn btn-outline-primary">Return</button>
             </a>
        </div>
        <footer>
                <div class="nav justify-content-center fixed-bottom">
                    <div class="Contact">
                        <a href="Contact.html">Contact</a>
                    </div>
                </div>
        </footer>
    </body>
</html>