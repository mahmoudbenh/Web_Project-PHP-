<?php
 include_once '../../Controller/PanierC.php';
 $co = new panierC();
 if(isset($_GET['cin'])){
     $co->supprimerPanier($_GET['cin']);
 
    header('Location:back.php');
    }

 ?>