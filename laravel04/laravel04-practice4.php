<?php
 function max_array($arr){
 $max_number = $arr[0];
 for($i=1;$i<count($arr);$i++){
     if ($max_number<$arr[$i]){
         $max_number = $arr[$i];
     }
   }
   return $max_number;
 }
 echo max_array(array(1,3,5,7,9));