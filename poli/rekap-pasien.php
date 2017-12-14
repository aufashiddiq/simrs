<h2>Rekap Data Pasien</h2>
<br>
<br>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Pasien</th>
    <th scope="col">Keluhan</th>
    <th scope="col">Jenis Poli</th>
    <th scope="col">Status</th>
    <th scope="col">Penyakit</th>
    <th scope="col">Catatan Medis</th>
    </tr>
</thead>
<tbody>
<?php
    $data  = file_get_contents('http://'.IP.'/poli/list');
    $array = json_decode($data, true);
    $data  = $array['data'];
    $i = 1;
?>
<?php if (count($data) > 0): ?>
        <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['idPasien']; ?></td>
        <td><?php echo $row['keluhan']; ?></td>
        <td><?php echo $row['jenisPoli']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><?php echo $row['penyakit']; ?></td>
        <td><?php echo $row['catatanMedisPoli']; ?></td>
        
        </tr>
    <?php endforeach; ?>


<?php endif; ?>
</tbody>

</table>
