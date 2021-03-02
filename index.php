<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/ico.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>device</title>
</head>
<body>
<?php include "php/convertor.php"?>
<?php include "php/select_options.php"?>
    <div class="containere">
        <div class="rowe">
            <div class="col_md_12e">
                <div class="logo_con">
                    <div class="img">
                        <i class="fa fa-money money"></i>
                    </div>
                    <div class="tlt">change devise</div>
                </div>
                <form class="fr" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
                    <div class="mb-3e mb-m">
                        <?php select("devise1","dev1");?>
                        <div class="inpt_l">
                            <label class="form-labele label_before " id="label_e" for="ent">MONTANT D'entré:</label>
                            <input type="number" step="any" class="inpute txt" id="ent" name="ent" value=<?php echo ((empty($_POST['ent'])) ? " ": $_POST['ent']);?> />
                        </div>  
                    </div>
                    <div class="sub" type="submit">
                        <button class="btn" name="submit" >
                            <i class="fa fa-arrow-right arrow" ></i>
                        </button>
                    </div>
                    <div class="mb-3e mb-p"> 
                        <?php select("devise2","dev2"); ?>                    
                        <div class="inpt_l">
                            <label class="form-labele label_before label_after" id="label_s" for="srt">MONTANT de sortie</label>
                            <input type="number" name="srt" step="0.001" id="srt" disabled class="inpute pass" value=<?php if(isset($_POST['submit'])){$convertor($_POST['devise1'],$_POST['devise2'],$_POST['ent']);}?> />
                        </div>
                    </div>
                    <div class="mb-3e">
                        <span onclick="switch_devise()">switch</span>
                    </div>
                    <script>if((document.getElementById('ent').value==0)&&(document.getElementById('srt').value==0)){document.getElementById('label_e').classList.add('label_after'); document.getElementById('ent').focus(); }else{document.getElementById('label_e').classList.add('label_after');}</script>
                </form>
            </div>
        </div>
    </div> 
    <script src="js/main.js"></script>
</body>
</html>
