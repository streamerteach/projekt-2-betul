<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanna Date?</title>
    <link rel="stylesheet" href="/~gulerbet/backend/Projekt2/style.css">
    <script src="./script.js" defer></script>
</head>
<body>

<header>
    <div id="logo">Wanna Date?</div>
    <nav>
        <ul>
            <li><a href="/~gulerbet/backend/">Home</a></li>
            <li><a href="/~gulerbet/backend/Projekt1/">Projekt 1</a></li>
            <li><a href="/~gulerbet/backend/Projekt2/">Projekt 2</a></li>
            <li><a href="/~gulerbet/backend/Projekt2/rapport2.php">Rapport</a></li> 
            <?php
            if (isset($_SESSION['username'])) {
                echo "<li><a href='/~gulerbet/backend/Projekt2/profile.php'>Profil</a></li>";
                echo "<li><a href='/~gulerbet/backend/Projekt2/logout.php' style='color:red;'>Logga ut</a></li>";
            } else {
                echo "<li><a href='/~gulerbet/backend/Projekt2/login.php'>Logga in</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>