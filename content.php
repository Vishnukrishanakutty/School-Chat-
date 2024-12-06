<?php
include 'db_connect.php';
$search = $_POST['search_text1'];
$sql = 

$stmt->execute();
$result = $stmt->fetchAll();
echo json_encode($results);
?>