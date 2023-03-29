<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Nilai Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>



  <div class="w-75 mt-5 mx-auto p-4 border shadow-sm">
    <h2>Hasil Rekap Nilai Anda</h2>
    
    <hr>

    <?php

    // create variable to get posted data

    if(isset($_POST['proses'])){
      $nama_lengkap = $_POST["nama_lengkap"];
    $mata_kuliah = $_POST["mata_kuliah"];
    $nilai_uts = $_POST["nilai_uts"];
    $nilai_uas = $_POST["nilai_uas"];
    $nilai_tugas = $_POST["nilai_tugas"];

    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // shows data results

    echo  "<p>Nama :  $nama_lengkap </p>";
    echo  "<p>Mata Kuliah :  $mata_kuliah </p>";
    echo  "<p>Nilai UTS :  $nilai_uts </p>";
    echo  "<p>Nilai UAS :  $nilai_uas </p>";
    echo  "<p>Nilai Tugas Praktikum :  $nilai_tugas </p>";
    echo  "<hr/>";
    echo  "<p>Rata-rata :  $nilai_total </p>";
    echo  "<hr/>";

    }
    else{
      echo "<p>Anda belum memasukan data nilai. Mohon masukkan data nilai anda <a href='form_nilai.php'>di sini</a>";
    }
    ?>
  </div>


</body>

</html>