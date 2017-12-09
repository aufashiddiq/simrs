<h2>Daftar Pasien</h2>

<br>
<br>
<table class="table table-dark">
<thead>
    <tr>
    
    <th scope="col">Id Pasien</th>
    <th scope="col">Nomor Rekam Medik</th>
    <th scope="col">Nama Pasien</th>
    <th scope="col">Tanggal Lahir</th>
    <th scope="col">Jenis Kelamin</th>
    <th scope="col">Alamat</th>
    <th scope="col">Agama</th>
    <th scope="col">Keterangan</th>
    <th scope="col">Dalam Perawatan</th>
    </tr>
</thead>
<tbody>
<?php
    $data  = file_get_contents('http://192.168.43.64/api/pasien/list');
    $array = json_decode($data, true);
    $data  = $array['data'];
?>
    <?php if (count($data) > 0): ?>
        <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo implode('</td><td>', $row); ?></td>
        </tr>
        <?php endforeach; ?>


    <?php endif; ?>
</tbody>

</table>
