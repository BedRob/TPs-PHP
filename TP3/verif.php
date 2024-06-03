<?php
session_start();

$correctUsername = "Test1234";
$correctPassword = "Passwword";

$username = htmlspecialchars($_POST['username']);
$password = ($_POST['password']);

if ($username === $correctUsername && $password === $correctPassword) {
    header('Loaction: index.html');
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect";
}

if ($login === $correctLogin && $psw === $correctPassword) 
    $_SESSION['user'] = $username; 
    header("Location: home.php");
    exit(); }
    
else {
    $_SESSION['login_error'] = "L'identifiant ou le mot de passe est non valide.";
    header("Location: login.php");
    exit();
}
