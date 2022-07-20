<?php
namespace App\Models;
use CodeIgniter\Model;

class KritikModel extends Model
{
    protected $table = 'tbl_kritik';
    protected $allowedFields = ['isi','tgl','user_id'];
    protected $returnType    = 'object';
    protected $primaryKey = 'id_kritik';
    protected $useTimestamps = false;
    
    function getAll(){
        $builder = $this->db->table('tbl_kritik');
        $builder->join('user', 'user.user_id = tbl_kritik.user_id');
        $query = $builder->get();
        return $query->getResult();
    }
}

?>