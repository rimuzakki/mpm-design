<!DOCTYPE html>
<html>
<head>
	<title>MPM</title>
	<link rel="stylesheet" href="css/materialize.min.css">
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
	      <ul class="right">
	        <li><a href="#">Timer</a></li>
	      </ul>
	    </div>
  	</nav>
</div>


<section id="quiz">
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
			</div><!--row-->
		</form>
	</div><!--container-->
</section>
</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
</html>