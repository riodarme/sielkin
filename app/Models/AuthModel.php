<?php
namespace App\Models;
use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user';

    protected $allowedFields = ['nama','nik','email','password','image','alamat','create_on','role_id','telp'];
    
    protected $primaryKey = 'user_id';

    protected $useTimestamps = false;
    
}

?>