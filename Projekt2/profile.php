<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>broski Dejtar</title>
<link rel="stylesheet" href="/~gulerbet/backend/style.css">   
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <h2>Välkommen till profilen</h2>
                <?php include "./view_account.php" ?>
            </article>
            <article>
                <h2>These ppl have commented on your ad </h2>
                <?php include "./view_comments.php"?>
            </article>

        </section>

        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>