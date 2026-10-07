<?php
header('Content-Type: application/json');
include "konekdb.php";

$id = (int) $_POST['id'];
$stm = $db->prepare("DELETE FROM siswa WHERE id = ?");
$result = $stm->execute([$id]);

echo json_decode([
    'id' => $id,
    'success' => $result
]);
?>