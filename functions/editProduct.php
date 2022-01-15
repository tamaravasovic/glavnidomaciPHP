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
   include("../proizvod.php");
    $proizvod = new Proizvod();
    $result = $proizvod->izmeniProizvod($id, $NazivProizvoda, $Cena, $Vrsta, $Velicina, $con);
    confirm($result);
    $_SESSION['messageSuccess'] = 'Proizvod uspesno izmenjen!';
    redirect("../usluge.php");
}


  ?>
