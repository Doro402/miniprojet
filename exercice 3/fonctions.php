<?php require_once"constants.php";
//1 longueur
function long_chaine ($chaine){
     $c=0;
      while(isset($chaine[$c]) &&$chaine[$c]!= ''){ 
          $c= $c+1;
         }
          return $c;
         }
         //2 taille
         function taille_chaine($chaine){
              $i=0;
               while(isset($chaine[$i])){
                    $i++;
                 }
                  return $i;
                 }
// caractere numerique
function is_car_numeric ($c){ 
    if ($c >= 0 && $c <= 9){
         return true;
         }
          return false; 
        }

// caractere 1 deul
function is_car_alpha( $letter) {
     if(long_chaine($letter)==1){ 
         return (($letter >= "a" && $letter <= "z" ) ||($letter >= "A" && $letter <= "Z")); 
        } 
    }
// chaine numerique
function is_chaine_numeric($chaine){ 
    for ($i=0;$i<long_chaine($chaine);$i++){ 
        if (!is_car_numeric($chaine[$i])){ 
            return false;
         } 
        }
         return true;
         }
//caractere present in chaine
function is_car_present_in_chaine($car, $chaine){
     for ($i=0;$i<long_chaine($chaine);$i++){
          if ($chaine[$i]== $car){
               return true;
             }
             } 
             return false;
 }
 // function inverse aly
 function invers_car_case($car){
      $min = 'a';
       $maj = 'A'; 
       if(long_chaine($car)==1){
            for ($i=0; $i < 26; $i++) {
                 if ($car==$min) {
                      return $maj; 
                    }
                    elseif ($car==$maj) {
                         return $min; 
                        }
                         $min++;
                          $maj++;
                         } 
                        } 
                        return $car;
                     }

// chaine vide 
function is_empty($chaine){ 
    if(long_chaine($chaine)==0){ 
        return true;
     } 
     return false;
     }
// delete
function delete_spc_before_after($chaine){
     $debut=0;
      $fin=long_chaine($chaine)-1; 
      $newChaine = '';
       if($chaine==''){ return $chaine; }
        while ($chaine[$debut]==' '){ 
            $debut++;
             if(!isset($chaine[$debut])){
                  return '';
                 } 
                } 
                while ($chaine[$fin]==' '){ $fin--; }
                 for ($i=$debut; $i <=$fin ; $i++) { $newChaine.=$chaine[$i]; 
                } 
                return $newChaine;
             }


 

