<?php include("db.php"); ?>
<?php include("functions.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $idToDelete = $_POST['productId'];

    include("../proizvod.php");
    $proizvod = new Proizvod();
    $result = $proizvod->obrisiProizvod($idToDelete, $con);
    
    confirm($result);
    $_SESSION['messageSuccess'] = 'Proizvod uspesno obrisan!';
    redirect("../usluge.php");
}
?>
