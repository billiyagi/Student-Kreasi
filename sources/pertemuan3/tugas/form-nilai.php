<!-- /**
* Task 2
* 1. Rapihkan form ini
* 2. Gunakan method POST
*/ -->
<?php

include_once("header.php");

?>

<div class="container m-5">
	<h2 class="text-center mb-4">Form Nilai</h2>
	<form action="data-nilai.php" method="post" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
		<div class="container px-3">
			<div class="form-group row mb-3">
				<label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
				<div class="col-8">
					<input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" required>
				</div>
			</div>
			<div class="form-group row mb-3">
				<label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
				<div class="col-8">
					<select name="matkul" id="matkul" required="required" class="form-select">
						<option value="">----- Pilih Mata Kuliah -----</option>
						<option value="ddp">Dasar Dasar Pemrograman</option>
						<option value="pw">Pemrograman Web</option>
						<option value="sts">Statistika dan Probabilitas</option>
					</select>
				</div>
			</div>
			<div class="form-group row mb-3">
				<label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
				<div class="col-8">
					<input name="nilai_uts" id="nilai_uts" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
				</div>
			</div>
			<div class="form-group row mb-3">
				<label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
				<div class="col-8">
					<input name="nilai_uas" id="nilai_uas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
				</div>
			</div>
			<div class="form-group row mb-3">
				<label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum</label>
				<div class="col-8">
					<input name="nilai_tugas" id="nilai_tugas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
				</div>
			</div>
			<div class="form-group row mb-3">
				<div class="offset-4 col-8">
					<input name="submit" type="submit" value="Submit" class="btn btn-primary">
				</div>
			</div>
		</div>
	</form>
</div>

<?php
include_once("footer.php");
?>