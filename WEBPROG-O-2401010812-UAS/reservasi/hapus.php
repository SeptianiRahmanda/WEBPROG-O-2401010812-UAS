<?php include '../db.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM reservasi WHERE id_reservasi=$id");
header("Location: index.php");
?>