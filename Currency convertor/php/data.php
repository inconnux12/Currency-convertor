<?php
   $h="http://data.fixer.io/api/latest";
   $pass="?access_key=17688fcb10855c0a94bccaa8ee944355"; 
   $euros=array();$i=0;
   $symbol=array();
   $equiv=array();
   $tmp=file_get_contents($h.$pass);
   $data1= explode("\"rates\":",$tmp)[1];   
   $data2=explode("{",$data1)[1];
   $data3=explode("}}",$data2)[0];
   $data_final=explode(",",$data3);
  
   foreach($data_final as $nif){
      $euros[$i]=explode(":",$nif);
      $i++;
   }
   foreach($euros as $euro){
      array_push($symbol,$euro[0]);
      array_push($equiv,$euro[1]);
   }
   $symbol=str_replace("\"",null,$symbol);

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