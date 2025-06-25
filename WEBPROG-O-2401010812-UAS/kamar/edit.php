<?php include 'header.php';
$id = $_GET['id'];
$d = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM kamar WHERE id_kamar=$id"));
?>
<form method="POST">
    Nomor Kamar: <input name="nomor" value="<?= $d['nomor_kamar'] ?>"><br>
    Tipe Kamar: <input name="tipe" value="<?= $d['tipe_kamar'] ?>"><br>
    Harga per Malam: <input name="harga" value="<?= $d['harga_per_malam'] ?>"><br>
    <button type="submit">Update</button>
</form>
<?php
if ($_POST) {
    mysqli_query($conn, "UPDATE kamar SET nomor_kamar='{$_POST['nomor']}', tipe_kamar='{$_POST['tipe']}', harga_per_malam='{$_POST['harga']}' WHERE id_kamar=$id");
    header("Location: index.php");
}
?>
<?php include 'footer.php'; ?>
