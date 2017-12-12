<h2>Daftar Pasien</h2>

<br>
<br>
<table class="table table-dark">
<thead>
    <tr>
    
    <th scope="col">Id Rawat Inap</th>
    <th scope="col">Id Pasien</th>
    <th scope="col">Tgl Masuk</th>
    <th scope="col">Tgl Keluar</th>
    <th scope="col">Id Nomor Ruangan</th>
    <th scope="col">Catatan Medis Rawat Inap</th>
    </tr>
</thead>
<tbody>
<!-- <?php
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


    <?php endif; ?> -->
</tbody>

</table>
