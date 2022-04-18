<?php
namespace App\Controllers;
use App\Models\Model_Survei;

class Survei extends BaseController
{
    public function index()
    {
        $model = new Model_Survei;
        $data['title']     = 'Data Surevi';
        $data['getSurvei'] = $model->getSurvei();
        echo view('Survei', $data);

    }

    public function tambah()
    {
        $data['title']     = 'Survei';
        echo view('tambah_survei', $data);
    }

    public function store()
    {
        $model = new Model_Survei;
        $data = [
            'no_hp' => $this->request->getVar('hp'),
            'waktu'         => $this->request->getVar('waktu'),
            'sipp'  => $this->request->getVar('sipp'),
            'pemutahiran' => $this->request->getVar('pemutahiran'),
            'transparan'         => $this->request->getVar('transparan'),
            'konsultasi'  => $this->request->getVar('konsultasi'),
            'pengaduan' => $this->request->getVar('pengaduan'),
            'persyaratan'         => $this->request->getVar('persyaratan'),
            'prosedur'  => $this->request->getVar('prosedur'),
            'tarif' => $this->request->getVar('tarif'),
            'waktua'         => $this->request->getVar('waktua'),
            'antrian'  => $this->request->getVar('antrian'),
            'perlibatan' => $this->request->getVar('perlibatan'),
            'publikasi'         => $this->request->getVar('publikasi'),
            'skm'  => $this->request->getVar('skm'),
            'tarifb' => $this->request->getVar('tarifb'),
            'waktub'         => $this->request->getVar('waktub'),
            'kesigapan'  => $this->request->getVar('kesigapan'),
            'sikap' => $this->request->getVar('sikap'),
            'parkir'         => $this->request->getVar('parkir'),
            'penunjang'  => $this->request->getVar('penunjang'),
            'waktu' => $this->request->getVar('waktu'),
            'kesigapan'         => $this->request->getVar('kesigapan'),
            'sikap'  => $this->request->getVar('sikap'),
            'parkir' => $this->request->getVar('parkir'),
            'tunggu'         => $this->request->getVar('tunggu'),
            'toilet'  => $this->request->getVar('toilet'),
            'khusus'  => $this->request->getVar('khusus'),
            'penunjang' => $this->request->getVar('penunjang')
        ];
        $model->saveSurvei($data);
        echo '<script>
                alert("Lanjut");
                window.location="/login"
            </script>';

    }
}