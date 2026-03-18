<?php include "model_login.php"; ?>

<div style="display: flex; gap: 50px;">
    <section>
        <h3>Logga in</h3>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Användarnamn" required><br>
            <input type="password" name="password" placeholder="Lösenord" required><br>
            <input type="submit" name="login" value="Logga in">
        </form>
    </section>

    <section>
        <h3>Ny här? Registrera dig!</h3>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Användarnamn" required><br>
            <input type="text" name="realname" placeholder="Rubrik/Riktigt namn" required><br>
            <input type="password" name="password" placeholder="Lösenord" required><br>
            <input type="email" name="email" placeholder="E-post" required><br>
            <input type="text" name="city" placeholder="Stad" required><br>
            <textarea name="bio" placeholder="Berätta om dig..."></textarea><br>
            <input type="number" name="salary" placeholder="Årslön"><br>
            <select name="preference">
                <option value="Man">Man</option>
                <option value="Kvinna">Kvinna</option>
                <option value="Båda">Båda</option>
                <option value="Alla">Alla</option>
            </select><br>
            <input type="submit" name="register" value="Skapa konto">
        </form>
    </section>
</div>