<?php
function miniMaxSum($arr) {
  $min = $arr[0];
  $max = $arr[0];

$MinimunSum = 0;
$MaximunSum = 0;
for($i=0;$i<=count($arr)-1;$i++){
  if($arr[$i]<$min){
     $min = $arr[$i];
  }
  if($arr[$i]>$max){
      $max = $arr[$i];
  }
}

for($j=0;$j<=count($arr)-1;$j++){
   if($max != $arr[$j]){
       $MinimunSum+= $arr[$j];
   }
   if($min != $arr[$j]){
       $MaximunSum+= $arr[$j];
   }
}
  echo $MinimunSum." ".$MaximunSum;
}
miniMaxSum([7,69,2,221,8974]);