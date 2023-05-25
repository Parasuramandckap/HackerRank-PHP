<?php


//Array plus minus 
function plusMinus($arr) {
    $positive =0;
    $negative = 0;
    $zero = 0;
    $n =count($arr);
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]>0){
            $positive++;
        }
        else if($arr[$i]<0){
            $negative++;
        }
        else{
            $zero++;
        }
    }
    $positiveRatio = number_format($positive / $n,6);
    $negativeRatio = number_format($negative / $n,6);
    $zeroRatio = number_format($zero / $n,6);
    return[$positiveRatio,$negativeRatio,$zeroRatio];
    
}
$array = [1,1,0,-1,-1];
print_r( plusMinus($array));