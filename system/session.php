<?php

$currentPageVisited = explode('/', $_SERVER['PHP_SELF']);
$currentPageVisited = end($currentPageVisited);

/** 
 * Periksa Kondisi login pengguna
 */

// Kondisi ketika belum login
if (!isset($_SESSION['userKreasi']) && $currentPageVisited == 'admin.php') {
    header('Location: index.php');

    // Kondisi ketika sudah login
} elseif (isset($_SESSION['userKreasi']) && $currentPageVisited == 'index.php') {
    header('Location: admin.php');
}
