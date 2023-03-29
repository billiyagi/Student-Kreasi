<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    #hasil-pesanan p {
      text-transform: capitalize;
    }
  </style>
</head>

<body>
  <form class="w-75 mt-5 mx-auto p-4 border shadow-sm" method="GET" action="form_belanja.php">
    <h2>Form Belanja</h2>
    <hr />
    <div class="container px-3">
      <div class="form-group row">
        <label for="custname" class="col-4 col-form-label">Customer</label>
        <div class="col-8">
          <input id="custname" name="custname" placeholder="Masukan nama customer" type="text" class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Pilih product</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="product" id="baju" value="baju" type="radio" class="custom-control-input" required>
            <label for="baju" class="custom-control-label">Baju</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="product" id="topi" value="topi" type="radio" class="custom-control-input" required>
            <label for="topi" class="custom-control-label">Topi</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="product" id="jamtangan" value="jam tangan" type="radio" class="custom-control-input" required>
            <label for="jamtangan" class="custom-control-label">Jam Tangan</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
          <input name="qty" id="jumlah" placeholder="Jumlah beli" type="number" min=1 class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </div>
      </div>
      <div class="form-group">
        <p class="my-1">List Harga</p>
        <ol>
          <li>Baju: 100.000</li>
          <li>Topi: 20.000</li>
          <li>Jam Tangan: 150.000</li>
        </ol>
      </div>
    </div>
  </form>


  <div id="hasil-pesanan" class="card w-75 m-5 mx-auto p-4 border shadow-sm">

    <h3>Hasil Pesanan</h3>
    <hr />

    <!-- hasil pesanan -->
    <?php

    if (isset($_GET['submit'])) {
      $submit = $_GET["submit"];
      $custname = $_GET["custname"];
      $product = $_GET["product"];
      $qty = $_GET["qty"];

      switch ($product) {
        case 'baju':
          $total = $qty * 100000;
          break;
        case 'topi':
          $total = $qty * 20000;
          break;
        case 'jamtangan':
          $total = $qty * 150000;
          break;
      };

      // format number
      $total = number_format($total, 2, ",", ".");

      // print result
      echo "<p>Submit : $submit </p>";
      echo "<p>Nama Pelanggan : $custname</p>";
      echo "<p>Produk yang dibeli : $product</p>";
      echo "<p>Jumlah pembelian : $qty</p>";
      echo "<p>total harga : Rp. $total</p>";
    }

    ?>

  </div>

</body>

</html>