<?php require_once('inc/header.inc.php'); ?>

<section id="quiz-wpt-sample">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="title center-align">
				 <h3>WPT Sample</h3>
				</div>
			</div>
		</div>	
		<form name="wptform" class="form-group" method="post">
		 <input type="hidden" name="skor" value="0">
			<div class="row">
				<div class="col s12">

					<!-- question 1 -->
					<div class="card">
			            <div class="card-content">
			              <span class="card-title">
			              	1. MENUAI adalah lawan kata dari 
			              	<small><p>Jawaban yang benar adalah “menabur”. Maka, pilihlah huruf E pada pilihan di bawah</p></small>
			              </span>
			            </div>
			            <div class="card-action">
			            	<ul class="answer">
			            		<li>
					            	<input name="q1" value="a" id="q1-a" type="radio" />
									<label for="q1-a">A. bendapat</label>
								</li>
								<li>
									<input name="q1" value="a" id="q1-b" type="radio" />
									<label for="q1-b">B. bersorak</label>
								</li>
								<li>						
									<input name="q1" value="a" id="q1-c" type="radio" />
									<label for="q1-c">C. melanjutkan</label>
								</li>
								<li>							
									<input name="q1" value="corr" id="q1-d" type="radio" />
									<label for="q1-d">D. berada</label>
								</li>
								<li>
									<input name="q1" value="a" id="q1-e" type="radio" />
									<label for="q1-e">E. menabur</label>
								</li>
							</ul>
			            </div>
			        </div><!--card-->

			        <!-- question 2 -->
			        <div class="card">
			            <div class="card-content">
			              <span class="card-title">
			              	2. Harga setiap kotak ‘paper clip’ adalah 23 rupiah. Berapa harga 4 kotak?………………………….
			              	<small><p>Jawabannya adalahRp.92. Tulislah angka ’Rp. 92’ dalam kolom teks di bawah.</p></small>
			              </span>
			            </div>
			            <div class="card-action">
			            	<input name="q2" class="form-control" id="q2-a" type="text" />
			            </div>
			        </div><!--card-->

			        <!-- question 3 -->
			        <div class="card">
			            <div class="card-content">
			              <span class="card-title">
			              	3. MINER MINOR - Apakah kata-kata ini
			              	<small><p>Jawaban yang benar adalah ‘tidak memiliki arti sama atau berlawanan (Pilihan C). Maka pilihlah
							C pada pilihan dibawah.</p></small>
			              </span>
			            </div>
			            <div class="card-action">
			            	<ul class="answer">
			            		<li>
					            	<input name="q3" value="a" id="q3-a" type="radio" />
									<label for="q3-a">A. Memiliki arti sama</label>
								</li>
								<li>
									<input name="q3" value="a" id="q3-b" type="radio" />
									<label for="q3-b">B. Memiliki arti berlawanan</label>
								</li>
								<li>						
									<input name="q3" value="a" id="q3-c" type="radio" />
									<label for="q3-c">C. Tidak memiliki arti sama atau berlawanan</label>
								</li>
							</ul>
			            </div>
			        </div><!--card-->

				</div><!--col-->
				<div class="col s12">
					<a href="wpt.php" class="btn-large col s8 push-s2 waves-effect waves-light">Start WPT Test
						<i class="material-icons right">play_arrow</i>
					</a>
				</div>
			</div><!--row-->
		</form>
	</div><!--container-->
</section>
<?php require_once('inc/footer.inc.php'); ?>
