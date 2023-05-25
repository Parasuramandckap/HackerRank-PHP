<?php
function miniMaxSum($arr) {
    $MinimunSum = 0;
    $MaximunSum = 0;
    for($i=0;$i<count($arr);$i++){
          if($i>=0 && $i<count($arr)-1){
              $MinimunSum+= $arr[$i];
          }
          if($i>=1){
            $MaximunSum+= $arr[$i];  
          }
  
  
    }
    echo $MinimunSum." ".$MaximunSum;
   
  }
  miniMaxSum([1,3,5,7,9]);