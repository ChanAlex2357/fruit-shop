<?php 
    function get_all_category(){
        $category = array();
        // Recuperation de la connexion a la base de donnee
        $bdd = db_connect();
        // La requete pour la liste des categories
        $requete = "select * from category";
        // Execution de la requete
        $resultat = mysqli_query($bdd,$requete);
        while ($row = mysqli_fetch_assoc($resultat)){
            $category [] = array(
                $row['id_category'],
                $row['nom_category']
            );
        }
        return $category;
    }

    function get_all_product(){
        $product = array();
        // Recuperation de la connexion a la base de donnee
        $bdd = db_connect();
        // La requete pour la liste des categories
        $requete = "select * from products";
        // Execution de la requete
        $resultat = mysqli_query($bdd,$requete);
        while ($row = mysqli_fetch_assoc($resultat)){
            $product [] = array(
                $row['id_product'],
                $row['nom_produit'],
                $row['description'],
                $row['illustration'],
                $row['price'],
                $row['sale_pourcentage'],
                $row['id_category']
            );
        }
        return $product;
    }
?>