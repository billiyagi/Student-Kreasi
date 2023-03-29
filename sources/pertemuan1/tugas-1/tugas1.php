<?php
/* TODO: 
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

$fruits = [
  [
    'name' => 'semangka',
    'warna' => 'hijau',
    'stonks' => 9,
    'price' => 8000,
    'decription' => 'buah dengan kadar air yang tinggi',
  ],
  [
    'name' => 'jeruk',
    'warna' => 'oranye',
    'stonks' => 33,
    'price' => 4000,
    'decription' => 'buah dengan vitamin c tinggi',
  ],
  [
    'name' => 'rambutan',
    'warna' => 'merah',
    'stonks' => 19,
    'price' => 5000,
    'decription' => 'merah dengan rambut dan manis',
  ],
  [
    'name' => 'anggur',
    'warna' => 'ungu',
    'stonks' => 20,
    'price' => 6000,
    'decription' => 'ungu dengan daging yang lembut',
  ],
  [
    'name' => 'nanas',
    'warna' => 'kuning',
    'stonks' => 48,
    'price' => 6000,
    'decription' => 'kuning manis, tapi sedikit tajam',
  ],
  [
    'name' => 'durian',
    'warna' => 'hijau muda',
    'stonks' => 10,
    'price' => 25000,
    'decription' => 'si raja buah',
  ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style></style>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        /* TODO:*/


        $counter = 0;
        foreach ($fruits as $fruit) {
          echo "<tr>";
          $counter += 1;
          echo "<td>" . $counter . "</td>";
          foreach ($fruit as $detail) {
            echo "<td>" . $detail . "</td>";
          };
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>