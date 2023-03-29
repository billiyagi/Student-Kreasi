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
  </style>
</head>

<body>

  <?php
  /*
  variable sistem
  built in variable in php
  */

  echo "document path root " . $_SERVER["DOCUMENT_ROOT"];
  echo '<br>';


  // user variable
  // variabel yang dibuat user

  $name = "ahmad";
  $age = 15;
  $weight = 50;

  $name = "sahrija"; // overwrite an existing variable

  // show variable on documents
  echo "hi my name is " . $name . ", i'm " . $age;

  echo '<br>';


  ?>

</body>

</html>