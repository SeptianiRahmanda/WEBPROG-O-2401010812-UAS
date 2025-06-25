<?php include 'header.php'; ?>
<form method="POST" id=""tamuForm onsubmit="return validateform('tamuForm')">
    Nomor Kamar: <input name="nomor"><br>
    Tipe Kamar: <input name="tipe"><br>
    Harga per Malam: <input name="harga"><br>
    <button type="submit">Simpan</button>
</form>
<?php
if ($_POST) {
    mysqli_query($conn, "INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam)
        VALUES ('{$_POST['nomor']}', '{$_POST['tipe']}', '{$_POST['harga']}')");
    header("Location: index.php");
}
?>
<?php include 'footer.php'; ?>
