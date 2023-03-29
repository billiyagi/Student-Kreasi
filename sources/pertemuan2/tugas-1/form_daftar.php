<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>

<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="card">
		<h1>Form Pendaftaran</h1>
		<form action="hasil_daftar.php" method="post">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="tel" class="form-control" name="telepon" id="telepon">
			</div>
			<button name="proses" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>

</html>
