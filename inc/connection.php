<?php 
    function db_connect(){
        static $bdd = null;
        if ($bdd  === null){
            $bdd = mysqli_connect("localhost","root","","FruitShop");
        }
        return $bdd;
    }
?>