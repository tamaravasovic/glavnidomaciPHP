<?php include("db.php"); ?>
<?php include("functions.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $NazivProizvoda = clean($_POST['NazivProizvoda']);
    $Cena = clean($_POST['Cena']);
    $Vrsta = clean($_POST['Vrsta']);
    $Velicina = clean($_POST['Velicina']);
    if (empty($NazivProizvoda) || empty($Cena) || empty($Vrsta) || empty($Velicina)) {
        $_SESSION['messageError'] = "Sva polja moraju biti popunjena!";
        redirect("../usluge.php");
    }
    $sql = "INSERT INTO oprema(naziv, cena, vrstaId, velicinaId)";
    $sql.= "VALUES('$NazivProizvoda','$Cena','$Vrsta','$Velicina')";
    $result = query($sql);
    confirm($result);
    $_SESSION['messageSuccess'] = 'Proizvod uspesno unet!';
    redirect("../usluge.php");
}

 ?>
