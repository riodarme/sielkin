<?php
namespace App\Models;
use CodeIgniter\Model;

class TahunModel extends Model
{
   protected $table = 'tahun';
   protected $allowedFields = ['user_id','mulai','target','id_kegiatan'];
   protected $returnType    = 'object';
   protected $primaryKey = 'id_tahunan';
   protected $useTimestamps = false;

   function getAll(){
      $builder = $this->db->table('tahun');
      $builder->join('user', 'user.user_id = tahun.user_id', 'kg_harian','kg_harian.user_id = tahun.user_id' );
      $builder->join('kegiatan', 'kegiatan.id_kegiatan = tahun.id_kegiatan');
      $query = $builder->get();
      return $query->getResult();
  }
}