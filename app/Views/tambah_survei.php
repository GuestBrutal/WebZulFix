<!DOCTYPE html>
<html lang="en">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Static Template</title>
    <link rel="stylesheet" href="/index.css">
</head>
<?=  $this->include('style/style') ?>
<body>
<?= $this->include('layout/header') ?>

    <div class="instansi mx-auto">
        
        <form method="post" action="/survei/add">
            <div class="form-check form-check-inline">
                <label for="">Nomor Telepon</label>
                <input type="text" name="hp" class="form-check-input" required>
            </div>
            <div class="form-check form-check-inline">
                <label for="">Waktu Pengisian</label>
                <input type="date" name="waktu" class="form-check-input" required>
            </div>
            <h3>Sistem Informasi Pelayanan Publik</h3>
            <p>
                1.1.a.K1 sistem informasi pelayanan publik dalam (SIPP) secara online telah memuat informasi tentang unit pelayanan secara transparan. (sipp harus memuat profil penyelenggara, pelaksana, 
                standar pelayanan maklumat pelayanan, pengelolaan pengaduan dan penilaian kinerja lembaga
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                2. 1.a.K1 pemutahiran informasi pelayanan publik dilakukan secara terus-menerus
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                3. 1.a.K1 informasi non elektronik mendukung pelayanan secara transparan            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                4. 1.a.K1 layanan konsultasi dan informasi tatap muka langsung mudah diakses
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                5. 1.a.K1 layanan pengaduan tatap muka langsung memudahkan pengguna layanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            
            <h3>Kebijakan Pelayanan</h3>
            <p>
                1.1.a.K1 Informasi tentang persyaratan memeberi kemudahan dan keadilan
                dalam pelayanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persyaratan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persyaratan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persyaratan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persyaratan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persyaratan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="persyaratan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                2. 1.a.K1 Informasi tentang prosedur memberi kemudahan dan keadilan
                dalam pelayanan.
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prosedur" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prosedur" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prosedur" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prosedur" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prosedur" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prosedur" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                3. 1.a.K1 Informasi tentang tarif memberi kemudahan dan keadilan dalam
                pelayanan.
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarif" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarif" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarif" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarif" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarif" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarif" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                4. 1.a.K1 Informssi tentang waktu memberi kemudahan dan keadilan dalam
                pelayanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktua" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktua" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktua" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktua" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktua" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktua" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                5. 1.a.K1 Sistem antrian yang diterapkan mencerminkan keadilan pelayanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="antrian" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="antrian" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="antrian" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="antrian" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="antrian" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="antrian" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                6. 1.a.P Perlibatan masyarakat dan pihak terkait di dalam penyusunan
                standar pelayanan.
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perlibatan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perlibatan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perlibatan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perlibatan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perlibatan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perlibatan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                7. 1.a.As Publikasi Standar Pelayanan di berbagai tempat dan media
                informasi memudahkan pengguna layanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publikasi" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publikasi" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publikasi" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publikasi" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publikasi" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publikasi" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                8. 1.c.P Survei Kepuasan Masyarakat (SKM) menjadi wadah partisipasi
                masyarakat dalam emnyampaikan aspirasi
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skm" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skm" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skm" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skm" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skm" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skm" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                9. 1.c.T Informasi tentang tarif memberi kemudahan dan keadilan dalam
                pelayanan.
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <h3>Profesionalisme SDM</h3>  
            <p>
                1.1.a.K1 waktu pelayanan (jam kerja layanan tanpa jeda waktu istirahat, layanan informasi, konsultasi dan pengaduan, customer service) sesuai dengan yang ditetapkan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktub" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktub" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktub" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktub" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktub" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktub" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                2. 1.a.K1 kesigapan petugas pelayanan dalam memberikan pelayanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                3. 1.a.K1 sikap, perilaku dan atribut yang digunakan petugas layanan mencerminkan pelayanan yang berkualitas
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                4. 1.a.K1 tempat parkir aman, nyaman dan mudah diakses
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                5. 1.a.K1 sarana ruang tunggu nyaman
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                6. 1.a.P sarana toilet khusus pengguna layanan bersih, sehat dan memadai
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                7. 1.a.As sarana prasarana bagi pengguna layanan berkebutuhan khusus memadai
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                8. 1.c.P sarana prasarana penunjang lainnya: ruang laktasi/nursery, arena bermain anak, kantin/fotocopy/toko atk memadai
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                9. 1.c.T Informasi tentang tarif memberi kemudahan dan keadilan dalam
                pelayanan.
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tarifb" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div><br>
            <div class="container-fluid w-100 px-auto text-center">
                <input type="submit" class = "btn btn-success mb-2 mx-auto w-75" value="SUBMIT">
            </div>
        </form>
    </div>

</body>

</html>