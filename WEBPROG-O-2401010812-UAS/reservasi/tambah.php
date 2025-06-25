<?php include 'header.php';
$tamu = mysqli_query($conn, "SELECT * FROM tamu");
$kamar = mysqli_query($conn, "SELECT * FROM kamar");
?>
<form method="POST">
    Tamu:
    <select name="id_tamu">
        <?php while($t = mysqli_fetch_assoc($tamu)): ?>
        <option value="<?= $t['id_tamu'] ?>"><?= $t['nama_tamu'] ?></option>
        <?php endwhile; ?>
    </select><br>
    Kamar:
    <select name="id_kamar">
        <?php while($k = mysqli_fetch_assoc($kamar)): ?>
        <option value="<?= $k['id_kamar'] ?>"><?= $k['nomor_kamar'] ?> - <?= $k['tipe_kamar'] ?></option>
        <?php endwhile; ?>
    </select><br>
    Check-in: <input type="date" name="checkin"><br>
    Check-out: <input type="date" name="checkout"><br>
    <button type="submit">Simpan</button>
</form>
<?php
if ($_POST) {
    mysqli_query($conn, "INSERT INTO reservasi (id_tamu, id_kamar, tanggal_checkin, tanggal_checkout)
        VALUES ('{$_POST['id_tamu']}', '{$_POST['id_kamar']}', '{$_POST['checkin']}', '{$_POST['checkout']}')");
    header("Location: index.php");
}
?>
<?php include 'footer.php'; ?>
