<?php
    if (isset($_GET['idObat'])) {
          $url = 'http://192.168.43.64/api/obat/delete';
          $data['idObat']=$_GET['idObat'];
          $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            
            $context  = stream_context_create($options);
            
            $result = file_get_contents($url, false, $context);
            if ($result === FALSE) { /* Handle error */ }
            
            echo $result;
            //header('location:index.php?page=obat');
      }  
?>
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
                <th>Harga Obat</th>
                <th class="text-center">Action</th> 
            </tr>
        </thead>
        <tbody>
           <?php
                $data  = file_get_contents('http://192.168.43.64/api/obat/list');
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
                <td>
                <a class="btn btn-info" href=<?php echo "'index.php?page=insert-obat&idObat=".$row['idObat']."'"; ?>><span class="glyphicon glyphicon-edit"></span>edit</a>|
                <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='index.php?page=obat&idObat=<?php echo $row['idObat']; ?>' }" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"></span>hapus</a>
                </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
        </tbody>
          
        </table>

        </div>
    </div>