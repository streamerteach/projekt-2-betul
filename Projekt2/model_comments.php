<?php
$user_id = $_SESSION['user_id'];
$is_admin = (isset($_SESSION['role']) && $_SESSION['role'] == 'admin');

if (isset($_POST['send_comment'])) {
    $text = test_input($_POST['comment_content']); // Innehållet från formuläret
    $receiver = $_POST['receiver_id']; // Vem som ska få kommentaren
    
    $sql = "INSERT INTO comment (sender_id, comment, receiver_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user_id, $text, $receiver]);
    echo "Kommentar skickad!";
}

// Hämta kommentarer som skickats till den inloggade användaren
$sql = "SELECT comment.*, profiles.username 
        FROM comment 
        JOIN profiles ON comment.sender_id = profiles.id 
        WHERE receiver_id = ? 
        ORDER BY comment.id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute([$user_id]);
$my_comments = $stmt->fetchAll();
?>