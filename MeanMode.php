<?php

function MeanMode($arr){
  $arrUnique = array_unique($arr);
  $reindexArr = array_values($arrUnique);

  $arrCount = count($arr);
  $reindexArrCount = count($reindexArr);
  for($i=0; $i<$reindexArrCount; $i++){
    $tempVal = $reindexArr[$i];
    $temp = 0;
    for($j=0; $j<$arrCount; $j++){
      if($arr[$j] == $reindexArr[$i]){
        $temp++;
      }
    }

    if($temp > 1 && $tempVal == $temp){
      return 1;
    }
  }
  return 0;
}

$arr = array(5,3,3,3,1);
echo MeanMode($arr)."\n";