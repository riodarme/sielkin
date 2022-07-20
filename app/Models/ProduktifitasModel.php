<?php
namespace App\Models;
use CodeIgniter\Model;

class ProduktifitasModel extends Model
{
    protected $table = 'kg_produktifitas';
    protected $allowedFields = ['user_id','id_kegiatan','jm_produktifitas','tgl_produktifitas','kegiatan_lain','status'];
    protected $returnType    = 'object';
    protected $primaryKey = 'id_produktiftas';
    protected $useTimestamps = false;
    
    function getAll(){
        $builder = $this->db->table('kg_produktifitas');
        $builder->join('user', 'user.user_id = kg_produktifitas.user_id');
        $builder->join('kegiatan', 'kegiatan.id_kegiatan = kg_produktifitas.id_kegiatan');
        $query = $builder->get();
        return $query->getResult();
    }
}

?>