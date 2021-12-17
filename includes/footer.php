<footer class="site-footer">
 <div class="container pb-5">
   <div class="row">
     <div class="col-md-4">
       <h5>Kontakt</h6>
          <div class="contact">
             <h6 class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Tržni centar BB, Zlatibor</h6>
             <h6 class="mb-2"><i class="fas fa-envelope mr-2"></i> E-mail: info@skipahuljica.rs</h6>
             <h6 class="mb-2"><i class="fas fa-mobile-alt mr-2"></i> +381 64 66 22 266</h6>
             <h6 class="mb-2"><i class="fas fa-phone mr-2"></i> +381 31 888 323</h6>
          </div>

     </div>
     <div class="col-md-4">
        <h5>FOLLOW US ON</h5>
        <ul class="social-icons">
          <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a class="twitter ml-2" href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a class="youtube ml-2" href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
          <li><a class="instagram ml-2" href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
        </ul>
     </div>
     <div class="col-md-4">
        <h5>Naša lokacija</h5>
        <div class="map-wrapper">
           <iframe src="https://maps.google.com/maps?q=43.72545029904908,19.697651137925504&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" class="w-100" height=150 allowfullscreen></iframe>
        </div>
     </div>
   </div>
 </div>
 <div class="footer-copyright py-3 text-uppercase">
   <div class="container">
     <div class="row">
       <div class="col align-self-center text-center">
            &copy; 2021 Ski Servis Pahuljica. All Rights Reserved.
       </div>
     </div>
   </div>
 </div>
 </footer>
 <script src="https://kit.fontawesome.com/df0583b6a8.js" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script type="text/javascript">
   <script type="text/javascript">
    $(function() {
    $("#delete-product-modal").on("show.bs.modal", function(event) {
      let button = $(event.relatedTarget);
      let productId = button.data("productid");
      $("#productId").val(productId);
    });
   
});
 </script>
</body>
</html>
