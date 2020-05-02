<?php
//if ($_POST[delete_product_id] == "Supprimer ID produit")
//{
    $tab_prod = unserialize(file_get_contents("private/product"));
    $i = 0;
    print_r($tab_prod);
    if (isset($tab_produit) {
        echo ("Hello World\n");
    while ($tab_prod[$i])
    {
       echo("be4 if");
      if ($tab_prod[$i]['name'] === $_POST['product_id'])
        {
          unset($tab_prod[$i]);
          echo("on est ok");
          break;
        }
      $i++;
    }
    }
    $tab_prod[$i]['name'] = $_POST['product_id'];
    $tab_prod[$i]['description'] = $_POST['product_des'];
    file_put_contents("private/product", serialize($tab_prod));
?>