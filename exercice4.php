<?php
  for($i = 0; $i < 301; $i++) {
    if($i % 3 == 0) {
      echo "Fizz";
    }
    elseif($i % 5 == 0) {
      echo "Buzz";
      }
    elseif($i % 5 == 0 AND $i % 3 == 0) {
      echo "Fizzbuzz";
    }
    else {
      echo $i;
    }
  }
?>
