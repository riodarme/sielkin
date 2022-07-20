<?php
namespace App\Models;
use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $allowedFields = ['id_kegiatan','id_tahunan','user_id'];
    protected $returnType    = 'object';
    protected $primaryKey = 'id_lapor';
    protected $useTimestamps = false;

    function getAll(){
      $builder = $this->db->table('laporan');
      $query = $builder->get();
      return $query->getResult();
  }
}