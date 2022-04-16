<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container pt-5">
    <a href="/survei/tambah" class="btn btn-success mb-2 ms-2 w-25">Tambah Data Survei</a>
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
                            <th>Nomor Telpon</th>
                            <th>Waktu</th>
                            <th>Sistem Informasi Pelayanan Publik</th>
                            <th>Kebijakan Pelayanan</th>
                            <th>Profesionalisme SDM</th>
                        </tr>                         
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getSurvei as $isi){?>
                            <tr>
                                <td><?= $no;?></td>>
                                <td><?= $isi['no_hp'];?></td>
                                <td><?= $isi['waktu'];?></td>
                                <?php  $avg = ($isi['sipp']+$isi['pemutahiran']+$isi['transparan']+$isi['konsultasi']+$isi['pengaduan'])/5;
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
                                <?php  $rat = ($isi['persyaratan']+$isi['prosedur']+$isi['tarif']+$isi['waktua']+$isi['antrian']+$isi['perlibatan']+$isi['publikasi']+$isi['skm']+$isi['tarifb'])/9;
                                    if ($rat > 4) {
                                        $has = "Sangat Baik";
                                    } elseif ($rat > 3){
                                        $has = "Baik";
                                    } elseif ($rat > 2){
                                        $has = "Sedang";
                                    } elseif ($rat > 1){
                                        $has = "Buruk";
                                    } else {
                                        $has = "Sangat Buruk";
                                    }
                                ?>
                                <?php  $ave = ($isi['waktub']+$isi['kesigapan']+$isi['sikap']+$isi['parkir']+$isi['tunggu']+$isi['toilet']+$isi['khusus']+$isi['penunjang']+$isi['tarifb'])/9;
                                    if ($ave > 4) {
                                        $sil = "Sangat Baik";
                                    } elseif ($ave > 3){
                                        $sil = "Baik";
                                    } elseif ($ave > 2){
                                        $sil = "Sedang";
                                    } elseif ($ave > 1){
                                        $sil = "Buruk";
                                    } else {
                                        $sil = "Sangat Buruk";
                                    }
                                ?>
                                <td><?= $mutu;?></td>
                                <td><?= $has;?></td>
                                <td><?= $sil;?></td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>

            </div>
        </div>
    </div>
</div>