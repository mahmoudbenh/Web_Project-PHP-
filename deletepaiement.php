<?php
include '../Controller/paiementc.php';
$clientC = new paiementc();
$clientC->deletepaiement($_GET["cin"]);
header('Location:listpaiement.php');
?>