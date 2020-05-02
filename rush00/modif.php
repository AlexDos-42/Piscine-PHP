<?php
if (!file_exists("private/passwd") || $_POST["login"] === NULL || $_POST["oldpw"] === "" || $_POST["newpw"] === "" || $_POST["submit"] !== "OK")    {
    echo "ERROR\n";
} else {
    $user = unserialize(file_get_contents("private/passwd"));
    $login = $_POST["login"];
    $oldpw = hash('whirlpool', $_POST["oldpw"]);
    $newpw = hash('whirlpool', $_POST["newpw"]);
    foreach ($user as &$elem){
        if ($elem["login"] === $_POST["login"] && $elem["passwd"] === $oldpw){
            $elem["passwd"] = $newpw;
            file_put_contents("private/passwd", serialize($user));
            header('Location: index.php');
         
            exit();
    }
    echo "ERROR\n";
    }  
}
?>