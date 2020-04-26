<?php



include ('auth.php');
session_start();
if (!($_POST['login']) && !($_POST['passwd']) && !(auth($_POST['login'], $_POST['passwd']))){
    $_SESSION['loggued_on_user'] = "";
    echo "ERROR\n";
} else {
    $_SESSION['loggued_on_user'] = $_POST['login'];
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <style>
            div.row {
                margin-bottom: 20px;
            }
        </style>
        
        <title>DayO5 ex04</title>
    </head>
    <body>
            <div class="nav navbar bg-dark">
                <h2 style="texte-align: center; color: white;">Day05: 42 chat</h2>
            </div>
                    <br>
         <div class="container">
            <h3>Welcome</h3>
            <hr>
             <div class="row">
                <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
                <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
             </div>
        </div>
    </body>
</html>
<?php 
}
?>