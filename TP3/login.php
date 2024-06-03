<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <main>
        <form action="verif.php" method="post">
            <h1>Connexion</h1>
            <div>
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" id="password">
            </div>
            <section>
                <button type="submit" name="envoi">Se connecter</button>
            </section>
        </form>
    </main>
</body>

</html>