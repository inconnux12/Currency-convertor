<?php
include "data.php";
$convertor=function($sel1,$sel2,$val) use($symbol,$equiv){
    $tmp=0;
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
 };
?>
