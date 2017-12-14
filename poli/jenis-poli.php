<h2>Jenis Poli</h2>
<br>
<br>
<a href="index.php?page=tambah-jenis-poli" class="btn btn-primary">Tambah Jenis Poli</a>
<br>
<div class="col-md-8">
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Poli</th>
    </tr>
</thead>
<tbody>

<?php
    $data  = file_get_contents('http://'.IP.'/jenis/poli/list');
    $array = json_decode($data, true);
    $data  = $array['data'];
    $i = 1;
?>
    <?php if (count($data) > 0): ?>
        <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['namaPoli']; ?></td>
        </tr>
        <?php endforeach; ?>


    <?php endif; ?>
</tbody>


</table>
</div>