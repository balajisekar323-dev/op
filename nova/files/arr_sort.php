<?php
$arr = array("Rilvan", "Fardeen", "Rayan", "Hasan");
echo "Original array:<br>";
echo "<pre>" . print_r($arr, true) . "</pre>";
// sorting array using 'sort' function
sort($arr);
echo "After sort() (ascending):<br>";
echo "<pre>" . print_r($arr, true) . "</pre>";
// reverse sorting array using 'rsort' function
rsort($arr);
echo "After rsort() (descending):<br>";
echo "<pre>" . print_r($arr, true) . "</pre>";
?>
