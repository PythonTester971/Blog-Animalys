<?php
    $page_title = 'Contact';
    include_once 'header.php';
?>
    
<?php   
    include_once 'data.php';
?>

<h1> Contact </h1>
<img src="./assets/images/contact.webp" alt="illustration moyens de contact">

<div class="container">
  <form action="contact_traitement.php" method="POST">
    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre prénom..">

    <label for="lname">Nom de famille</label>
    <input type="text" id="lname" name="lastname" placeholder="Votre nom de famille..">

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Votre adresse mail..">

    <label for="subject">Sujet</label>
    <select id="subject" name="subject">
      <option value="renseignement">Demande de renseignement</option>
      <option value="avis">Donnez votre avis</option>
      <option value="commande">Commande de produits</option>
    </select>

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Votre message.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>



<?php
    include_once 'footer.php';
?>
