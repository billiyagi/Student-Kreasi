<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="post" action="nilai_siswa.php">
    <h2>Form Nilai</h2>
    <hr />
    <div class="container px-3">
      <div class="form-group row mb-3">
        <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
          <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" required>
        </div>
      </div>
      <div class="form-group row mb-3">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
        <div class="col-8">
          <select id="matkul" name="mata_kuliah" required="required" class="form-select">
            <option value="">----- Pilih Mata Kuliah -----</option>
            <option value="ddp">Dasar Dasar Pemrograman</option>
            <option value="pweb">Pemrograman Web</option>
            <option value="statistik">Statistika dan Probabilitas</option>
          </select>
        </div>
      </div>
      <div class="form-group row mb-3">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" type="number" min="0" max="100" class="number-input form-control" placeholder="Masukan angka..." required>
        </div>
      </div>
      <div class="form-group row mb-3">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
        <div class="col-8">
          <input id="nilai_uas" name="nilai_uas" type="number" min="0" max="100" class="number-input form-control" placeholder="Masukan angka..." required oninput="checkValue(this);">
        </div>
      </div>
      <div class="form-group row mb-3">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum</label>
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" type="number" min="0" max="100" class="number-input form-control" placeholder="Masukan angka..." required>
        </div>
      </div>
      <div class="form-group row mb-3">
        <div class="offset-4 col-8">
          <input type="submit" name="proses" value="Submit" class="btn btn-primary">
        </div>
      </div>
    </div>
  </form>

  <script>
    // this function will convert a string to an integer
    // beware this will throw an exception if the value does not parse properly


    // this checks the value and updates it on the control, if needed
    function checkValue(sender) {
      const min = sender.getAttribute("min");
      const max = sender.getAttribute("max");
      console.log(max);

      value = sender.value;


      if(sender.value > max){
        console.log("too much");
        sender.value = max;
      }
    }
  </script>

</body>

</html>