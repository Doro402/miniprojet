<?php require_once"constants.php";

function valid_chaine($t){
    $t= "La vie est belle.";
    if(preg_match("#^[A-Z]{1}.+[.|!|?]$#",$t))
    {
        echo $t."=> est une phrase correcte";
        return true;
    }else {echo"phrase incorrecte";}

    
 
//f2
function correctionPhrases($texte){ 
preg_match_all("#[A-Za-z]{1}[^.!?]*[^.!?]*[0-9]#m",$texte,$phrase);
/*recuperer les phrases*/
$i=0;
foreach($phrase[0] as $value)
{
$value= preg_replace('#\s\s+#',"",$value);
$value= preg_replace('#\'\s+#',"'",$value);
$value= preg_replace('#\(\s+#',"(",$value);
$value= preg_replace('#\s+\)#',")",$value);
$value= preg_replace('#\s+,#',",",$value);
$value= preg_replace('#\s+,#',",",$value);
$value= preg_replace('#,\s+#',",",$value);
$value= preg_replace('#\s+\.#',".",$value);
$tableau[$i]=$value;
$i++;
}
foreach($tableau as $value){
    if (preg_match("#^[a-z]#",$value)){
        $b=strtoupper($value[0]);
        $value=preg_replace("#^[a-z]#",$b,$value);
        $tableauCorrige[]=$value;
        
    }
    else{
    $tableauCorrige[]=$value;
}
}
echo "<pre>";
/*print_r($tabCorrige);*/
echo "</pre>";
}




//f3
function inutil_space($chaine){
    $chaineCorrect=""; /* permet la sovgarde du text*/
    $str = preg_replace('#\s\s+#',' ',$chaine); /*verifie les deux espaces ou plus successifs*/
    for ($i=0; $i <strlen($str) ; $i++) {  /*elimine les espaces apres '*/
        if ($str[$i]=='\'' && $str[$i+1]==' '){/* verifie si le caractere courant est une*/
            $chaineCorrect.=$str[$i];
                $i+=2;
            }
        if($str[$i]==' ' && $str[$i+1]=='\''){
            $i++;
        }
            elseif($str[$i]==',' || $str[$i]==';'|| $str[$i]==':'){/*permet de mettre des espace*/
                $chaineCorrect.=$str[$i];
                $chaineCorrect.=' ';
                $i++;
            }
            $chaineCorrect.$str[$i];
        }
        return $chaineCorrect;
     }
    }