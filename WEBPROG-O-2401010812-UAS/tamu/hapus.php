<?php include '../db.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tamu WHERE id_tamu=$id");
header("Location: index.php");
?>