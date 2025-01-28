<h1> Renseignement du formulaire de contact</h1>

<?php 
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])):
    $prenom = $_POST['firstname'];
    $nom = $_POST['lastname'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
?> 
<p>Prénom du sollicitant : 
    <?php echo $prenom; ?></p>

<p>Nom de famille du sollicitant : 
    <?php echo $nom; ?></p>

<p>Adresse e-mail du sollicitant : 
    <?php echo $email; ?></p>

<p>Thème de conversation choisi par le sollicitant :
    <?php echo $subject; ?></p>

<p>Message du sollicitant : 
    <?php echo $message; ?></p>
<?php 
 endif;
?>

