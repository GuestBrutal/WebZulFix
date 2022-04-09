<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container pt-5">
    <a href="<?= base_url('survei/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Responden</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Id Responden</th>
                            <th>Nomor Telpon</th>
                            <th>Waktu</th>
                        </tr>                         
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getSurvei as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['id_user'];?></td>
                                <td><?= $isi['no_hp'];?></td>
                                <td><?= $isi['waktu'];?></td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Telpon</th>
                            <th>Waktu</th>
                            <th>Sistem Informasi Pelayanan Publik</th>
                        </tr>                         
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getSurvei as $isi){?>
                            <tr>
                                <td><?= $no;?></td>>
                                <td><?= $isi['no_hp'];?></td>
                                <td><?= $isi['waktu'];?></td>
                                <?php  $avg = ($isi['sipp']+$isi['pemutahiran']+$isi['pemutahiran']+$isi['transparan']+$isi['konsultasi']+$isi['pengaduan'])/2;
                                    if ($avg > 4) {
                                        $mutu = "Sangat Baik";
                                    } elseif ($avg > 3){
                                        $mutu = "Baik";
                                    } elseif ($avg > 2){
                                        $mutu = "Sedang";
                                    } elseif ($avg > 1){
                                        $mutu = "Buruk";
                                    } else {
                                        $mutu = "Sangat Buruk";
                                    }
                                ?>
                                <td><?= $mutu;?></td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>

            </div>
        </div>
    </div>
</div>