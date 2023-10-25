<?php
include_once("C:/xampp/htdocs/page2/config.php");
include_once("C:/xampp/htdocs/page2/Model/Panier.php");

class panierC
{
    function afficherPanier(){
        $sql="select * from panier";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
function CountPanier(){
    $sql="select count(*) as nbr from panier";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
}
catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}
function afficherPanierConn($conn){
    $sql="select * from panier where idClient=$conn";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
}
catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}
public function ajouterPanier($panier){
    $sql="INSERT into panier(idClient,refProduit,quantite) values(:idClient,:refProduit,:quantite)";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'idClient'=>$panier->getidClient(),
        'refProduit'=>$panier->getRefProduit(),
        'quantite'=>$panier->getQuantite()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
function modifierPanier($id,$panier) {
    $sql="UPDATE  panier set idClient=:idClient,refProduit=:refProduit,quantite=:quantite where id='$id'";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'idClient' => $panier->getidClient(),
            'refProduit' => $panier->getRefProduit(),
            'quantite' => $panier->getQuantite()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
public function afficherPanierDetail(int $rech1)
    {
        $sql="SELECT * from panier where id='$rech1'";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function affecterCMDPanier($id) {
        $sql="UPDATE  panier set id_cmd=$id where id_cmd=50";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([

            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
public function supprimerPanier($id)
{
    $sql = "DELETE FROM panier WHERE id='$id'";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
}
?>
