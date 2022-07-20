<?php
namespace App\Models;
use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';

    protected $allowedFields = ['nm_kegiatan'];
    protected $returnType    = 'object';
    protected $primaryKey = 'id_kegiatan';

    protected $useTimestamps = false;
    
}