<div class="container-fluid">
<div>
<table class="table table-striped custab">
<h2>Rekap Obat Keluar</h2>

<br>
<thead>  
    <tr>
        <th>No</th>
        <th>Nama Obat</th>
        <th>Nama Pasien</th>
        <th>Tgl Obat Keluar</th>
        <th>Harga Obat Keluar</th>
        <th>Tgl Pembayaran</th>
        <th class="text-center">Action</th> 
    </tr>
</thead>
<tbody>
					<?php
                        $data  = file_get_contents(ip.'/daftar/obat/keluar');
                        $array = json_decode($data, true);
                        $data  = $array['data'];
                        //var_dump($data);
                        $no=1;
                        foreach ($data as $row): array_map('htmlentities', $row);
                    ?>
                     <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['namaObat']; ?></td>
                    <td><?php echo $row['namaPasien']; ?></td>
                    <td><?php echo $row['tglObatKeluar']; ?></td>
                    <td><?php echo $row['hargaObatKeluar']; ?></td>
                    <td><?php echo $row['tglPembayaranObat']; ?></td>
                    <td class="text-center">
                        <a class='btn btn-info ' href="edit_user.php?id=<?php echo $b['kode_brg']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_kasir.php?username=<?php echo $b['kode_brg']; ?>' }" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Hapus</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
</tbody>
  
</table>

</div>
</div>