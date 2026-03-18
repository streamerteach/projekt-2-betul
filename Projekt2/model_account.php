<?php
$user_id = $_SESSION['user_id'];

if (isset($_POST['update'])) {
    $realname = test_input($_POST['realname']);
    $bio = test_input($_POST['bio']);
    $sql = "UPDATE profiles SET realname = ?, bio = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$realname, $bio, $user_id]);
    echo "Profil uppdaterad!";
}

if (isset($_POST['delete_account'])) {
    $password = $_POST['confirm_password'];
    $sql = "SELECT passhash FROM profiles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user_id]);
    $row = $stmt->fetch();

    if (password_verify($password, $row['passhash'])) {
        $conn->prepare("DELETE FROM profiles WHERE id = ?")->execute([$user_id]);
        session_destroy();
        header("Location: login.php");
        exit();
    } else {
        echo "Fel lösenord! Kontot togs inte bort.";
    }
}

$stmt = $conn->prepare("SELECT * FROM profiles WHERE id = ?");
$stmt->execute([$user_id]);
$row = $stmt->fetch();
?>