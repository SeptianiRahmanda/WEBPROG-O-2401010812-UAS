<?php include 'header.php';
$id = $_GET['id'];
$d = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tamu WHERE id_tamu=$id"));
?>
<form method="POST">
    Nama: <input name="nama" value="<?= $d['nama_tamu'] ?>"><br>
    Email: <input name="email" value="<?= $d['email'] ?>"><br>
    Telepon: <input name="telepon" value="<?= $d['telepon'] ?>"><br>
    <button type="submit">Update</button>
</form>
<?php
if ($_POST) {
    mysqli_query($conn, "UPDATE tamu SET nama_tamu='{$_POST['nama']}', email='{$_POST['email']}', telepon='{$_POST['telepon']}' WHERE id_tamu=$id");
    header("Location: index.php");
}
?>
<?php include 'footer.php'; ?>
