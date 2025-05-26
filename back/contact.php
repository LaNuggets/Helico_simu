<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = htmlspecialchars($_POST['nom']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

    $to = "aurelien.dugast44@gmail.com";
    $subject = "Nouveau message de $nom";
    $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";

    if(mail($to, $subject, $body))
    {
        header("Location: contact.html?success=1");
        exit;
    } else {
        header("Location: contact.html?error=1");
        exit;
    }
}
?>
