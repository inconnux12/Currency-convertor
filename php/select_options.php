<?php
include "data.php";
$select=function ($name,$id)use($symbol){
    ?>
    <select name=<?php echo $name;?> class=<?php echo"sel ".$id ;?> id=<?php echo $id?>>  
            <?php foreach($symbol as $sy){ ?>    
                <option value="<?php echo $sy;?>" <?= !empty($_POST) && $_POST[$name] == $sy ? 'selected' : '' ?>><?php echo $sy;?></option>
            <?php } ?>           
</select>
       <?php } ?>
