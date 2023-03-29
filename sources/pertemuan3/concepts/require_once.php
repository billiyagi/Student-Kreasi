<?php
$title = "require_once";
require_once("temp-top.php");
require_once("nofile.php");
?>

<h2>sub header</h2>
<p>require once will error if file included was not found</p>

<?php
require_once("temp-bottom.php");
?>