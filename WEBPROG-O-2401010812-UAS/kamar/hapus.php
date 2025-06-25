<?php include '../db.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM kamar WHERE id_kamar=$id");
header("Location: index.php");
?>