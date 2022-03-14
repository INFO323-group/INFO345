<?php
$url = ['index2.php', 'index3.php'];
shuffle($url);
echo "<div class='formpage'>";
echo "<form action='" . $url[0] . "' method='POST' style='background-color: lavender; border: 1px solid black;'>"
?>
