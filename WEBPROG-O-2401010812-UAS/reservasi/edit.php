<?php include 'header.php';
$id = $_GET['id'];
$reservasi = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM reservasi WHERE id_reservasi=$id"));
$tamu = mysqli_query($conn, "SELECT * FROM tamu");
$kamar = mysqli_query($conn, "SELECT * FROM kamar");
?>
<form method="POST">
    Tamu:
    <select name="id_tamu">
        <?php while($t = mysqli_fetch_assoc($tamu)): ?>
        <option value="<?= $t['id_tamu'] ?>" <?= $t['id_tamu']==$reservasi['id_tamu']?'selected':'' ?>>
            <?= $t['nama_tamu'] ?>
        </option>
        <?php endwhile; ?>
    </select><br>
    Kamar:
    <select name="id_kamar">
        <?php while($k = mysqli_fetch_assoc($kamar)): ?>
        <option value="<?= $k['id_kamar'] ?>" <?= $k['id_kamar']==$reservasi['id_kamar']?'selected':'' ?>>
            <?= $k['nomor_kamar'] ?> - <?= $k['tipe_kamar'] ?>
        </option>
        <?php endwhile; ?>
    </select><br>
    Check-in: <input type="date" name="checkin" value="<?= $reservasi['tanggal_checkin'] ?>"><br>
    Check-out: <input type="date" name="checkout" value="<?= $reservasi['tanggal_checkout'] ?>"><br>
    <button type="submit">Update</button>
</form>
<?php
if ($_POST) {
    mysqli_query($conn, "UPDATE reservasi SET id_tamu='{$_POST['id_tamu']}', id_kamar='{$_POST['id_kamar']}', tanggal_checkin='{$_POST['checkin']}', tanggal_checkout='{$_POST['checkout']}' WHERE id_reservasi=$id");
    header("Location: index.php");
}
?>
<?php include 'footer.php'; ?>
