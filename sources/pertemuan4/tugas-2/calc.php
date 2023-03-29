<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  class Calculator
  {

    public $a1;
    public $a2;

    public function __construct(int $angka1, int $angka2)
    {
      $this->a1 = $angka1;
      $this->a2 = $angka2;
    }

    public function sum()
    {
      return $this->a1 + $this->a2;
    }
    public function substract()
    {
      return $this->a1 - $this->a2;
    }
    public function divide()
    {
      return $this->a1 / $this->a2;
    }
    public function time()
    {
      return $this->a1 * $this->a2;
    }
  }

  $calc1 = new Calculator(10, 4);

  ?>


  <p><?= $calc1->sum(); ?></p>
  <p><?= $calc1->substract(); ?></p>
  <p><?= $calc1->divide(); ?></p>
  <p><?= $calc1->time(); ?></p>


</body>

</html>