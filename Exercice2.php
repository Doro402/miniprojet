<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEECICE 2</title>
<link rel="stylesheet"href="css/exo1.css">
<link rel="stylesheet" href="css.css">
</head>
<body>
<form class="box" method="POST" >
        <select name="choix">
            <h1>EXCERCIE 2</h1>    
           <option value="langue">choix langue </option>
            <option value="français">français </option>
            <option value="english">english</option>
            <input type="submit" name="numero" value="valider">
         </select>
        </form>
    </body>
</html>
<?php
function langue(array $tab){
$nb=0;
echo"<table>";
for($i=0;$i<4;$i++){
    echo'<tr>';
    for($j=0;$j<3;$j++){
        echo"<td>";
        echo $nb+=1;
        echo"</td>";
        echo"<td>".$tab[$i][$j];
    }
echo"</td>";
}
echo"</tr>";
echo"</table>";
}
if (isset ($_POST['choix']) && !empty($_POST['choix'])) {
    
    if ($_POST ['choix']=="français"){
        $fr=array(
            array   ('Janvier', 'Février', 'Mars'),
            array( 'Avril', 'Mai', 'Juin'),
            array('Juillet', 'Août', 'Septembre'),
            array('Octobre', 'Novembre', 'Décembre'));
            
            langue($fr);
        }
        else
        if ($_POST ['choix']=="english") {
            $en=array(
            array('January','February','Marsh'),
            array('April','May',' june'),
            array(' July',' August','Septembre'),
            array('October',' November',' December'));
                                
      langue($en);
  }   
  
  
}
?>

