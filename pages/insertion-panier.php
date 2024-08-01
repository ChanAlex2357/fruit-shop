<?php
    session_start();
    $id_produit = $_GET['idProduit'];
    $_SESSION['panier'][] =  $id_produit;
?>