<?php

  for ($i=1; $i <= 50 ; $i++) { 
    if ($i % 3 === 0 && $i % 5 === 0) {
      echo "FooBar";
      echo "   ";
    } elseif ($i % 3 === 0) {
      echo "Foo";
      echo "   ";
    } elseif ($i % 5 === 0) {
      echo "Bar";
      echo "   ";
    } else {
      echo $i;
      echo "   ";
    }
  }

?>