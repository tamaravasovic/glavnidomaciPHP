<?php include("includes/header.php") ?>
<?php
	Confirm_Login();
  if(!isset($_GET['id'])){
    redirect("usluge.php");
  }
  $productId = $_GET["id"];
  $sql = "SELECT * FROM oprema where opremaId = '$productId'";
  $result = query($sql);
  confirm($result);
  if (row_count($result) != 1) {
    redirect("usluge.php");
  }

  $productToEdit = fetch_array($result);
?>
<div class="container-fullwidth proizvodi">
    <section class="proizvodi-banner">
			<div class="background-wrapper fill">
        <div class="container fill">
          <div class="row fill align-items-center">
            <div class="col text-center">
              <h1 class="text-uppercase mb-4">Izmeni Proizvod</h1>
            </div>
          </div>
        </div>
    </div>
    </section>
    <section class="proizvodi-body">
      <div class="container-fullwidth proizvodi-content">
          <div class="container proizvodi-container">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header rounded-0 form-title text-center pt-4">
                    <h4>Unesite podatke koje zelite da izmenite</h4>
                  </div>
                  <div class="card-body">
                    <form action="functions/editProduct.php?id=<?php echo $productId; ?>" method="post" class="pl-md-4 pr-md-4 pb-md-4 pl-3 pr-3 pb-3">
                      <div class="form-group">
                        <label for="nazivProizvoda"><span class="FieldInfo">Naziv</span></label>
                        <input type="text" class="form-control" id="nazivProizvoda" name="NazivProizvoda" value="<?php echo $productToEdit["naziv"] ?>">
                      </div>
                      <div class="form-group">
                        <label for="cena"><span class="FieldInfo">Cena</span></label>
                        <input type="number" class="form-control" id="cena" name="Cena" value="<?php echo $productToEdit["cena"] ?>">
                      </div>
                      <div class="form-group">
                        <label for="vrsta"><span class="FieldInfo">Vrsta prozivoda/usluge</span></label>
                        <select class="form-control" id="vrsta" name="Vrsta">
                          <?php
                            $sql = "SELECT * FROM vrsta";
                            $result = query($sql);
                            confirm($result);
                            while ($row = fetch_array($result)) {
                              $selected = "";
                              if ($row["vrstaId"] === $productToEdit["vrstaId"]){
                                $selected = "selected";
                              }else{
                                $selected = "";
                              }
                              echo "<option value='". $row['vrstaId'] ."' ".$selected.">" .$row['nazivVrste'] ."</option>";
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="velicina"><span class="FieldInfo">Veličina</span></label>
                        <select class="form-control" id="velicina" name="Velicina">
                          <?php
                            $sql = "SELECT * FROM velicina";
                            $result = query($sql);
                            confirm($result);
                            while ($row = fetch_array($result)) {
                              $selected = "";
                              if ($row["velicinaId"] === $productToEdit["velicinaId"]){
                                $selected = "selected";
                              }else{
                                $selected = "";
                              }
                              echo "<option value='". $row['velicinaId'] ."' ".$selected.">" .$row['nazivVelicine'] ."</option>";
                            }
                          ?>
                        </select>
                      </div>
                      <div class="w-100 text-center">
                        <input type="submit" value="Izmeni" class="btn btn--pill btn-green font-weight-600 mt-5">
                        <a class="btn btn--pill btn-blue font-weight-600 mt-5" href="usluge.php">Nazad</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
<?php include("includes/footer.php") ?>
