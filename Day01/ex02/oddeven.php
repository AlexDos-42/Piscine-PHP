#!/usr/bin/php
<?php
    $stdin = fopen("php://stdin", "r");
    while ($stdin && !feof($stdin)) {
        echo "Entrez un nombre: ";
        $number = trim(fgets($stdin));
        if (is_numeric($number)) {
                if ($number % 2 == 0)
                    echo "Le chiffre " . $number . " est Pair\n";
                else
                    echo "Le chiffre " . $number . " est Impair\n";
            } else
                echo "'" . $number . "' n'est pas un chiffre\n";
    }
    fclose($stdin);
    echo "\n";
?>
