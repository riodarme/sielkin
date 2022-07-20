<?php
namespace App\Models;
use CodeIgniter\Model;

class HarianModel extends Model
{
   protected $table = 'kg_harian';
   protected $allowedFields = ['id_kegiatan','user_id','jm_berkas','lain','tgl_harian','status'];
   protected $returnType    = 'object';
   protected $primaryKey = 'id_harian';
   protected $useTimestamps = false;
   
   function getAll(){
      $builder = $this->db->table('kg_harian');
      $builder->join('user', 'user.user_id = kg_harian.user_id');
      $builder->join('kegiatan', 'kegiatan.id_kegiatan = kg_harian.id_kegiatan');
      $query = $builder->get();
      return $query->getResult();
  }
}