<h2>Jenis Poli</h2>
<br>
<br>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">Id Jenis Poli</th>
    <th scope="col">Nama Poli</th>
    <th scope="col">Action</th>
    </tr>
</thead>
<tbody>

<?php
$shop = array( array("1"=>"a", "2"=>"b"));
?>
    <?php if (count($shop) > 0): ?>
        <?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo implode('</td><td>', $row); ?></td>
        
        <?php endforeach; ?>


    <?php endif; ?>

    <td>
<button type="button" class="btn btn-info" onclick="javascript: window.location.href='edit_jenis_poli.php?kode=<?php echo $result['id_jenis_poli']?>';">Edit</button>
<button type="button" class="btn btn-danger" onclick="javascript: if(confirm('Apakah Anda Yakin ingin Menghapus?') 
== true){ window.location.href='delete_jenis_poli.php?kode=<?php echo $result['id_poli'];?>';}">
Delete </button>
</td>
</tr>
</tbody>


</table>
