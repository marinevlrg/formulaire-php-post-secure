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

    <form action="pagetraitement.php" method="post">
    
        <h1>Veuillez remplir le formulaire</h1>

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_nom">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_prenom">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="user_email">
        </div>
        <div>
            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="user_phone">
        </div>
        <div>
            <label for="sujet">Sujet :</label>
            <select id="sujet" name="sujet">
                <option value="">--Please choose an option--</option>
                <option value="sujet1">Sujet1</option>
                <option value="sujet2">Sujet2</option>
                <option value="sujet3">Sujet3</option>
                <option value="sujet4">Sujet4</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>