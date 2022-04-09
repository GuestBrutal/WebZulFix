<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Model_Survei extends Model
{
    protected $table = 'data_survei';
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
     
    public function getSurvei($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['no_hp' => $id]);
        }   
    }

    public function saveSurvei($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}