<?php
error_reporting(E_STRICT);
session_start();
require_once('inc/header.inc.php');
require_once('inc/db.inc.php');
$skor=$_POST['skor'];
$sql = "UPDATE user SET nilaiCfit = ? WHERE telepon = ?";
$pdo->prepare($sql)->execute([$skor, $_SESSION['telepon']]);
?>

<div class="container" >
	<div class="row" >
		<div class="col s12" >
			<div class="card">
				<div class="card-content">
					<h2 class="center-align">Result</h2>
					<?php $result = $pdo->prepare('SELECT distinct nilaiwpt,nilaiCfit from user WHERE telepon = ?'); ?>
						<p><h5> Skor Tes WPT anda : <?php $result->execute([$_SESSION['telepon']]);
						foreach ($result as $row)
							{
							   echo $row['nilaiwpt'] . "\n";
							}

							?><p><h5> Skor Tes CFIT anda : <?php $result->execute([$_SESSION['telepon']]);
						foreach ($result as $row)
							{
							   echo $row['nilaiCfit'] . "\n";
							}

							?>
						</h5></p>
						<h5><center> Thank you
						<!--<p><a href="logout.php">Selesai</a></p>-->
						</center></h5>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
