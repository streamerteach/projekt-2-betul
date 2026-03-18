<?php
$limit = 5; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
$filter = isset($_GET['filter']) ? $_GET['filter'] : '%';

$sql = "SELECT * FROM profiles WHERE preference LIKE ? ORDER BY $sort DESC LIMIT $limit OFFSET $offset";
$stmt = $conn->prepare($sql);
$stmt->execute([$filter]);
$profiles = $stmt->fetchAll();
?>