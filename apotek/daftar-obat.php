<div class="container-fluid">
        <div>
        <table class="table table-striped custab">
        <h2>Daftar Obat</h2>
        
        <br>
        <thead>  
            <tr>
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Harga</th>
                <th>Tgl Kadaluarsa</th>
                <th>Jumlah Obat</th>
                <th>Keterangan</th>
                <th class="text-center">Action</th> 
            </tr>
        </thead>
        <tbody>
           <?php
                $data  = file_get_contents(ip.'/daftar/obat');
                $array = json_decode($data, true);
                $data  = $array['data'];
                //var_dump($data);
                $no=1;
                if (count($data) > 0):
                foreach ($data as $row): array_map('htmlentities', $row);
            ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['kodeObat']; ?></td>
                <td><?php echo $row['namaObat']; ?></td>
                <td><?php echo $row['hargaObat']; ?></td>
                <td><?php echo $row['tglKadaluarsa']; ?></td>
                <td><?php echo $row['jumlahObat']; ?></td>
                <td><?php echo $row['keteranganObat']; ?></td>
                <td>
                <a class="btn btn-info" href=<?php echo "'index.php?page=input-obat&idDaftarObat=".$row['idDaftarObat']."'"; ?>><span class="glyphicon glyphicon-edit"></span>edit</a>|
                <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='index.php?page=daftar-obat&idDaftarObat=<?php echo $row['idDaftarObat']; ?>' }" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"></span>hapus</a>
                </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
        </tbody>
          
        </table>

        </div>
    </div>