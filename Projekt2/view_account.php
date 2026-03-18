<?php include "model_account.php"; ?>

<h3>Hantera din profil</h3>
<form method="POST">
    Namn: <input type="text" name="realname" value="<?= $row['realname'] ?>"><br>
    Bio: <textarea name="bio"><?= $row['bio'] ?></textarea><br>
    <input type="submit" name="update" value="Spara ändringar">
</form>

<hr>
<h3 style="color:red">Ta bort konto</h3>
<form method="POST">
    Bekräfta med lösenord: <input type="password" name="confirm_password" required><br>
    <input type="submit" name="delete_account" value="RADERA MITT KONTO" onclick="return confirm('Är du helt säker?')">
</form>