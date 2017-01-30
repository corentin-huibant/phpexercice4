<?php
  for($i = 0; $i < 301; $i++) {
    if($i % 3 == 0) {
      echo "Fizz";
      echo "Fizzbuzz";
    }
    elseif($i % 5 == 0) {
      echo "Buzz";
      echo "Fizzbuzz";
    }
    else {
      echo $i;
    }
    }
  ?>
