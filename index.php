<?php
$arr1 = [1, 10, 4, 6, 7, 7, 8, 6, 1, 1, 1];
while (($index = array_search(1, $arr1)) !== false) {
  array_splice($arr1, $index, 1);
}

echo '<pre>';
var_dump($arr1);
echo '</pre>';
