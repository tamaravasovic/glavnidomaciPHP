<?php include("includes/header.php") ?>
<?php
	if(isset($_COOKIE['user'])){
		redirect($_SERVER['HTTP_REFERER']);
	}
 ?>
   <section class="login">
		<div class="container fill">
			<div class="row fill align-items-center row-padding justify-content-center mw-100 m-0">
				<div class="col-lg-5 col-md-7 col-11 login-card">
					<?php
						validate_user_login();
					?>
					<div class="card">
						<div class="card-header rounded-0 form-title text-center pt-4">
							<h4>Dobro došli nazad!</h4>
						</div>
						<div class="card-body">
							<form action="login.php" method="post" class="pl-md-4 pr-md-4 pb-md-4 pl-3 pr-3 pb-3 text-center">
								<div class="form-group">
									<label for="username"><span class="FieldInfo">Korisničko ime</span></label>
									<input type="text" class="form-control" id="username" name="Username" placeholder="Korisničko ime">
								</div>
								<div class="form-group">
									<label for="password"><span class="FieldInfo">Lozinka</span></label>
									<input type="password" class="form-control" id="password" name="Password" placeholder="Password">
								</div>
								<input type="submit" value="Ulogujte se" class="btn btn--pill btn-green btn-block font-weight-600 mt-5">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include("includes/footer.php") ?>
