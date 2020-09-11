<?php
$diff = time() - strtotime($row['created']);

$s = 60; 
$h = $s * 60; 
$d = $h * 24; 
$y = $d * 10; 

if ($diff < $s) {
    $result_t = $diff . '초전';
} elseif ($h > $diff && $diff >= $s) {
    $result_t = round($diff/$s) . '분전';
} elseif ($d > $diff && $diff >= $h) {
    $result_t = round($diff/$h) . '시간전';
} elseif ($y > $diff && $diff >= $d) {
    $result_t = round($diff/$d) . '일전';
} else {
  $result_t = date('Y.m.d.', strtotime($row['created']));
}
?>