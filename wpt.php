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
	      <ul class="left">
	        <li><a href="#">Assesment Sample</a></li>
	      </ul>
	      <ul class="right timer">
	        <li><a href="#"><p id="time_left"></p></a></li>
	      </ul>
	    </div>
  	</nav>
</div>

<section id="quiz-wpt">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="title center-align">
				 <h3>WPT</h3>
				</div>
			</div>
		</div>	
		<form name="wptform" class="form-group" method="post" action="skorwpt.php" onsubmit="handleClick();">
		 <input type="hidden" name="skor" value="0">
			<div class="row">
				<div class="col s12">

					<!-- question 1 -->
					<div class="card">
			            <div class="card-content">
			              <span class="card-title">1. Bulan terakhir pada awal tahun ini adalah</span>
			            </div>
			            <div class="card-action">
			            	<ul class="answer">
			            		<li>
					            	<input name="q1" value="a" id="q1-a" type="radio" />
									<label for="q1-a">A. Januari</label>
								</li>
								<li>
									<input name="q1" value="a" id="q1-b" type="radio" />
									<label for="q1-b">B. Maret</label>
								</li>
								<li>						
									<input name="q1" value="a" id="q1-c" type="radio" />
									<label for="q1-c">C. Juli</label>
								</li>
								<li>							
									<input name="q1" value="corr" id="q1-d" type="radio" />
									<label for="q1-d">D. Desember</label>
								</li>
								<li>
									<input name="q1" value="a" id="q1-e" type="radio" />
									<label for="q1-e">E. Oktober</label>
								</li>
							</ul>
			            </div>
			        </div><!--card-->

			        <!-- question 2 -->
			        <div class="card">
			            <div class="card-content">
			              <span class="card-title">2. MENANGKAP adalah lawan kata dari</span>
			            </div>
			            <div class="card-action">
			            	<ul class="answer">
			            		<li>
					            	<input name="q2" value="a" id="q2-a" type="radio" />
									<label for="q2-a">A. Meletakkan</label>
								</li>
								<li>
									<input name="q2" value="corr" id="q2-b" type="radio" />
									<label for="q2-b">B. Membebaskan</label>
								</li>
								<li>						
									<input name="q2" value="a" id="q2-c" type="radio" />
									<label for="q2-c">C. Beresiko</label>
								</li>
								<li>							
									<input name="q2" value="a" id="q2-d" type="radio" />
									<label for="q2-d">D. Berusaha</label>
								</li>
								<li>
									<input name="q2" value="a" id="q2-e" type="radio" />
									<label for="q2-e">E. Turun tingkat</label>
								</li>
							</ul>
			            </div>
			        </div><!--card-->

			        <!-- question 3 -->
			        <div class="card">
			            <div class="card-content">
			              <span class="card-title">3. Sebagian besar hal dibawah ini serupa satu sama lain. Manakah salah satu diantaranya yang kurang serupa dengan yang lain?</span>
			            </div>
			            <div class="card-action">
			            	<ul class="answer">
			            		<li>
					            	<input name="q3" value="a" id="q3-a" type="radio" />
									<label for="q3-a">1. Januari</label>
								</li>
								<li>
									<input name="q3" value="a" id="q3-b" type="radio" />
									<label for="q3-b">2. Agustus</label>
								</li>
								<li>						
									<input name="q3" value="corr" id="q3-c" type="radio" />
									<label for="q3-c">3. Rabu</label>
								</li>
								<li>							
									<input name="q3" value="a" id="q3-d" type="radio" />
									<label for="q3-d">4. Oktober</label>
								</li>
								<li>
									<input name="q3" value="a" id="q3-e" type="radio" />
									<label for="q3-e">5. Desember</label>
								</li>
							</ul>
			            </div>
			        </div><!--card-->

			        <!-- question 4 -->
			        <div class="card">
			            <div class="card-content">
			              <span class="card-title">4. Jawablah dengan menuliskan YA atau TIDAK. Apakah “VIP” berarti ‘jawablah yang tidak perlu</span>
			            </div>
			            <div class="card-action">
			            	<ul class="answer">
			            		<li>
					            	<input name="q4" value="a" id="q4-a" type="radio" />
									<label for="q4-a">A. YA</label>
								</li>
								<li>
									<input name="q4" value="corr" id="q4-b" type="radio" />
									<label for="q4-b">B. TIDAK</label>
								</li>
							</ul>
			            </div>
			        </div><!--card-->

			        <!-- question 5 -->
			        <div class="card">
			            <div class="card-content">
			              <span class="card-title">5.Dalam kelompok kata berikut, manakah kata yang berbeda dari kata yang lain?</span>
			            </div>
			            <div class="card-action">
			            	<ul class="answer">
			            		<li>
					            	<input name="q5" value="a" id="q5-a" type="radio" />
					            	<label for="q5-a">A. Pasukan</label>
								</li>
								<li>
									<input name="q5" value="a" id="q5-b" type="radio" />
									<label for="q5-b">B. Liga</label>
								</li>
								<li>						
									<input name="q5" value="corr" id="q5-c" type="radio" />
									<label for="q5-c">C. Berpartisipasi</label>
								</li>
								<li>							
									<input name="q5" value="a" id="q5-d" type="radio" />
									<label for="q5-d">D. Pak</label>
								</li>
								<li>
									<input name="q5" value="a" id="q5-e" type="radio" />
									<label for="q5-e">E.Kelompok</label>
								</li>
							</ul>
			            </div>
			        </div><!--card-->
				</div><!--col-->
				<!-- <div class="col s12">
					<button class="btn-large col s8 push-s2 waves-effect waves-light" type="submit" name="action">Submit WPT Test
						<i class="material-icons right">send</i>
					</button>
				</div> -->

				<div class="col s12">
					<ul class="pagination center">
					    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
					    <li class="active"><a href="#!">1</a></li>
					    <li class="waves-effect"><a href="#!">2</a></li>
					    <li class="waves-effect"><a href="#!">3</a></li>
					    <li class="waves-effect"><a href="#!">4</a></li>
					    <li class="waves-effect"><a href="#!">5</a></li>
					    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
					  </ul>
				</div>

				<!-- button corner right -->
				<div class="fab-right">
				    <button class="btn-floating btn-large waves-effect waves-light" type="submit" name="action">
				    	<i class="material-icons right">send</i>
				    </button>
				</div>

			</div><!--row-->
		</form>
	</div><!--container-->
</section>
<script type="text/javascript">
function handleClick()
  {
var amountCorrect = 0;
for(var i = 1; i <= 50; i++) {
  var radios = document.getElementsByName('q'+i);
  for(var j = 0; j < radios.length; j++) {
    var radio = radios[j];
    if(radio.value == "corr" && radio.checked) {
      amountCorrect++;
    }
  }
 }
document.wptform.skor.value = ""+amountCorrect;
  return true;
}
</script>
<?php require_once('inc/footer.inc.php'); ?>