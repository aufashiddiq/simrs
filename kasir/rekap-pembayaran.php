<div class="container-fluid">
        <div>
        <table class="table table-striped custab">
        <h2>Rekap Pembayaran</h2>
        
        <br>
        <thead>  
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <?php
            $databiaya  = file_get_contents('http://'.IP.'/api/biaya/list');
            $arraybiaya = json_decode($databiaya, true);
            $databiaya  = $arraybiaya['data'];

            $datapasien  = file_get_contents('http://'.IP.'/api/pasien/list');
            $arraypasien = json_decode($datapasien, true);
            $datapasien  = $arraypasien['data'];

            $namapasien = array();
            foreach($datapasien as $pasien) {
                $namapasien[$pasien['idPasien']] = $pasien['namaPasien'];
            }
            $no = 1;
            if (count($databiaya) > 0): 
            foreach ($databiaya as $row): array_map('htmlentities', $row); ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $namapasien[$row['idPasien']]; ?></td>
                <td><?php echo $row['totalBiaya']; ?></td>
                </tr>
                <?php endforeach; 
            endif; ?>
        </table>
        </div>
    </div>