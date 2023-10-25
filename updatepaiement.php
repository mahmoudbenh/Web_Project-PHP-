<?php
include '../Model/paiement.php';
include_once '../Controller/paiementc.php';
$error = "";

// create 
$paiement = null;

$paiementc = new paiementc();
if (
    isset($_POST["cin"]) &&
    isset($_POST["fn"]) &&
    isset($_POST["ln"]) &&
    isset($_POST["email"])&&
    isset($_POST["mobile"])&&
    isset($_POST["info"]) 
) {
    if (
        !empty($_POST["cin"]) &&
            !empty($_POST["fn"]) &&
            !empty($_POST["ln"]) &&
            !empty($_POST["email"])&&
            !empty($_POST["mobile"])&&
            !empty($_POST["info"]) 
    ) {
        $paiement = new paiement(
            $_POST['cin'],
            $_POST['fn'],
            $_POST['ln'],
            $_POST['email'],
            $_POST['mobile'],
            $_POST['info']
        );
        $paiementc->updatepaiement($paiement, $_POST["cin"]);
            header('Location:listpaiement.php');
    } else
            $error = "Missing information";
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="listpaiement.php">Retour à la liste de paiement</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['cin'])) {
        $paiement = $paiementc->recupererpaiement($_POST['cin']);

    ?>

    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="cin">cin :
                    </label>
                </td>
                <td><input type="text" name="cin" id="cin"
                        value="<?php echo $paiement['cin']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="fn">fn:
                    </label>
                </td>
                <td><input type="text" name="fn" id="fn" value="<?php echo $paiement['fn']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="ln">ln:
                    </label>
                </td>
                <td><input type="text" name="ln" id="ln" value="<?php echo $paiement['ln']; ?>"
                        maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="email">email:
                    </label>
                </td>
                <td>
                    <input type="email" name="email" value="<?php echo $paiement['email']; ?>" id="adresse">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobile"> mobile:
                    </label>
                </td>
                <td>
                    <input type="text" name="mobile" id="mobile" value="<?php echo $paiement['mobile']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="info"> info:
                    </label>
                </td>
                <td>
                    <input type="text" name="info" id="info" value="<?php echo $paiement['info']; ?>">
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Modifier">
                </td>
                <td>
                    <input type="reset" value="Annuler">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>

</html>