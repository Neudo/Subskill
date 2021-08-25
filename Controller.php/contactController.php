<!-- <?php
require_once('models/Mail.php');


$errors = [];

if(!empty($_POST)){

    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    $to = "bassalair.quentin@gmail.com"
  
    if(empty($lastname)){
        $errors[] = "le nom est obligatoire !";
    }
    if(empty($firstname)){
        $errors[] = "le prénom est obligatoire !";
    }
    if(empty($content)){
        $errors[] = "le message est obligatoire !";
    }
    if(empty($email)){
        $errors[] = "l'email est obligatoire !";
    }
  
    if (checkEmailFormat($email)) {
        $mailSend = mail($email, $content);
    }
    else {
        $errors[] = "Merci d'entrer un email valide !";
    }
}
?> -->