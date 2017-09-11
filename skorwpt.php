<?php
error_reporting(E_STRICT);
session_start();
require_once('inc/header.inc.php');
require_once('inc/db.inc.php');
$skor=$_POST['skor'];
$sql = "UPDATE user SET nilaiwpt = ? WHERE telepon = ?";
$pdo->prepare($sql)->execute([$skor, $_SESSION['telepon']]);
?>

<div class="container" >
	<div class="row" >
		<div class="col s12" >
			<div class="card">
				<div class="card-content">
					<h5> Skor Tes WPT anda : <?php echo "$skor"; ?></h5>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
header("location: ./mode.php");

require_once('inc/footer.inc.php'); ?>
