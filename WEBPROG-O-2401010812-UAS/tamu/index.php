<?php include 'header.php'; ?>
<?php $data = mysqli_query($conn, "SELECT * FROM tamu"); ?>
<a href="tambah.php" class="button">+ Tambah Tamu</a>
<table>
<tr><th>No</th><th>Nama</th><th>Email</th><th>Telepon</th><th>Aksi</th></tr>
<?php $no=1; while($d = mysqli_fetch_assoc($data)): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nama_tamu'] ?></td>
<td><?= $d['email'] ?></td>
<td><?= $d['telepon'] ?></td>
<td>
    <a href="edit.php?id=<?= $d['id_tamu'] ?>">Edit</a> |
    <a href="#" onclick="return confirmDelete('hapus.php?id=<?= $d['id_tamu']?>')">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</table>
<?php include 'footer.php'; ?>
