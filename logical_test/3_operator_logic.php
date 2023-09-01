<?php

function pembagian(int $bilanganBulat, int $pembagi) : int {
  if ($pembagi === 0 || $pembagi < 0) {
    return "Pembagi Harus Lebih Dari 0";
  }

  if ($pembagi > $bilanganBulat) {
    return "Pembagi Harus Lebih Dari Yang Dibagi";
  }

  $i = 0;
  while ($bilanganBulat >= $pembagi) {
    $bilanganBulat = $bilanganBulat - $pembagi;
    $i++;
  }

  return $i;
}

echo pembagian(8,4);

?>
