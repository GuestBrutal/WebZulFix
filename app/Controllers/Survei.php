<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Model_Survei;

class Survei extends Controller
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

    public function add()
    {
        $model = new Model_Survei;
        $data = array(
            'no_hp' => $this->request->getPost('hp'),
            'waktu'         => $this->request->getPost('waktu'),
            'sipp'  => $this->request->getPost('sipp'),
            'pemutahiran' => $this->request->getPost('pemutahiran'),
            'transparan'         => $this->request->getPost('transparan'),
            'konsultasi'  => $this->request->getPost('konsultasi'),
            'pengaduan' => $this->request->getPost('pengaduan'),
            'persyaratan'         => $this->request->getPost('persyaratan'),
            'prosedur'  => $this->request->getPost('prosedur'),
            'tarif' => $this->request->getPost('tarif'),
            'waktua'         => $this->request->getPost('waktua'),
            'antrian'  => $this->request->getPost('antrian'),
            'perlibatan' => $this->request->getPost('perlibatan'),
            'publikasi'         => $this->request->getPost('publikasi'),
            'skm'  => $this->request->getPost('skm'),
            'tarifb' => $this->request->getPost('tarifb'),
            'waktub'         => $this->request->getPost('waktub'),
            'kesigapan'  => $this->request->getPost('kesigapan'),
            'sikap' => $this->request->getPost('sikap'),
            'parkir'         => $this->request->getPost('parkir'),
            'penunjang'  => $this->request->getPost('penunjang'),
            'waktu' => $this->request->getPost('waktu'),
            'kesigapan'         => $this->request->getPost('kesigapan'),
            'sikap'  => $this->request->getPost('sikap'),
            'parkir' => $this->request->getPost('parkir'),
            'tunggu'         => $this->request->getPost('tunggu'),
            'toilet'  => $this->request->getPost('toilet'),
            'khusus'  => $this->request->getPost('khusus'),
            'penunjang' => $this->request->getPost('penunjang')
        );
        
        $model->saveSurvei($data);
        echo '<script>
                alert("Lanjut");
                window.location="'.base_url('survei').'"
            </script>';

    }
}