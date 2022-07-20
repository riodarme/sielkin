<?php

namespace App\Controllers;
use App\Models\KritikModel;
use App\Models\AuthModel;

class Kritik extends BaseController
{
   function __construct()
   {
      $this->auth = new AuthModel();
      $this->kritik = new KritikModel();
   }
   public function index()
   {
      { 
         $data = array(
            'judul'		=> 'Kritik',
            'kritik'   => $this->kritik->getAll()
         );
         return view ("kritik/kritik", $data);
      }
   }
   public function create()
   {
      $data = array(
         'judul' => 'Tambah Kritik'
      );
    return view('kritik/create', $data);
   }
   public function tambah()
   {
      $user  = session()->get('user_id');
      $isi = $this->request->getPost("isi");
      $data = [
         'isi' => $isi,
         'tgl' => date('Y-m-d'),
         'user_id' => $user
      ];
      $this->kritik->save($data);
      return redirect('kritik')->with('status', 'Tambah Data Berhasil');
   }
   public function edit($id = null)
   {
      $kritik = $this->kritik->find($id);
      if (is_object($kritik)) {
         $data = array (
            'judul' => 'Update Kritik',
            'kritik' => $kritik,
         );
         return view('kritik/edit', $data);
      }else {
         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      }
      return view('kritik/edit');
   }
   public function update($id = null)
   {
      $data = $this->request->getPost();
      $this->kritik->update($id, $data);
      return redirect('kritik')->with('status', 'Data Berhasil Di Update');
   }
   public function delete($id = null)
   {
      $this->kritik->delete($id);
      return redirect('kritik')->with('status', 'Data Berhasil Di Hapus');
   }
}
   