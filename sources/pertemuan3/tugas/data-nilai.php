<?php
include_once("header.php");
?>

<div class="m-5 table-container">
	<h2>Data Mahasiswa</h2>
	<table class="table">
		<thead>
				<th>No</th>
				<th>Nama Lengkap</th>
				<th>Mata Kuliah</th>
				<th>UTS</th>
				<th>UAS</th>
				<th>Tugas</th>
				<th>Rerata</th>
				<th>Grade</th>
				<th>Predikat</th>
				<th>Keterangan</th>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Fakhirul</td>
				<td>Statistika dan Probabilitas</td>
				<td>89</td>
				<td>95</td>
				<td>80</td>
				<td>87.95</td>
				<td>A</td>
				<td>Sangat Memuaskan</td>
				<td>Lulus</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Rul</td>
				<td>Statistika dan Probabilitas</td>
				<td>78</td>
				<td>81</td>
				<td>80</td>
				<td>79.75</td>
				<td>B</td>
				<td>Memuaskan</td>
				<td>Lulus</td>
			</tr>

			<?php
			// 
			//  * Task 3
			//  * 1. Import libfungsi.php
			//  * 2. Tampilkan data dalam bentuk table
			//  * 3. Berikan error handling untuk mengatasi ketika form belum disubmit
			//  * Note: Sesuaikan dengan isi table yang sudah ada						
			//

			include_once('lib-fungsi.php');

			if (isset($_POST['submit'])) {
				// get variable
				$nama_lengkap =  $_POST['nama_lengkap'];
				$matkul =  $_POST['matkul'];
				$nilai_uts =  $_POST['nilai_uts'];
				$nilai_uas =  $_POST['nilai_uas'];
				$nilai_tugas =  $_POST['nilai_tugas'];

				$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

				// define variable
				$kelulusan = kelulusan($total_nilai);
				$grade = grade($total_nilai);
				$predikat = predikat($grade);
				$matkul = get_matkul($matkul);

			?>


				<tr>
					<td>3</td>
					<td><?= $nama_lengkap ?></td>
					<td><?= $matkul ?></td>
					<td><?= $nilai_uts ?></td>
					<td><?= $nilai_uas ?></td>
					<td><?= $nilai_tugas ?></td>
					<td><?= number_format($total_nilai, 2,".",",") ?></td>
					<td><?= $grade ?></td>
					<td><?= $predikat ?></td>
					<td><?= $kelulusan ?></td>
				</tr>

			<?php
			}
			?>
		</tbody>
	</table>
</div>

<?php
include_once("footer.php");
?>