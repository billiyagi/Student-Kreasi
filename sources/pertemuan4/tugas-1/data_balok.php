<?php

/**
 * Task 2
 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
 * Luas, Keliling dan Volume
 * p = 29, l = 16, t = 7
 */

// code..
require_once('class_balok.php');

$balok1 = new Balok($p = 29, $l = 16, $t = 7);
$balok2 = new Balok(2, 4, 5);
$balok3 = new Balok(50, 5, 10);
$balok4 = new Balok(10, 5, 8);

$list_balok = [$balok1, $balok2,$balok3, $balok4];
?>



<?php foreach ($list_balok as $key => $value) : ?>

	<div>
		<ul>
			<li><?= $value->getKeliling() ?>cm</li>
			<li><?= $value->getLuas() ?>cm<sup>2</sup></li>
			<li><?= $value->getVolume() ?>cm<sup>3</sup></li>
		</ul>
	</div>

<?php endforeach ?>