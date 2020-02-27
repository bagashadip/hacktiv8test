<?php

function SecondGreatLow($arr)
{
  $arr_size = sizeof($arr);

  //====== Get Lowest Code Here ======\\

    $INT_MAX = 2147483647;

    if ($arr_size < 2)
    {
        echo(" Array index should be 2 or more ");
        return;
    }

    $firstLow = $secondLow = $INT_MAX;
    for ($i = 0; $i < $arr_size ; $i ++){
        if ($arr[$i] < $firstLow){
            $secondLow = $firstLow;
            $firstLow = $arr[$i];
        } else if ($arr[$i] < $secondLow && $arr[$i] != $firstLow)
          $secondLow = $arr[$i];
    }

    if ($secondLow == $INT_MAX)
        echo("No second lowest");
    else
        echo $secondLow." ";

    //====== Get Greatest Code Here ======\\

    if ($arr_size < 2)
    {
        echo(" Array index should be 2 or more ");
        return;
    }

    $firstGreat = $secondGreat = PHP_INT_MIN;
    for ($i = 0; $i < $arr_size ; $i++)
    {
        if ($arr[$i] > $firstGreat){
            $secondGreat = $firstGreat;
            $firstGreat = $arr[$i];
        } else if ($arr[$i] > $secondGreat && $arr[$i] != $firstGreat)
            $secondGreat = $arr[$i];
    }
    if ($secondGreat == PHP_INT_MIN)
        echo("There is no second largest element\n");
    else
        echo $secondGreat."\n";
}



// Test input Here
$arr = array(7,7,12,98,106);
SecondGreatLow($arr);