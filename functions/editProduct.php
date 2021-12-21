<?php include("db.php"); ?>
<?php include("functions.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $NazivProizvoda = clean($_POST['NazivProizvoda']);
    $Cena = clean($_POST['Cena']);
    $Vrsta = clean($_POST['Vrsta']);
    $Velicina = clean($_POST['Velicina']);
    alert($Cena);
    $id = $_GET['id'];
    if (empty($NazivProizvoda) || empty($Cena) || empty($Vrsta) || empty($Velicina)) {
        $_SESSION['messageError'] = "Sva polja moraju biti popunjena!";
        redirect("../usluge.php");
    }
    $sql = "UPDATE oprema set naziv='$NazivProizvoda', cena='$Cena', vrstaId='$Vrsta', velicinaId='$Velicina' where  opremaId='$id'";
    alert($sql);
    $result = query($sql);
    confirm($result);
    $_SESSION['messageSuccess'] = 'Proizvod uspesno izmenjen!';
    redirect("../usluge.php");
}


  ?>
