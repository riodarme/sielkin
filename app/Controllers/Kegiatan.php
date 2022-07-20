<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Models\KegiatanModel;
use App\Models\HarianModel;
use App\Models\TahunModel;

class Kegiatan extends BaseController
{   
   function __construct()
   {
      $this->auth = new AuthModel();
      $this->kegiatan = new KegiatanModel();
      $this->harian = new HarianModel();
      $this->tahun = new TahunModel();
   }
   public function index()
   {
         $data = array(
            'judul'		 => 'Kegiatan Tahunan ',
            'tahun'      => $this->tahun->getAll(),
            );
            // $data = ('SELECT user_id, SUM(jm_berkas) AS jm_berkas FROM kg_harian GROUP BY user_id');
         // print_r($data);
         return view ("dashboard/pegawai/kegiatant", $data);
   }
   public function createt()
   {
      $data = array (
         'judul' => 'Tambah Target',
         'kegiatan' =>$this->kegiatan->findAll()
      );
      return view('dashboard/pegawai/createt', $data);
   }
   public function tambah()
   {
      $user  = session()->get('user_id');
      $kegiatan = $this->request->getPost("id_kegiatan");
      $mulai = date('y-m-d');
      $juml = $this->request->getPost("target");
      $data = [
         'user_id'           => $user,
         'id_kegiatan'       => $kegiatan,
         'mulai'             => $mulai,
         'target'            => $juml,
      ];
      $this->tahun->save($data);
      return redirect('kegiatan')->with('status', 'Tambah Data Berhasil');
   }
// Kegiatan Harian 
   public function harian()
   {
      { 
         $data = array(
            'judul'		=> 'Kegiatan Harian ',
            'harian' => $this->harian->getAll()
            );
         return view ("dashboard/pegawai/kegiatanh", $data);
      }
   }
   public function createh()
   {
      $data = array (
         'judul' => 'Tambah Kegiatan Harian',
         'kegiatan' =>$this->kegiatan->findAll()
      );
      return view('dashboard/pegawai/createh', $data);
   }
   public function tambahh()
   {
      $user  = session()->get('user_id');
      $kegiatan = $this->request->getPost("id_kegiatan");
      $juml = $this->request->getPost("jm_berkas");
      $lain = $this->request->getPost("lain");
      $tgl = date('Y-m-d H:i:s');
      $data = [
         'user_id'           => $user,
         'id_kegiatan'       => $kegiatan,
         'jm_berkas'         => $juml,
         'lain'              => $lain,
         'tgl_harian'        => $tgl,
         'status'            => 0
      ];
      $this->harian->save($data);
      return redirect('kegiatan/harian')->with('status', 'Tambah Data Berhasil');
   }
   public function edith($id = null)
   {
      $harian = $this->harian->find($id);
      if (is_object($harian)) {
         $data = array (
            'judul' => 'Update Kegiatan Harian',
            'harian' => $harian,
            'kegiatan' =>$this->kegiatan->findAll()
         );
         return view('dashboard/pegawai/edith', $data);
      }else {
         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      }
   }
   public function updatekh($id = null)
   {
      $data = $this->request->getPost();
      $this->harian->update($id, $data);
      return redirect('kegiatan/harian')->with('status', 'Data Berhasil Di Update');
   }
   public function updatek($id = null)
   {
       $model = new HarianModel();
       $valid = 1;
       $data = [
           'status' => $valid
       ];
       $model->update($id, $data);
       return redirect()->to(base_url("kegiatan/harian"));
   }
   public function deletek($id = null)
   {
      $this->harian->delete($id);
      return redirect('kegiatan/harian')->with('status', 'Data Berhasil Di Hapus');
   }
   // End Kegiatan Harian 
}