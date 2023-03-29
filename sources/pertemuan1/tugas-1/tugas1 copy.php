<?php
/* TODO: 
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

$fruits = [
  [
    'name' => 'semangka',
    'color' => 'hijau',
    'stocks' => 9,
    'price' => 8000,
    'description' => 'buah dengan kadar air yang tinggi',
  ],
  [
    'name' => 'jeruk',
    'color' => 'oranye',
    'stocks' => 33,
    'price' => 4000,
    'description' => 'buah dengan vitamin c tinggi',
  ],
  [
    'name' => 'rambutan',
    'color' => 'merah',
    'stocks' => 19,
    'price' => 5000,
    'description' => 'merah dengan rambut dan manis',
  ],
  [
    'name' => 'anggur',
    'color' => 'ungu',
    'stocks' => 20,
    'price' => 6000,
    'description' => 'ungu dengan daging yang lembut',
  ],
  [
    'name' => 'nanas',
    'color' => 'kuning',
    'stocks' => 48,
    'price' => 6000,
    'description' => 'kuning manis, tapi sedikit tajam',
  ],
  [
    'name' => 'durian',
    'color' => 'hijau muda',
    'stocks' => 10,
    'price' => 25000,
    'description' => 'si raja buah',
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
          <th>color</th>
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

          echo "<td>" . $fruit['name'] . "</td>";
          echo "<td>" . $fruit['color'] . "</td>";
          echo "<td>" . $fruit['stocks'] . "</td>";
          echo "<td>" . $fruit['price'] . "</td>";
          echo "<td>" . $fruit['description'] . "</td>";

          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>