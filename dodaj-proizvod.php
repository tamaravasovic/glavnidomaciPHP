<?php include("includes/header.php") ?>
<?php
	Confirm_Login();
?>
<div class="container-fullwidth proizvodi">
    <section class="proizvodi-banner">
			<div class="background-wrapper fill">
        <div class="container fill">
          <div class="row fill align-items-center">
            <div class="col text-center">
              <h1 class="text-uppercase mb-4">Dodaj Proizvod</h1>
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
                    <h4>Unesite podatke za novi proizvod / uslugu</h4>
                  </div>
                  <div class="card-body">
                    <form action="functions/addProduct.php" method="post" class="pl-md-4 pr-md-4 pb-md-4 pl-3 pr-3 pb-3">
                      <div class="form-group">
                        <label for="nazivProizvoda"><span class="FieldInfo">Naziv</span></label>
                        <input type="text" class="form-control" id="nazivProizvoda" name="NazivProizvoda">
                      </div>
                      <div class="form-group">
                        <label for="cena"><span class="FieldInfo">Cena</span></label>
                        <input type="number" class="form-control" id="cena" name="Cena">
                      </div>
                      <div class="form-group">
                        <label for="vrsta"><span class="FieldInfo">Vrsta prozivoda/usluge</span></label>
                        <select class="form-control" id="vrsta" name="Vrsta">
                          <?php
                            $sql = "SELECT * FROM vrsta";
                            $result = query($sql);
                            confirm($result);
                            while ($row = fetch_array($result)) {
                              echo "<option value='". $row['vrstaId'] ."'>" .$row['nazivVrste'] ."</option>";
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
                              echo "<option value='". $row['velicinaId'] ."'>" .$row['nazivVelicine'] ."</option>";
                            }
                          ?>
                        </select>
                      </div>
                      <div class="w-100 text-center">
                        <input type="submit" value="Dodaj" class="btn btn--pill btn-green font-weight-600 mt-5">
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
