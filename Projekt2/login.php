<?php 
include "handy_methods.php"; 
include "hemlis.php";          // Innehåller lösenord till DB
include "model_login.php";     // Denna fil

// Starta sessionen korrekt innan något annat händer
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inkludera din header (den sköter DOCTYPE, html, head och den rosa menyn)
include "header.php"; 
?>

<div id="container">
    <section>
        <article>
            <h2>Logga in eller registrera dig här!!</h2>
            <?php include "./view_login.php"; ?>
        </article>
    </section>

    <footer>
        Made by Dennis<sup>&#169;</sup>
    </footer>
</div>

</body>
</html>