<?php include 'header.php'; ?>
<form method="POST">
    Nama: <input name="nama"><br>
    Email: <input name="email"><br>
    Telepon: <input name="telepon"><br>
    <button type="submit">Simpan</button>
</form>
<?php
if ($_POST) {
    mysqli_query($conn, "INSERT INTO tamu (nama_tamu, email, telepon)
        VALUES ('{$_POST['nama']}', '{$_POST['email']}', '{$_POST['telepon']}')");
    header("Location: index.php");
}
?>
<?php include 'footer.php'; ?>
