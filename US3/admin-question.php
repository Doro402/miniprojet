<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Projet de PHP</title>
    <meta content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/styleAdminQuestion.css">
  </head>
  <body>
      <div>
    <p class="message"> Le plaisir de jouer </p>  
    <div class="quiz"><h2 class="h22">Creer et parametrer votre quizz</h2>
<h3 class="deconexion"> Déconnexion</h3>        
</div> 
    <h2 class="prametr">PaRAMETREr VOTRE QUESTION</h2>
    <div class="border1">
        <img src="images/img5.jpg">
    </div>
    <table>
        <tr><td>Lister Question</td><td class="img1"><a href="#"><img src="images/ic-liste-active.png"></a></td></tr>
        <td></td>
        <td></td>
        <tr><td>Creer Admin</td><td class="img1"><a href="#"><img src="images/ic-ajout-active.png"></a></td></tr>
        <td></td>
        <td></td>
        <tr><td>Listre jouers</td><td class="img1"><a href="#"><img src="images/ic-liste-active.png"></a></td></tr>
        <td></td>
        <td></td>
        <tr><td>Creer Question</td><td class="img1"><a href="#"><img src="images/ic-ajout-active.png"></td></tr>
        <tr><td>Creer Question</td><td class="img1"><a href="#"><img src="images/ic-liste-active.png"></a></td></tr>
    </table>
    <form id="formQuestion">
    <div>
        <div id="divQuestion">
            <label>Questions</label>
            <textarea name="question"></textarea>
        </div>
        <div class="divInput">
            <label>Nbre de point</label>
            <input type="num" name="scoreQuestion" />
        </div>
        <div id="divSelect">
            <label>Type de Reponse </label>
         <!-- <p class="img">  <img src="images/ic-ajout-réponse.png"></p>-->
            <select id="type" name="type" onchange="mySelection()">
            <option>Donnez le type de reponse
                <option>Choix multiple
                <option>Choix simple
                <option>Choix texte  
            </select><label class="img-plus"><img src="images/ic-ajout-réponse.png"></label>
        </div>
        <div id="divNbreRep">
            <label> Reponse1</label>
            <input id="nbreReponses" type="num" name="nbreReponses" />
        </div>
        <div id="reponses">
        </div> 
        <div id="divSubmit">
            <input type="submit" name="connexionAdmin" value="Enregistrement" class="validerQuestion"/>
        </div>
    </form>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="script.js"></script>
</div>
  </body>
  <footer ></footer>
</html>