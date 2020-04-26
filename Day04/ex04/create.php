<?php
if ($_POST["login"] === NULL || $_POST["passwd"] === "" || $_POST["submit"] !== "OK") {
    echo "ERROR\n";
    return ;
} else {
    if (!file_exists("private")){
        mkdir("private", 0775);
        chmod("private", 0775);
    }
    if (file_exists("private/passwd")) {
        $list = unserialize(file_get_contents("private/passwd"));
        foreach ($list as $elem){
            if ($elem["login"] === $_POST["login"]){
                echo "ERROR\n";
                return ;
            }
         }
    }
    $tab["login"] = $_POST["login"];
    $tab["passwd"] = hash('whirlpool', $_POST["passwd"]);
    $list[] = $tab;
    file_put_contents("private/passwd", serialize($list));
    chmod ("private/passwd", 0775);
    header('Location: index.html');
    echo "OK\n";
}
?>