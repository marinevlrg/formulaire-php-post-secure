<?php
$errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!isset($_POST['user_nom']) || trim($_POST['user_nom']) === '')
            $errors[] = "Le nom est obligatoire";
        
            if (!isset($_POST['user_prenom']) || trim($_POST['user_prenom']) === '')
            $errors[] = "Le prénom est obligatoire";
        
            if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
            $errors[] = "Le numéro de téléphone est obligatoire";
       
            if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '' || !filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
            $errors[] = "Une adresse mail valide est obligatoire";
       
            if (!isset($_POST['sujet']) || trim($_POST['sujet']) === '')
            $errors[] = "Le sujet de votre message est obligatoire";
       
            if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
            $errors[] = "Votre message ne doit pas être vide";
}
?>

<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <?php if (empty($errors)) { ?>

        <h1>Merci <?= $_POST['user_prenom'] . ' ' . $_POST['user_nom'] ?> de nous avoir contacté à propos de <?= $_POST['sujet'] ?>.</h1>
        <p>Un de nos conseillers vous contactera soit à l'adresse <?= $_POST['user_email'] ?> ou par téléphone au <?= $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande :</p>
        <p><?= $_POST['user_message'] ?></p>

    <?php } else { ?>


        <?php if ($errors) : ?>
            <div class="alert">
                <h2>Veuillez remplir correctement tous les champs.</h2>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <a href="./form.php">Revenir au formulaire</a>
        <?php endif; ?>

    <?php } ?>
    
</body>

</html>