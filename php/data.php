<?php
   $h="http://data.fixer.io/api/latest";
   $pass="?access_key=17688fcb10855c0a94bccaa8ee944355"; 
   $symbol=array();
   $equiv=array();
   $tmp=file_get_contents($h.$pass);
   $obj=json_decode($tmp,true);
   $data_final=$obj["rates"];
   $symbol=array_keys($data_final);
   foreach($data_final as $euro){
      array_push($equiv,$euro);
   }
?>