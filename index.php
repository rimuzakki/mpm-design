<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MPM</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section id="login-page" class="vertical-center">
	<div class="container">
		<div class="row" >
			<div class="col s12 m6 push-m3">
				<div class="card card-login">
					<div class="card-image">
		              <img src="assets/img/MPM_Logo Group_White.png">
		              <!-- <span class="card-title">Card Title</span> -->
		            </div>
		            <div class="card-content">
		              <span class="card-title">LOGIN</span>
		              <div class="row">
					    <form class="col s12" method="POST" id="loginform" action="./user.proses.login.php">
					      <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="icon_prefix" type="text" class="validate">
					          <label for="icon_prefix">Your Name</label>
					        </div>
					       </div>
					       <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">phone</i>
					          <input id="icon_telephone" type="tel" class="validate" pattern="[0-9]+">
					          <label for="icon_telephone">Phone Number (08xxxxxxxxxx)</label>
					        </div>
					      </div>
					      <div class="row">
					      	<div class="col s12">
					      		<button class="btn waves-effect waves-light col s12 m8 push-m2" type="submit" name="action">
					      			LOGIN
								</button>
					      	</div>
					      </div>
					    </form>
					  </div>
		            </div>
		            
	          	</div>
			</div>
		</div>
	</div>
</section>

<?php require_once('inc/footer.inc.php'); ?>
