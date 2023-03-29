<?php
include_once 'top.php';
include_once("libfunction.php");
?>

<div class="container my-5">
	<h1 class="text-center mb-4">Mobile Legend Tier Checker</h1>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<div class="form-floating mb-3">
			<label for="nickname">Nickname</label>
			<input type="text" class="form-control" id="nickname" name="nickname" required>
		</div>
		<div class="form-floating mb-3">
			<label for="jumlahMenang">Jumlah Menang</label>
			<input type="number" class="form-control" id="jumlahMenang" name="jumlahMenang" required>
		</div>
		<div class="form-floating mb-3">
			<label for="jumlahKalah">Jumlah Kalah</label>
			<input type="number" class="form-control" id="jumlahKalah" name="jumlahKalah" required>
		</div>
		<div class="form-group">
		</div>
		<button name="checkwinrate" type="submit" class="btn btn-primary">Check Tier</button>
	</form>
</div>

<?php
if (isset($_POST['checkwinrate'])) {

	$nickname = $_POST["nickname"];
	$lose = $_POST["jumlahKalah"];
	$win = $_POST["jumlahMenang"];

	$winrate = winratecheck($win, $lose);
	$tier = tiercheck($winrate);
	$predikat = predikatcheck($tier);

?>

	<div class="result card p-3">
		<div class="card-header">
			<h2>Hasil</h2>
		</div>

		<div class="card-body">
			<div class='large nickname'>
				<h3 class="infromation-title">Nick Name</h3>
				<p><?= $nickname ?></p>
			</div>
			<div class="large win">
				<h3 class="infromation-title">Win Match</h3>
				<p><?= $win ?></p>
			</div>
			<div class="large lose">
				<h3 class="infromation-title">Lose Match</h3>
				<p><?= $lose ?></p>
			</div>
			<div class="large winrate">
				<h3 class="infromation-title">Winrate</h3>
				<p><?= $winrate ?>%</p>
			</div>
		</div>

	</div>

<?php
}
?>





<?php
include_once 'bottom.php';
?>