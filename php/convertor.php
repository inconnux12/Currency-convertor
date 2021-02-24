<?php
include "data.php";
function convertor($sel1,$sel2,$val){
    $tmp=0;
    global $symbol,$equiv;
    if($sel1=="EUR"){
      $i=array_search($sel2,$symbol);
      echo $val*$equiv[$i];
    }
    else{
       if($sel2=="EUR"){
          $i=array_search($sel1,$symbol);
          echo $val/$equiv[$i];
       }
       else{
          $tmp=(1/$equiv[array_search($sel1,$symbol)])*$equiv[array_search($sel2,$symbol)];
          echo $tmp*$val;
       }
    }
 }
?>