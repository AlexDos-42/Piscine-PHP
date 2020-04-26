<?php
    session_start();
    if (!($_SESSION['loggued_on_user']))
        echo "ERROR\n";
    else {
        if (isset($_POST['msg']) && $_POST['msg']) {
            if (!file_exists('/rivate/chat')) {
                file_put_contents('private/chat', null);
            }
            $chat = unserialize(file_get_contents('private/chat'));
            $file = fopen('private/chat', "w");
            flock($file, LOCK_EX);
            $tab['login'] = $_SESSION['loggued_on_user'];
            $tab['time'] = time();
            $tab['msg'] = $_POST['msg'];
            $chat[] = $tab;
            file_put_contents('private/chat', serialize($chat));
            fclose($file);
        }
        ?>
                <html>
            <head>
                <script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
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
                    form {
                        position: relative;
                        top: 6px;
                        padding: 0;
                        margin: 0;
                    }
                    d
                    form
                </style>
                
                <title>DayO5 ex04</title>
            </head>
            <body>
                <div class="container-fluid">
                    <form class="form" action="speak.php" method="POST">
                        <div class="form-row">
                            <input type="text" class="form-control form-control-sm mr-2 col-10"  name="msg" value=""/>
                            <input type="submit" name="submit" value="Send" class="btn btn-sm btn-primary col-auto"/>
                        </div>
                    </form>
                </div>
            </body>
<?php
    }
?>