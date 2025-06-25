<?php include 'header.php'; ?>
<?php $data = mysqli_query($conn, "SELECT * FROM kamar"); ?>
<a href="tambah.php" class="button">+ Tambah Kamar</a>
<table>
<tr><th>No</th><th>Nomor</th><th>Tipe</th><th>Harga</th><th>Aksi</th></tr>
<?php $no=1; while($d = mysqli_fetch_assoc($data)): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nomor_kamar'] ?></td>
<td><?= $d['tipe_kamar'] ?></td>
<td><?= $d['harga_per_malam'] ?></td>
<td>
    <a href="edit.php?id=<?= $d['id_kamar'] ?>">Edit</a> |
    <a href="#" onclick="return confirmDelete('hapus.php?id=<?= $d['id_kamar'] ?>')">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</table>
<?php include 'footer.php'; ?>
