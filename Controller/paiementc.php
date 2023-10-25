<?php
include '../config.php';
include_once '../Model/paiement.php';
class paiementc
{
    function listpaiement()
    {
        $sql = "SELECT * FROM paiement";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		}catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
    }
    function deletepaiement($cin)
    {
        $sql = "DELETE FROM paiement WHERE cin=:cin";  
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':cin', $cin);
        try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}

    }
    function addpaiement($paiement)
	{
		$sql = "INSERT INTO paiement (cin,fn, ln, email, mobile , info ) 
			VALUES (:cin, :fn, :ln, :email, :mobile, :info )";
		$db = config::getConnexion();
		try {
            $query = $db->prepare($sql);
			$query->execute([
				'cin' => $paiement->getcin(),
				'fn' => $paiement->getfn(),
				'ln' => $paiement->getln(),
				'email' => $paiement->getemail(),
				'mobile' => $paiement->getmobile(),
                'info' => $paiement->getinfo()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    
	}
    function recupererpaiement($cin)
	{
		$sql = "SELECT * from paiement where cin=$cin";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$paiement = $query->fetch();
			return $paiement;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}


}

function updatepaiement($paiement, $cin)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE paiement SET 
                    fn= :fn, 
                    ln= :ln, 
                    email= :email, 
                    mobile= :mobile, 
                    info= :info
                WHERE cin= :cin'
        );
        $query->execute([
            'cin' => $paiement->getcin(),
				'fn' => $paiement->getfn(),
				'ln' => $paiement->getln(),
				'email' => $paiement->getemail(),
				'mobile' => $paiement->getmobile(),
                'info' => $paiement->getinfo()
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    
    }


}

}
?>