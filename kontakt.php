<?php include("includes/header.php") ?>
   <section class="contact-us-section">
        <div class="container fill contactDiv">
          <div class="row fill align-items-center justify-content-center contact-container">
            <div class="col-lg-12">
               <?php
               contactUs();
              ?>
              <div class="card card-shadow border-0 mb-4">
                <div class="row ml-0 mr-0">
                  <div class="col-lg-8">
                    <div class="contact-box p-4">
                      <h4 class="title">Kontaktirajte nas!</h4>
                      <form action="kontakt.php" method="post">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group mt-3">
                              <input class="form-control" name="kontaktIme" id="kontaktIme" type="text" placeholder="Ime">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group mt-3">
                              <input class="form-control" name="kontaktEmail" id="kontaktEmail" type="email" placeholder="Email">
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group mt-3">
                              <input class="form-control" name="kontaktTelefon" id="kontaktTelefon" type="text" placeholder="Telefon">
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group mt-3">
                              <textarea class="form-control" name="kontaktPoruka" id="kontaktPoruka" cols="30" rows="7" placeholder="Poruka"></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-green mt-3 mb-3 py-2 px-3">POŠALJI</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-4 bg-image">
                    <div class="detail-box p-4">
                      <h5 class="text-white font-weight-light mb-3">ADRESA</h5>
                      <p class="text-white op-7">Tržni centar BB,
                        <br> Zlatibor</p>
                      <h5 class="text-white font-weight-light mb-3 mt-4">POZOVITE NAS</h5>
                      <p class="text-white op-7">+381 64 66 22 266
                        <br> +381 31 850 323</p>
                      <div class="round-social light">
                        <a href="javascript:void(0)" class="ml-0 text-decoration-none text-white border border-white rounded-circle facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="javascript:void(0)" class="text-decoration-none text-white border border-white rounded-circle twitter"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:void(0)" class="text-decoration-none text-white border border-white rounded-circle youtube"><i class="fab fa-youtube"></i></a>
                        <a href="javascript:void(0)" class="text-decoration-none text-white border border-white rounded-circle instagram"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   </section>
<?php include("includes/footer.php") ?>
