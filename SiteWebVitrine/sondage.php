<?php
  include_once 'header.php';
?>

<section class="sondage">
    <form action="includes/sondage.inc.php" method="post">
    <table class="sondageTable">
      <caption style="align:'center'; caption-side: top;"><h1 style="background-color: #D23333; border-radius: 50px; margin-bottom: 3%;">Sondage</h1></caption>
      <tr>
      <td colspan='2'><h1 style="text-align:left;">Informations</h1></td>
      <td></td>
      <tr>
        <td class="col1" style="padding-top: 30px;">De combien de personnes votre groupe est composé : </td>
      </tr> 
      <tr>
        <td class="col2"><input style="width: 70px; height:50px; float: left; font-size: 40px; margin-top: 20px;" type="number" name="nbPlayer" required> </td>
      </tr>

      <tr>
        <td class="col1"  style="padding-top: 25px;">Nom de l'entreprise :<br> <input style="width: 300px; height:50px; float: left; margin-top: 20px; font-size: 40px;" type="text" name="name" placeholder="Nom..." required></td>
      </tr> 
      <tr></tr>
      <tr>
      <td colspan='2'><h1 style="text-align:left;">Général</h1></td>
      <td></td>
      </tr>
      <tr>
        <td class="col1">Possédez-vous des mots de passe comportant une information personnelle (date de naissance / prénoms) ? </td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-1' name='Q1'> <label for='checkbox-1'></label></td>
      </tr> 
      <tr>
        <td class="col1">Utilisez-vous un même mot de passe pour plusieurs comptes ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-2' name='Q2'> <label for='checkbox-2'></label></td>
      </tr> 
      <tr>
        <td class="col1">Ecrivez-vous vos mots de passe quelque part sur un papier ou dans votre téléphone ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-3' name='Q3'> <label for='checkbox-3'></label></td>
      </tr>   
      <tr>
        <td class="col1">Utilisez-vous un VPN lors d'une connexion sur réseau publique ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-4' name='Q4'> <label for='checkbox-4'></label></td>
      </tr> 
      <tr>
        <td class="col1">Protégez-vous vos carte NFC (carte sans contact) avec un sytème Anti-RFID ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-5' name='Q5'> <label for='checkbox-5'></label></td>
      </tr> 
      <tr>
        <td class="col1">Utilisez-vous une "station blanche" (ordinateur cobaye déconnecté du réseau) pour tester la légitimité d'une clé USB ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-6' name='Q6'> <label for='checkbox-6'></label></td>
      </tr> 
      <tr>
      </tr> 
      <tr>
        <td class="col1">A quelle fréquence changez-vous vos mots de passes ?<br>
          <input type="radio" class='ios8-switch' id='checkbox-6' name='Q7' value="1mois" Checked><label for='checkbox-7'></label>1 fois par mois<br>
          <input type="radio" class='ios8-switch' id='checkbox-6' name='Q7' value="6mois"><label for='checkbox-7'></label>1 fois tout les 6  mois <br>
          <input type="radio" class='ios8-switch' id='checkbox-6' name='Q7' value="1an"><label for='checkbox-7'></label>1 fois par an <br>
          <input type="radio" class='ios8-switch' id='checkbox-6' name='Q7' value="jamais"><label for='checkbox-7'></label>Quand j'oublie le mot de passe</td>
      </tr>
      <tr></tr>
      <tr>
      <td colspan='2'><h1 style="text-align:left;">Challenges</h1></td>
      <td></td>
      </tr>
      <tr>
        <td class="col1">Avez-vous trouvé un code dans la broyeuse ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-8' name='challenge1'> <label for='checkbox-8'></label></td>
      </tr> 
      <tr>
        <td class="col1">Avez-vous trouvé le code de la clé usb bleue ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-9' name='challenge2'> <label for='checkbox-9'></label></td>
      </tr> 
      <tr>
        <td class="col1">Avez-vous réussi à déverrouiller  le cadenas à crocheter ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-10' name='challenge3'> <label for='checkbox-10'></label></td>
      </tr> 
      <tr>
        <td class="col1">Avez-vous réussi à copier la carte NFC et déverrouiler le plus gros tiroir ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-11' name='challenge4'> <label for='checkbox-11'></label></td>
      </tr> 
      <tr>
        <td class="col1">Avez vous inséré la clé USB violette et activé les macros ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-12' name='challenge5'> <label for='checkbox-12'></label></td>
      </tr> 
      <tr>
        <td class="col1">Avez-vous trouvé le fichier dans la corbeille du PC ? </td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-13' name='challenge6'> <label for='checkbox-13'></label></td>
      </tr> 
      <tr>
        <td class="col1">Etes-vous allé sur un site malveillant via l'une des deux faces du QR Code reconstitué ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-14' name='challenge7'> <label for='checkbox-14'></label></td>
      </tr> 
      <tr>
        <td class="col1">Avez-vous trouvé le mot de passe d'Alexandre DUBOIS ?</td>
        <td class="col2"><input type='checkbox' class='ios8-switch' id='checkbox-15' name='challenge8'> <label for='checkbox-15'></label></td>
      </tr>
      <tr></tr>
    </table>
      <p style="font-size: 35px;">Sentez-vous libre de donner votre avis sur l'escape game et de potentielles porpositions quant à l'amélioration des challenges.</p>
      <br>
      <textarea style="width: 50%; height: 4%; resize : none; font-size: 25px; font-family: 'Roboto', sans-serif;" id="avis" name="avis" rows="5" cols="33" maxlength="1000"></textarea>
      
      <div class="Button" style="margin-top: 3%; margin-bottom: 5%; margin-left: 30%"><button class="submitButton" style="height: 80px; font-size: 25px;" type="submit" name="submit">Envoyer mes réponses</button></div>
    </form>
  </div>
  <?php
    // Message d'erreur
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptychoice") {
            echo "<p>Veuillez cocher Vrai/Faux pour chaque question!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>Merci pour vos réponse voici votre score !</p>";
        }
    }
  ?>
  </section>

<?php
  include_once 'footer.php';
?>
