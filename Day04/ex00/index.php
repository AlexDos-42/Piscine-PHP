
<?php
session_start();
if (isset($_GET['login']) && isset($_GET['passwd']) && $_GET['submit'] === 'OK'){
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
    
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
            

        </style>
        
        <title>DayO4 ex00</title>
    </head>
    <body>
        <div class="container">
            <br>
            <div class="nav">
                <h2 style="texte-align: center;">Day04: ex00 session</h2>
            </div>
            <hr>
             <form action="index.php" method="GET">
                  <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" name="login" class="form-control" placeholder="Enter login" id="login" value="<?php echo $_SESSION['login']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="passwd">Pssword:</label>
                    <input type="password" name="passwd" class="form-control" placeholder="Enter passwd" id="passwd" value="<?php echo $_SESSION['passwd']; ?>">
                  </div>
                  <button type="submit" name="submit" value="OK" class="btn btn-primary">OK</button>
                </form> 
        </div>
    </body>
</html>