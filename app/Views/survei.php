<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<head>
			<!-- 
			Boxer Template
			http://www.templatemo.com/tm-446-boxer
			-->
			<meta charset="utf-8">
			<title>Home - Survei Kepuasan Masyarakat</title>
			<meta http-equiv="X-UA-Compatible" content="IE=Edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="keywords" content="">
			<meta name="description" content="">

			<!-- animate css -->
			<link rel="stylesheet" href="css/animate.min.css">
			<!-- bootstrap css -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<!-- font-awesome -->
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<!-- google font -->
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

			<!-- custom css -->
			<link rel="stylesheet" href="css/home.css">

		</head>
		<body>
			<!-- start preloader -->
			<div class="preloader">
				<div class="sk-spinner sk-spinner-rotating-plane"></div>
			</div>
			<!-- end preloader -->
			<?=  $this->include('style/style') ?>
        <div class="header">
            <div class="header-left">
                <img class="logo" src="http://bapenda.lampungprov.go.id/layout/bapenda1/images/logo-dark.png" />
            </div>
            <div class="header-right">
            <ul>
                <li><a href="<?= base_url(); ?>/logout">Logout</a></li>
                <li><a href="/survei">Hasil Survei</a></li>
                <li><a href="/">Home</a></li>
            </ul>
            </div>
        </div>
			<!-- start home -->
			<section id="home">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
                                <h1>Hai ! <?= session()->get('name'); ?></h1>
								<p class="tm-white">Survei Kepuasan Masyarakat atau SKM adalah survei data dan informasi tentang tingkat kepuasan masyarakat yang diperoleh dari hasil pengukuran secara kualitatif dan kuantitatif atas pendapat masyarakat terkait pelayanan dari aparatur penyelenggaraan pelayanan publik.</p>
								<a href="#hasil" class="btnsurvei" role="button" aria-pressed="true">Hasil Survei</a>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- end home -->
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/wow.min.js"></script>
			<script src="js/jquery.singlePageNav.min.js"></script>
			<script src="js/custom.js"></script>
		</body>
<section id="hasil">
    <div class="container pt-5">
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
                                <th>Kepuasan Masyarakat</th>
                            </tr>                         
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($getSurvei as $isi){?>
                                <tr>
                                    <td><?= $no;?></td>
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
                                    <?php  $simpul = ($avg+$rat+$ave)/3;
                                        if ($simpul > 4) {
                                            $indeks = "Sangat Baik";
                                        } elseif ($simpul > 3){
                                            $indeks = "Baik";
                                        } elseif ($simpul > 2){
                                            $indeks = "Sedang";
                                        } elseif ($simpul > 1){
                                            $indeks = "Buruk";
                                        } else {
                                            $indeks = "Sangat Buruk";
                                        }
                                    ?>
                                    <td><?= $mutu;?></td>
                                    <td><?= $has;?></td>
                                    <td><?= $sil;?></td>
                                    <td><?= $indeks;?></td>
                                </tr>
                            <?php $no++;}?>
                        </tbody>  

                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

