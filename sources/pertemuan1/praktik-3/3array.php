<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: consolas;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: Arial, Helvetica, sans-serif;
      text-transform: capitalize;
    }
  </style>
</head>

<body>


  <?php
  /* PHP Array

    Membuat array kosong
    1. $fruits = array();
    2. $fruits = [];

    Membuat array beserta isinya
    1. $fruits = array("Pepaya", "Mangga", "Delima", "Kiwi");
    2. $fruits = ["Pepaya", "Mangga", "Delima", "Kiwi"];

    Menampilkan isi array
    1. var_dump($fruits);
    2. print_r($fruits);

    # Simple array
    $fruits = ["Pisang", "Melon", "Berry"];

    # Associative array
    $fruits = [
      "Pisang" => "Kuning", 
      "Melon" => "Hijau", 
      "Berry" => "Merah"
    ];

    # Multidimensional array
    $fruits = [
      ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
      ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
      ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
    ];

  // Simple array
    $fruits = ["Pisang", "Melon", "Berry"];

    foreach ($fruits as $fruit) {
      echo $fruit;
      echo '<br>';
    }

    /* Output:
    Pisang
    Melon
    Berry
    */

  // simple array
  echo ('--------simple array--------<br>');
  $fruits = ["Pisang", "Melon", "Berry"];

  foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
  };


  // Associative array
  echo ('--------associative array--------<br>');
  $a_fruits = [
    "Pisang" => "Kuning",
    "Melon" => "Hijau",
    "Berry" => "Merah"
  ];

  foreach ($a_fruits as $fruit) {
    echo $fruit;
    echo '<br>';
  }

  /* Output:
    Kuning
    Hijau
    Merah
    */


  // 
  echo "<h4>print array using var_dump() function:</h4>";
  echo var_dump($a_fruits);
  echo "<h4>print array using print_r() function:</h4>";
  print_r($a_fruits);



  // Multidimensional array
  $m_fruits = [
    ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
    ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
    ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
  ];

  echo "<h3>using foreach loop</h3>";
  foreach ($m_fruits as $fruit) {
    echo '<li>' . $fruit["name"] . '</li>';
    echo '<li>' . $fruit["color"] . '</li>';
    echo '<li>' . $fruit["stock"] . '</li>';
    echo '<li>' . $fruit["price"] . '</li>';
    echo '<br>';
  };



  echo "<h3>using nested loop</h3>";
  foreach ($m_fruits as $fruit) {
    foreach ($fruit as $property) {
      print "<li>" . $fruit["name"] . $property . "</li>";
    };

    echo '<br>';
  }
  /* Output:
    Pisang
    Kuning
    20
    15000

    Melon
    Hijau
    15
    28000

    Berry
    Merah
    8
    12000
    */
  ?>