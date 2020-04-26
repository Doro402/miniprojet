<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compt Admin</title>
    <link rel="stylesheet" href="css/inscription.css">
    <style>
     
    </style>
</head>
<body>
   <div class="header">
       <h2 class="slogan"> Le plaisir de jouer </h2>
   </div>
   <div class="container">
       <div class="cadre">
           <div class="gauche">
           <form action="" class="adherer" enctype="multipart/form-data" id="formul" method="POST">
              <div class="body-form">
                  <div class="cotenire">
                  <div class="inscri"> S'inscrire pour jouer</div>
                  <div class="bar"></div>
                        <label for="">Prenom</label><br>
                        <input type="text" placeholder="Aaaa" name="prenom" class="prenom" id="pren" >
                        <span id="missprenom"></span><br>
                        <label for="">Nom</label><br>
                        <input type="text" placeholder="BBBB" name="nom" class="prenom" id="nom">
                        <span id="missnom"></span><br>
                        <label for="">login</label><br>
                        <input type="text" placeholder="Login" name="login" class="prenom" id="login" >
                        <span id="misslogin"></span><br>
                        <label for="">mot de passe</label><br>
                        <input type="password" placeholder="...." name="pass" class="prenom" id="pass">
                        <span id="misspass"></span><br>
                        <label for="">Confirmer le mot de passe</label><br>
                        <input type="password" name="psw" class="prenom" id="psw">
                        <span id="misspassbi"></span><br>
                        <label for="">photo</label><br>
                        <input type="file" name="image" id="tof" class="bouton" onchange="document.getElementById('photo').src=window.URL.createObjectURL(this.files[0])">
                        <span id="misstof"></span><br>
                       <input type="submit" value="creer_compte" name="creer_compte" class="bouton" id="compte">
                </div>
                <div>
                 <img class="photoprofil" id="photoprofil">
                   avatar  
                       </div>
                </div>
                    </form>

           </div>
           

       </div>
      
   </div>
    
  </body>
</html>
<script>  
       var formul=document.getElementById('formul');

       
       formul.addEventListener('submit',function(e){
           var prenom=document.getElementById('pren');
           var nom=document.getElementById('nom');
           var login=document.getElementById('login');
           var pass=document.getElementById('pass');
           var psw=document.getElementById('psw');
           var image=document.getElementById('tof');
           if(prenom.value.trim()=="")
           {  
               var misspre=document.getElementById('missprenom');
               misspre.innerHTML="le prenom est requis";
               e.preventDefault(); 
               misspre.style.color="red";  
           }
           if(nom.value.trim()=="")
           {  
               var missnom=document.getElementById('missnom');
               missnom.innerHTML="le nom est requis";
               e.preventDefault(); 
               missnom.style.color="red";  
           }
           if(login.value.trim()=="")
           {  
               var misslogin=document.getElementById('misslogin');
               misslogin.innerHTML="un login est requis";
               e.preventDefault(); 
               misslogin.style.color="red";  
           }
           if(pass.value.trim()=="")
           {  
               var misspass=document.getElementById('misspass');
               misspass.innerHTML="un  mot de pass est requis";
               e.preventDefault(); 
               misspass.style.color="red";  
           }
           if(passbi.value.trim()=="")
           {  
               var misspassbi=document.getElementById('misspassbi');
               misspassbi.innerHTML="la confirmation du mot de passe est requis";
               e.preventDefault(); 
               misspassbi.style.color="red";  
           }
           if(tof.value.trim()=="")
           {  
               var misstof=document.getElementById('misstof');
               misstof.innerHTML="votre photo est requis";
               e.preventDefault(); 
               misstof.style.color="red";  
           }
        
       }
    )
   
   </script>
   
   <?php 
  include('fonction.php');
  
  if ( isset($_POST['creer_compte']) &&  Maj($_POST['prenom'])  &&  Maj($_POST['nom']) &&
     verif_alphaNum($_POST['pass']) &&  verif_alphaNum($_POST['psw']) && verif_alphaNum($_POST['pass'])==verif_alphaNum($_POST['psw']) 
     && verif_alphaNum($_POST['login'])  ) 
           { 
            $chemin='';
            $fichier = basename($_FILES['image']['name']);
            $taille_maxi = 100000;
            $taille = filesize($_FILES['image']['tmp_name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($_FILES['image']['name'], '.'); 
            
            if(!in_array($extension, $extensions)) 
            {
                 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
            }
            if($taille>$taille_maxi)
            {
                 $erreur = 'Le fichier est trop gros...';
            }
            if(!isset($erreur)) 
            {
              
                 $fichier = strtr($fichier, 
                      'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                      'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            
            if(move_uploaded_file($_FILES['image']['tmp_name'], $chemin . $fichier))
                 {
                      echo 'Upload effectué avec succès !';
                 }
                 else //Sinon (la fonction renvoie FALSE).
                 {
                      echo 'Echec de l\'upload !';
                 }
            }   
            else
			   {
				  echo $erreur;
			   }
				            
           $newgamer=array();
            $tab=file_get_contents('json/base.json');
            $tab=json_decode($tab, true);
        
            foreach ($tab as $key=>$value){
        
                if($_POST['login']==$value['login'])
                {
                    echo " ce Login existe deja";
                }
                else{
                    $newgamer['prenom']=Maj($_POST['prenom']);
                    $newgamer['nom']=Maj($_POST['nom']);
                    $newgamer['login']=$_POST['login'] ;
                    $newgamer['password']=$_POST['pass'];
                    $newgamer['role']="joueur";
                    $newgamer['image']=$_FILES['image']['name'];
                    $tab[]=$newgamer;
                    $tab=json_encode($tab);
                    file_put_contents('json/base.json',$tab);
                    
                    exit();
                }
            }
           }
           elseif( !Maj($_POST['prenom'])  ||  !Maj($_POST['nom']))
           {
               echo "le nom et  le prenom doivent etre de type alphanumerique";
           }
           elseif( verif_alphaNum($_POST['pass'])!=verif_alphaNum($_POST['passbi']))
           {
             
                 echo "le mot de passe doit etre alphanumerique et identique a cel confirmé";

           }
?>


