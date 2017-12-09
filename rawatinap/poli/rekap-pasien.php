<h2>Rekap Data Pasien</h2>
<br>
<br>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">Id Poli</th>
    <th scope="col">Id Pasien</th>
    <th scope="col">Keluhan</th>
    <th scope="col">Jenis Poli</th>
    <th scope="col">Status</th>
    <th scope="col">Penyakit</th>
    <th scope="col">Catatan Medis</th>
    </tr>
</thead>
<tbody>
<?php
    $data  = file_get_contents('http://localhost/api/poli/list');
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
