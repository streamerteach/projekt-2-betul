<?php
include "handy_methods.php";
if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = $_GET['id'];
    if ($_GET['action'] == 'like') {
        $sql = "UPDATE profiles SET likes = likes + 1 WHERE id = ?";
    } else {
        $sql = "UPDATE profiles SET likes = likes - 1 WHERE id = ?";
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
}
header("Location: index.php");
exit();
?>