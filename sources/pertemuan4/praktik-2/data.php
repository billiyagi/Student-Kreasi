<?php
require("class.php");

$lingkaran1 = new Lingkaran(4);


echo $lingkaran1->getArea();
echo "<br>";
?>

<p>Nilai &pi; = <?= Lingkaran::PHI ?></p>
<p>Keliling Lingkaran = <?= $lingkaran1->getPrivate("jarijari") ?> cm</p>
<p>Keliling Lingkaran = <?= $lingkaran1->getCircum() ?> cm</p>
<p>Luas Lingkaran = <?= $lingkaran1->getArea() ?> cm</p>