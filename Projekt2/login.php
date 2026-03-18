<?php 
include "handy_methods.php"; 
include "hemlis.php";          
include "model_login.php";    

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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