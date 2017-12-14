<h2>Daftar Pasien</h2>

<br>
<br>
<a href="index.php?page=tambah-rawat" class="btn btn-primary">Tambah Pasien</a>
<br>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Pasien</th>
    <th scope="col">Tgl Masuk</th>
    <th scope="col">Tgl Keluar</th>
    <th scope="col">Id Nomor Ruangan</th>
    <th scope="col">Catatan Medis Rawat Inap</th>
    </tr>
</thead>
<tbody>
<?php
    $datarawat  = file_get_contents('http://'.IP.'/rawat/list');
    $array = json_decode($datarawat, true);
    $datarawat  = $array['data'];

    $datapasien  = file_get_contents('http://'.IP.'/pasien/list');
    $arraypasien = json_decode($datapasien, true);
    $datapasien  = $arraypasien['data'];

    $namapasien = array();
    foreach($datapasien as $pasien) {
        $namapasien[$pasien['idPasien']] = $pasien['namaPasien'];
    }
    $i = 1;
?>
    <?php if (count($datarawat) > 0): ?>
        <?php foreach ($datarawat as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $namapasien[$row['idPasien']] ?></td>
        <td><?php echo $row['tglMasuk']; ?></td>
        <td><?php echo $row['tglKeluar']; ?></td>
        <td><?php echo $row['idNomorRuangan']; ?></td> 
        <td><?php echo $row['catatanMedisRawatInap']; ?></td>
        </tr>
        <?php endforeach; ?>


    <?php endif; ?>
</tbody>

</table>
