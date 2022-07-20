<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Models\KegiatanModel;
use App\Models\ProduktifitasModel;

class Produktifitas extends BaseController
{
   function __construct()
   {
      $this->auth = new AuthModel();
      $this->produktifitas = new ProduktifitasModel();
      $this->kegiatan = new KegiatanModel();
   }
   public function index()
   {
      $data = array(
         'judul'		=> 'Produktifitas ',
         'produktifitas' => $this->produktifitas->getAll()
         );
       return view ("produktifitas/kegiatanp", $data);
   }
   public function create()
   {
      $data = array (
         'judul' => 'Tambah Produktifitas',
         'kegiatan' =>$this->kegiatan->findAll()
      );
      return view('produktifitas/create', $data);
   }
   public function tambah()
   {
      $user  = session()->get('user_id');
      $kegiatan = $this->request->getPost("id_kegiatan");
      $jml = $this->request->getPost("jm_produktifitas");
      $lain = $this->request->getPost("kegiatan_lain");
      $data = [
         'user_id'           => $user,
         'id_kegiatan'       => $kegiatan,
         'jm_produktifitas'  => $jml,
         'tgl_produktifitas' => date('Y-m-d'),
         'kegiatan_lain'     => $lain,
         'status'            => 0
      ];
      $this->produktifitas->save($data);
      return redirect('produktifitas')->with('status', 'Tambah Data Berhasil');
   }
   public function update($id = null)
   {
       $model = new ProduktifitasModel();
       $valid = 1;
       $data = [
           'status' => $valid
       ];
       $model->update($id, $data);
       return redirect()->to(base_url("produktifitas"));
   }
   public function edit($id = null)
   {
      $produktifitas = $this->produktifitas->find($id);
      if (is_object($produktifitas)) {
         $data = array (
            'judul' => 'Update Produktifitas',
            'produktifitas' => $produktifitas,
            'kegiatan' =>$this->kegiatan->findAll()
         );
         return view('produktifitas/edit', $data);
      }else {
         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      }
   }
   public function updatev($id = null)
   {
      $data = $this->request->getPost();
      $this->produktifitas->update($id, $data);
      return redirect('produktifitas')->with('status', 'Data Berhasil Di Update');
   }
   public function delete($id = null)
   {
      $this->produktifitas->delete($id);
      return redirect('produktifitas')->with('status', 'Data Berhasil Di Hapus');
   }
}
