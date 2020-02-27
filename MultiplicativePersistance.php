<?php

function MultiplicativePersistance($num){
  $num = abs($num);
  $strLen = strlen($num);

  if($strLen == 1){
    echo $strLen."\n";
    exit;
  }else if($strLen > 2){
    echo "Total value cannot more than 2 values\n";
    exit;
  }

  $strSplit = str_split($num);
  $count = 0;
  $val = 0;
  while(count($strSplit) > 1){
    $val = $strSplit[0] * $strSplit[1];
    $strSplit = str_split($val);
    $count++;
  }

  echo $count."\n";

}

// Input the number in function
MultiplicativePersistance(39);