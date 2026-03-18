<?php
// 1. REGISTRERING
if (isset($_POST['register'])) {
    $username = test_input($_POST['username']);
    $realname = test_input($_POST['realname']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = test_input($_POST['email']);
    $city = test_input($_POST['city']);
    $bio = test_input($_POST['bio']);
    $salary = (int)$_POST['salary'];
    $pref = $_POST['preference'];

    try {
        $sql = "INSERT INTO profiles (username, passhash, realname, email, city, bio, salary, preference) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $password, $realname, $email, $city, $bio, $salary, $pref]);
        echo "<p style='color:green'>Konto skapat! Logga in nedan.</p>";
    } catch (PDOException $e) {
        // HÄR ÄR FIXEN: Vi skriver ut vad felet FAKTISKT är
        echo "<p style='color:red'>Databasfel: " . $e->getMessage() . "</p>";
    }
}

// 2. INLOGGNING (Endast en version!)
if (isset($_POST['login'])) {
    $username = test_input($_POST['username']);
    $password = $_POST['password'];

    if (!isset($conn)) {
        die("Databasanslutning saknas!");
    }

    $sql = "SELECT * FROM profiles WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['passhash'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];
        if(isset($user['role'])) { $_SESSION['role'] = $user['role']; }
        
        header("Location: profile.php");
        exit();
    } else {
        echo "<p style='color:red'>Fel användarnamn eller lösenord.</p>";
    }
}
?>