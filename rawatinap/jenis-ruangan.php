<h2>Jenis Ruangan</h2>
<br>
<br>
<a href="index.php?page=tambah-ruang" class="btn btn-primary">Tambah Jenis Ruangan</a>
<br>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Jenis Ruangan</th>
    <th scope="col">Harga</th>
    </tr>
</thead>
<tbody>

<?php
    $data  = file_get_contents('http://'.IP.'/ruangan/list');
    $array = json_decode($data, true);
    $data  = $array['data'];
    $i = 1;
?>
    <?php if (count($data) > 0): ?>
        <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['jenisRuangan']; ?></td>
        <td><?php echo $row['hargaRuangan']; ?></td>
        </tr>
        <?php endforeach; ?>


    <?php endif; ?>

</tbody>


</table>
