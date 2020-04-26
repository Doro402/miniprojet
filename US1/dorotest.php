<?php
$errorlogin=$errorpassword=$errormessage='';


if (isset($_POST['connexion']))
{
    var_dump($_POST);
    if(!empty($_POST['login']) && !empty($_POST['psw']))
       $Doro=json_decode(file_get_contents('json/base.json'),true);
       foreach ($Doro as $value)
       {

        if ($_POST['login'] !== $value['login'])
        {
            $errorlogin='votre login est incorrect' ;
        }
        elseif($_POST['psw']!==$value['psw'])
        {
            $errorpassword='votre mot de pass est incorrect';
        }
        else
        {
            session_start();
            $_SESSION['login']=$value ['login'];
            $_SESSION['affichenom']=$value['nom'];
            $_SESSION['afficheprenom']=$value['prenom'];
            $_SESSION['afficheimage']=$value['img'];
            if ($value['role']=="admin")
            
            {
                $_SESSION['user']=$value['role'];
                header('Location:admin-question.php');
            }
            elseif($value['role']=="joueur")
            {
                $_SESSION['user']=$value['role'];
                header('Location:compt_joeur.php');

            }
        }
    }
    else
    {
        $errorMessage='Veuillez saisir vos identifiants svp ! ';
        
         }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf_8">
    <title>Quizz</title>
    <link rel="stylesheet" href="dorotest.css">
</head>

<body>
    <div class="header">
        <div class="logo"></div>
        <div class="header-text"> Le plaisir de jouer</div>
    </div>
    <div class="content">
    </div>

    <div class="container">
        <div class="container-header">
            <div class="title">login form</div>
        </div>
        <div class="container-body">
            <form action="" method="POST" action="admin-question.php" id="form-connexion">
                <div class="input-form">
                    <div class="icon-form icon-form-login"></div>
                    <input type="text" class="form-control" name ="login" placeholder="login">
                    <div class="error-form"></div>
                </div>
                <div class="input-form">
                    <div class="icon-form icon-form-password"></div>
                    <input type="password" class="form-control" name= "psw" placeholder="password">
                    <div class="error-form"></div>
                </div>
                <div class="input-form">
                    <button type="submit" class="btn-form">Connexion</button>
                    <a href="" class="link-form">S'inscrire pour jouer</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>