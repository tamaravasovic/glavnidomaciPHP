<?php include("db.php"); ?>
<?php include("functions.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $idToDelete = $_POST['productId'];
    $sql = "DELETE from oprema where  opremaId='$idToDelete'";
    $result = query($sql);
    confirm($result);
    $_SESSION['messageSuccess'] = 'Proizvod uspesno obrisan!';
    redirect("../usluge.php");
}
?>
