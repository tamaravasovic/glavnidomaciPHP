<?php include("includes/header.php") ?>
<div class="container-fullwidth">
   <section class="services">
      <div class="container fill">
         <div class="row ml-0 mr-0">
            <div class="col-lg-5 pl-0 mb-2 mb-lg-0 pr-0 pr-lg-3">
              <select class="form-control" id="namePrice">
                <option value="naziv">Naziv</option>
                <option value="cena">Cena</option>
              </select>
            </div>
            <div class="col-lg-5 pl-0 mb-2 mb-lg-0 pr-0 pr-lg-3">
              <select class="form-control" id="lowHigh">
                <option value="desc">Opadajuce</option>
                <option value="asc">Rastuce</option>
              </select>
            </div>
            <div class="col-lg-1 pl-0 mb-2 mb-lg-0">
              <a class="btn btn-block btn-green text-uppercase float-left" type="button" href="javascript:void(0)" onClick="return filterProducts();">Filter</a>
            </div>
            <div class="col-lg-1 pl-0 mb-2 mb-lg-0">
               <a class="btn btn-blue btn-block text-uppercase float-right" type="button" name="save-preferences" href="javascript:void(0)" onClick="return resetProducts();">Reset</a>
            </div>
         </div>

         <?php if (isset($_SESSION['messageSuccess'])) { ?>
            <div class='alert alert-warning alert-dismissible mt-4'  role='alert'>
                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                 </button>
                 <?php  echo $_SESSION['messageSuccess'];
                 $_SESSION['messageSuccess'] = null;?>
                 </div>
         <?php }else if(isset($_SESSION['messageError'])){ ?>
            <div class='alert alert-danger alert-dismissible mt-4'  role='alert'>
                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                 </button>
                 <strong>Greška!</strong>
                 <?php  echo $_SESSION['messageError'];
                 $_SESSION['messageError'] = null;?>
                 </div>
         <?php } ?>

         <div class="row ml-0 mr-0 mt-4 table-responsive">
            <table class="table" id="productsTable">
             <thead>
               <tr>
                  <th scope="col">Naziv</td>
                  <th scope="col">Cena</td>
                  <th scope="col">Vrsta</td>
                  <th scope="col">Velicina</td>
                  <?php
                     if(isset($_COOKIE['user'])) {
                  ?>
                  <th scope="col">Akcije</td>
                  <?php } ?>
               </tr>
             </thead>
             <tbody class="text-uppercase text-center font-weight-600">
             </tbody>
            </table>
         </div>
      </div>
   </section>

</script>
<?php include("includes/footer.php") ?>
