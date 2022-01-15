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
    include("../proizvod.php");
    $proizvod = new Proizvod();
    $result = $proizvod->sacuvajProizvod($NazivProizvoda, $Cena, $Vrsta, $Velicina, $con);
    
    confirm($result);
    $_SESSION['messageSuccess'] = 'Proizvod uspesno unet!';
    redirect("../usluge.php");
}

 ?>
