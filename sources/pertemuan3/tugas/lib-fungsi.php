<?php

/**
 * Task 4 - Function
 * function kelulusan
 * function grade
 * function predikat
 */


	/**
	 * Function kelulusan, jika:
	 * total nilai lebih dari 55 maka lulus
	 * total nilai kurang dari 55 maka tidak lulus
	 */
function kelulusan($total_nilai)
{
	if ($total_nilai > 55) {
		return 'Lulus';
	} else {
		return 'Tidak Lulus';
	}
}

	/**
	 * Function grade, jika:
	 * total nilai <= 100 maka A
	 * total nilai <= 84 maka B
	 * total nilai <= 69 maka C
	 * total nilai <= 55 maka D
	 * total nilai <= 35 maka E
	 * selain itu maka I
	 */
function grade($total_nilai)
{
	if ($total_nilai <= 35) {
		return "E";
	} elseif ($total_nilai <= 55) {
		return "D";
	} elseif ($total_nilai <= 69) {
		return "C";
	} elseif ($total_nilai <= 84) {
		return "B";
	} elseif ($total_nilai <= 100) {
		return "A";
	} else {
		return "I";
	}
}

	/**
	 * Function predikat, jika:
	 * grade A maka Sangat Memuaskan
	 * grade B maka Memuaskan
	 * grade C maka Cukup
	 * grade D maka Kurang
	 * grade E maka Sangat Kurang
	 * selain itu maka Tidak Ada
	 *
	 * Tips: Gunakan switch untuk mempermudah 
	 * melakukan pengecekan kondisi berdasarkan function grade
	 */
function predikat($grade)
{
	switch ($grade) {
		case 'A':
			return "Sangat Memuaskan";
		case 'B':
			return "Memuaskan";
		case 'C':
			return "Cukup";
		case 'D':
			return "Kurang";
		case 'E':
			return "Sangat Kurang";

		default:
			return "Tidak Ada";
	}
}

$dict_matakuliah = ['pw' => "Pemrograman Web", 
										'ddp' => "Dasar-Dasar Pemrograman", 
										'sts' => "Statistika dan Probabilitas", ];


/**
 * return mata kuliah
 */
function get_matkul($matkul){
	global $dict_matakuliah;
	return $dict_matakuliah[$matkul];
}