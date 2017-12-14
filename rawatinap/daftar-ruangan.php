<h2>Daftar Ruangan</h2>

<br>
<br>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Jenis Ruangan</th>
    <th scope="col">Nomor Ruangan</th>
    <th scope="col">Status</th>
    </tr>
    <?php
        $data  = file_get_contents('http://'.IP.'/nruangan/list');
        $array = json_decode($data, true);
        $data  = $array['data'];
        $i = 1;
    ?>
    <?php if (count($data) > 0): ?>
        <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['idRuangan']; ?></td>
        <td><?php echo $row['nomorRuangan']; ?></td>
        <td><?php echo $row['statusRuangan']; ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
	
</thead>
<tbody>




