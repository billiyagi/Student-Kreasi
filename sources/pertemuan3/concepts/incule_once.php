<?php
$title = "include_once";
include_once("temp-top.php");
include_once("nofile.php");
?>

<h2>sub header</h2>
<p>include once will continue if file included was not found</p>

<?php
include_once("temp-bottom.php");
?>