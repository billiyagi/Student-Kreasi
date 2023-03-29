<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Legends Tier Checker</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <header role="banner">
      <h2>Mobile Legends Tier Checker - STTNF</h2>
      <a href="">Home</a> | <a href="">Tier Checker</a> | <a href="">About</a> | <a href="">Login</a>
      <hr />
    </header>
    <h1>Welcome Home!</h1>
    <div class="container my-5">
      <h1 class="text-center mb-4">Mobile Legend Tier Checker</h1>
      <form action="" method="post">
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
        <button name="submit" type="submit" class="btn btn-primary">Check Tier</button>
      </form>
    </div>
    <footer class="text-center py-3 bg-light mt-5">
      <p>Created by <a href="#">Pusinfo NF &copy;2017</p>
    </footer>
</body>

</html>