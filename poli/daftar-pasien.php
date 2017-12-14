<h2>Daftar Pasien</h2>
<br>
<br>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Pasien</th>
    <th scope="col">Tanggal Lahir</th>
    <th scope="col">Jenis Kelamin</th>
    <th scope="col">Alamat</th>
    <th scope="col">Agama</th>
    <th scope="col">Keterangan</th>
    <th scope="col">Dalam Perawatan</th>
    <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
<?php
    $data  = file_get_contents('http://'.IP.'/pasien/list');
    $array = json_decode($data, true);
    $data  = $array['data'];
    $i = 1;
?>
    <?php if (count($data) > 0): ?>
        <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['namaPasien']; ?></td>
        <td><?php echo $row['tglLahirPasien']; ?></td>
        <td><?php echo $row['jenisKelaminPasien']; ?></td>
        <td><?php echo $row['alamatPasien']; ?></td>
        <td><?php echo $row['agamaPasien']; ?></td>
        <td><?php echo $row['keteranganPasien']; ?></td>
        <td><?php echo $row['dalamPerawatan']; ?></td>
        <td>
        <a class="btn btn-info" href=<?php echo "'index.php?page=edit-pasien&idPasien=".$row['idPasien']."'"; ?>><span class="glyphicon glyphicon-edit"></span>edit</a>
        
        </td>
        </tr>
        <?php endforeach; ?>


    <?php endif; ?>
</tbody>

</table>
