<?php

$aplikasi[1] = 'getAkademik';
$aplikasi[2] = 'getFinansi';
$aplikasi[3] = 'getPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

// var_dump(count($aplikasi));

$i = 1;

while ($i <= count($aplikasi)) {
  // var_dump($aplikasi[$i]);
  echo $aplikasi[$i];
  echo '<br/>';
  $i++;
}

?>