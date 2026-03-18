<?php
include "handy_methods.php";
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    if (isset($_GET['delete_profile'])) {
        $stmt = $conn->prepare("DELETE FROM profiles WHERE id = ?");
        $stmt->execute([$_GET['delete_profile']]);
    }
    if (isset($_GET['delete_comment'])) {
        $stmt = $conn->prepare("DELETE FROM comment WHERE id = ?");
        $stmt->execute([$_GET['delete_comment']]);
    }
}
header("Location: index.php");