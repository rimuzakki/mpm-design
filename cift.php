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
<div class="navbar-fixed">
	<nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo center"><img src="assets/MPM_Logo Group_White.png"></a>
	      <!-- <ul class="left">
	        <li><a href="#">Assesment Sample</a></li>
	      </ul> -->
	      <ul class="right timer">
	        <li><a href="#"><p id="time_left"></p></a></li>
	      </ul>
	    </div>
  	</nav>
</div>

<section id="quiz-cift">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="title center-align">
				 <h3>CIFT</h3>
				</div>
			</div>
		</div>	
		<form name="cfitform" class="form-group" method="post" action="skorcfit.php" onsubmit="handleClick();">
		 <input type="hidden" name="skor" value="0">
			<div class="row">
				<div class="col s12">
					<!-- question 1 -->
					<div class="card">
						<div class="card-image">
			              <img src="assets/img/cfit1.png">
			            </div>
			            <div class="card-content">
			              <span class="card-title">1. Bulan terakhir pada awal tahun ini adalah</span>
			            </div>
			            <div class="card-action answer">
			            	<table class="responsive-table">
								<td>
									<label>
										<input name="q1" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit1-a.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q1" value="corr" id="value2" type="radio" />
										<img src="assets/img/cfit1-b.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q1" value="c" id="value133" type="radio" />
										<img src="assets/img/cfit1-c.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q1" value="d" id="value4" type="radio" />
										<img src="assets/img/cfit1-d.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q1" value="e" id="value5" type="radio" />
										<img src="assets/img/cfit1-e.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q1" value="f" id="value5" type="radio" />
										<img src="assets/img/cfit1-f.png" class="responsive-img">
									</label>
								</td>
							</table>
			            </div>
			        </div><!--card-->

			        <!-- question 2 -->
			        <div class="card">
						<div class="card-image">
			              <img src="assets/img/cfit2.png">
			            </div>
			            <div class="card-content">
			              <span class="card-title">2. Bulan terakhir pada awal tahun ini adalah</span>
			            </div>
			            <div class="card-action answer">
			            	<table class="responsive-table">
								<td>
									<label>
										<input name="q2" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit2-a.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q2" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit2-b.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q2" value="corr" id="value1" type="radio" />
										<img src="assets/img/cfit2-c.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q2" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit2-d.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q2" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit2-e.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q2" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit2-f.png" class="responsive-img">
									</label>
								</td>
							</table>
			            </div>
			        </div><!--card-->

			        <!-- question 3 -->
			        <div class="card">
						<div class="card-image">
			              <img src="assets/img/cfit3.png">
			            </div>
			            <div class="card-content">
			              <span class="card-title">3. Bulan terakhir pada awal tahun ini adalah</span>
			            </div>
			            <div class="card-action answer">
			            	<table class="responsive-table">
								<td>
									<label>
										<input name="q3" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit3-a.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q3" value="corr" id="value1" type="radio" />
										<img src="assets/img/cfit3-b.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q3" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit3-c.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q3" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit3-d.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q3" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit3-e.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q3" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit3-f.png" class="responsive-img">
									</label>
								</td>
							</table>
			            </div>
			        </div><!--card-->

			        <!-- question 4 -->
			        <div class="card">
						<div class="card-image">
			              <img src="assets/img/cfit4.png">
			            </div>
			            <div class="card-content">
			              <span class="card-title">4. Bulan terakhir pada awal tahun ini adalah</span>
			            </div>
			            <div class="card-action answer">
			            	<table class="responsive-table">
								<td>
									<label>
										<input name="q4" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit4-a.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q4" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit4-b.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q4" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit4-c.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q4" value="corr" id="value1" type="radio" />
										<img src="assets/img/cfit4-d.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q4" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit4-e.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q4" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit4-f.png" class="responsive-img">
									</label>
								</td>
							</table>
			            </div>
			        </div><!--card-->

			        <!-- question 5 -->
			        <div class="card">
						<div class="card-image">
			              <img src="assets/img/cfit5.png">
			            </div>
			            <div class="card-content">
			              <span class="card-title">5. Bulan terakhir pada awal tahun ini adalah</span>
			            </div>
			            <div class="card-action answer">
			            	<table class="responsive-table">
								<td>
									<label>
										<input name="q5" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit5-a.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q5" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit5-b.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q5" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit5-c.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q5" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit5-d.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q5" value="corr" id="value1" type="radio" />
										<img src="assets/img/cfit5-e.png" class="responsive-img">
									</label>
								</td>
								<td>
									<label>
										<input name="q5" value="a" id="value1" type="radio" />
										<img src="assets/img/cfit5-f.png" class="responsive-img">
									</label>
								</td>
							</table>
			            </div>
			        </div><!--card-->

			        
				</div><!--col-->
				<div class="col s12">
					<button class="btn-large col s8 push-s2 waves-effect waves-light" type="submit" name="action">Submit CIFT Test
						<i class="material-icons right">send</i>
					</button>
				</div>	
			</div><!--row-->
		</form>
	</div><!--container-->
</section>
<script>
function handleClick()
  {
var amountCorrect = 0;
for(var i = 1; i <= 45; i++) {
  var radios = document.getElementsByName('q'+i);
  for(var j = 0; j < radios.length; j++) {
    var radio = radios[j];
    if(radio.value == "corr" && radio.checked) {
      amountCorrect++;
    }
  }
 }
    document.cfitform.skor.value = ""+amountCorrect;
		return true;
  }
</script>
<?php require_once('inc/footer.inc.php'); ?>