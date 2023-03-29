<?php
session_start();
require_once('database.php');
require_once('session.php');
require_once('helper.php');
require_once('pdo.php');
require_once('vendor/autoload.php');

use voku\helper\AntiXSS;

$antiXSS = new AntiXSS();
$db = new DB($dbh);
