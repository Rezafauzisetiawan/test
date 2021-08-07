<?php
  $nilairapor = 75;
  if($nilairapor >=  80){
      echo "GRADE A";
  }
  else if($nilairapor >= 70){
      echo "GRADE B";
  }
  else if($nilairapor >= 60){
    echo "GRADE C";
    }
    else if ($nilairapor >= 1){
        echo "GRADE D";
    }
else{
    echo "angka harus diantara 1 - 100";
}
   ?>