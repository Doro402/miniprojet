<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document
    
    </title>
    <link rel="stylesheet" href="Exercice2.css">
</head>
<body>

    <p>Saisir un nombre supérieur à  10000</p>
    <form method="post" action="">
    <input type="text" name="nombre" placeholder="entrer la valeur nombre">
    <input type="submit" value= valider>
    </form>
</body>
<?php
set_time_limit(0);
function is_premier( $variable){
    $teste=0;
    
    for($i=2; $i<$variable; $i++){
        if($variable % $i==0){
            $teste=1;
        break;
        }
    }
if($teste==0) 
return true;
return false;
}
function moyenne($m){
    $cpt=0;
    for ($i=1; $i <=$m ; $i++) { 
        $cpt=$cpt+$i;
    }
    $moy=$cpt/$m;
    return $moy;
}
?>
<?php
$nombre=$_POST["nombre"];
$T=array();
if (!empty($_POST)){
if (empty($_POST['nombre'])  || !is_numeric($_POST['nombre'])){
echo"donner un nombre";
$cpt=0;
}
else
{
for($i=2; $i<$nombre; $i++){
   
    if(is_premier($i)==1){
    array_push($T,$i); 
    }
}
$cpt=0;
for ($i=0; $i <count($T) ; $i++) { 
    echo $T[$i].'  ';
    $cpt=$cpt+$T[$i];
}
echo '<br>';
$moyenne=$cpt/count($T);

echo'la moyenne des nombres premiers est :  '. $moyenne.'<br>';
}
}
$t1=[ 
    "inferieur"=>[],
    "superieur"=>[]
];
for ($i=0; $i <count($T) ; $i++) {
    if ($T[$i] <$moyenne) {
       array_push( $t1['inferieur'],$T[$i]);
        
        }
         else{
            array_push( $t1['superieur'],$T[$i]);
       
           
}
    }
    echo "<br>";
    echo "les nombres premiers superieur";
        var_dump($t1['superieur']);  echo "<br>";
echo "les nombres premier inferieur à la moyenne";
var_dump($t1['inferieur']);
?>

<?php
if(isset($_GET['page'])){
    $pageActuelle = $_GET['page'];
}else{
    $pageActuelle = 1;
} 
$tab=array();
for ($i=1;$i<=10000 ;$i++)
{
    $tab[]=$i;
}
$taille = 5;
$nbrPages = ceil(count($tab)/$taille);
$debut = $pageActuelle*$taille-$taille;
$fin = $pageActuelle*$taille;
?>
<table border="1" width="50%">
    <?php for($i=$debut;$i<$fin;$i=$i+5){ ?>
    <tr>
    <?php for($j=$i;$j<$i+5;$j++){ ?>
        <td><?php 
            if(isset($tab[$j])){
                echo $tab[$j];
            }else{
                echo "";
            }
            ?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
<?php for($i=1;$i<=$nbrPages;$i++){ ?>
<a href="Exercice1.php?page=<?= $i ?>">[<?= $i ?>]</a>
<?php } ?>

</html>