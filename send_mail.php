<?php

require_once 'vendor/autoload.php';

if (!empty($_POST)) {

    $url = "http://localhost/cartevoeux/card.php?d=" . $_POST['dest-name'] . "&n=" . $_POST['name'];

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
        ->setUsername('d5ba69626d163e')
        ->setPassword('f7ba0129550611');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Vous avez reçu une carte de voeux de la part de ' . $_POST["name"]))
        ->setFrom([$_POST["mail"] => $_POST["name"]])
        ->setTo([$_POST["dest-mail"] => $_POST["dest-name"]])
        ->setBody("<p>Vous avez reçu une carte de voeux de la part de <strong>{$_POST['name']}</strong>, vous pouvez la retrouver <a href='{$url}'>ici</a>.</p>", 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result) {
        echo json_encode(["message" => "<p class='success'>Votre carte de voeux a bien été envoyé</p>"]);
    } else {
        echo json_encode(["message" => "<p class='error'>Il y a eu un problème lors de l'envoie de l'email</p>"]);
    }
}
