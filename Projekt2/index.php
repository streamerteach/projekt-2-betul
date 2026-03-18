<?php 
include "handy_methods.php"; 


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'header.php'; 
?>

<div id="container">
    <section>
        <article>
            <h2>Welcome to Wanna Date?</h2>
            <?php include "./view_profiles.php"; ?>
        </article>
    </section>

  
</div>

</body>
</html>