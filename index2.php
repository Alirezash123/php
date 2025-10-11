<?php
$name="Hello World";

echo strlen(trim($name));
echo"<br/>";

echo substr(trim(($name)),6,11);

echo"<br/>";

echo str_replace("H","d",$name);
?>