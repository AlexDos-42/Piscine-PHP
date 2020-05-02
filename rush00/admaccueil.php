<?php   session_start();
            include_once "login_exist.php";;
            if (!$_SESSION['loggued_on_user'] || $_SESSION['loggued_on_user'] == "")
                $_SESSION["guest"] = "OK";
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
            div #main{
                background-color: white;
                padding: 10px;
                border-radius: 10px;
                margin-bottom: 40px;
            }
            li {
                border: #333;
            }
            @media {
                
            }
        </style>
    </head>
    <body>
        <nav class="top nav navbar-fixed-top navbar-inverse">
                <div class="container">
                        
        <?php if (!$_SESSION['loggued_on_user']) : ?>
                    <div class="login navbar-right">
				<a href="login.php">Connectez-vous</a>
                        </div>
		<?php endif ?>
        <?php if ($_SESSION['loggued_on_user']) : ?>
            <div class="name navbar-left">
            <p>
             <a href="member.php">Bonjour <?php echo $_SESSION['loggued_on_user']?></a>
                <?php if ($_SESSION['admin'] === true) : ?>
                <span style="color: red;">(Admin)</span>
                <?php endif ?>
            </p>
            </div>
              <div class="login navbar-right">
                  <a href="panier.php"><?php echo isset($_SESSION['basketCount']) ? $_SESSION['basketCount']  : "0";?> ARTICLES - <?php echo isset($_SESSION['basketPrice']) ? number_format($_SESSION['basketPrice'], 2) : '0.00'; ?> €</a><hr> 
                <div id="logout">
                    <form  method="POST" action="logout.php">
                        <input class="button" type="submit" name="deconnexion" value="logout">
                    </form>
                </div>
                  </div>
		<?php endif ?> 
                    <br>
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
        <br><br><br><br><br><br>
        <div class="bod container">
            <div id="main">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                    <a class="nav-link active" href="">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admcommandes.php">Commandes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admuser.php">Gestion utilisateurs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admproduits.php">Gestion produits</a>
                    </li>
                </ul>
                <br>
                <div id="content">
                    <div id="about">
                        <h2>Tableau de bord</h2>
                        <hr>
                        
                            <br>
                            <br>
                    </div>
                </div>
                </div>
            </div>
            <footer>
                <div class="nav justify-content-center fixed-bottom">
                    <div class="Contact">
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
            </footer>
</body>
</html>