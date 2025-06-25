<?php include 'header.php'; ?>
<?php
$data = mysqli_query($conn, "
SELECT r.*, t.nama_tamu, k.nomor_kamar FROM reservasi r
JOIN tamu t ON r.id_tamu = t.id_tamu
JOIN kamar k ON r.id_kamar = k.id_kamar");
?>
<a href="tambah.php" class="button">+ Tambah Reservasi</a>
<table>
<tr><th>No</th><th>Tamu</th><th>Kamar</th><th>Check-in</th><th>Check-out</th><th>Aksi</th></tr>
<?php $no=1; while($d = mysqli_fetch_assoc($data)): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nama_tamu'] ?></td>
<td><?= $d['nomor_kamar'] ?></td>
<td><?= $d['tanggal_checkin'] ?></td>
<td><?= $d['tanggal_checkout'] ?></td>
<td>
    <a href="edit.php?id=<?= $d['id_reservasi'] ?>">Edit</a>
    <a href="#" onclick="return confirmDelete('hapus.php?id=<?=$d['id_reservasi']?>')">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</table>
<?php include 'footer.php'; ?>
