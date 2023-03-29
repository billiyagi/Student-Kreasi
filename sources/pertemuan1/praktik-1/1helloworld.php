<?php
echo "<h1>hello world</h1> <br>";
$nama = "echo";
echo "my name is " . $nama;

echo "<br>";
echo "document path " . $_SERVER['DOCUMENT_ROOT'];

function h1($text)
{
  return "<h1>" . $text . "</h1>";
}

echo h1("sup");
