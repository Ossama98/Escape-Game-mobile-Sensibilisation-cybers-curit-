<?php
  include_once 'header.php';
?>


<?php

  if (!isset($_GET["score"])){
    header("location: https://escape-hack.herokuapp.com/index.php");
  }else{
    echo '<div id="score"></div>';
    echo '<div id="signification"></div>';
  }
?>

<script type="text/javascript">
var score = <?php echo $_GET["score"]  ?>;

afficherLaPageHTML(score);

// Affiche le bon bouton et la bonne indication en fonction du pramètre passé 
function afficherLaPageHTML(score){
    document.getElementById("score").innerHTML = "Votre score est de : " + score +"/15" ;
    if(score == "0" || score == "1" ||score == "2"||score == "3"){
        document.getElementById("signification").innerHTML = "Malheuresement il va falloir revoir les bases de la cybersécurité, nous vous invitons à lire ce récapitulatif quant aux bonnes pratiques vis-à-vis de la cybersécurité.";
    }
    else if(score == "4" || score == "5" || score == "6"){
        document.getElementById("signification").innerHTML = "Vos résultats ne sont pas mauvais, mais il est esssentiel de bien comprendre les bases, pour compléter vos connaissances nous vous invitons à lire ce récapitulatif quant aux bonnes pratiques vis-à-vis de la cybersécurité.";
    }
    else if(score == "7" || score == "8"||score == "9"|| score == "10" || score == "11" ||score == "12"){
        document.getElementById("signification").innerHTML = "Vous vous en êtes bien sorti, mais il reste néanmoins quelques points à améliorer, pour compléter vos connaissances nous vous invitons à lire ce récapitulatif quant aux bonnes pratiques vis-à-vis de la cybersécurité.";
    }
    else if(score == "13"||score == "14" || score == "15" ||score == "16"){
        document.getElementById("signification").innerHTML = "Vos performances ont été remarquable, pour compléter vos connaissances nous vous invitons à lire ce récapitulatif quant aux bonnes pratiques vis-à-vis de la cybersécurité.";
    }
}

</script>



<?php
  include_once 'footer.php';
?>
