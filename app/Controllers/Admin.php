<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\KegiatanModel;


class Admin extends BaseController
{
   public function __construct()
   {
      $this->kegiatan = new KegiatanModel();
   }
   public function index()
   {
      $builder = $this->db->table('user');
      $query   = $builder->get()->getResult();
      $data    = array (
         'judul' => 'Akun',
         'user'  => $query
      );
      return view('dashboard/admin/akun', $data);
   }
   // kegiatan
   public function kegiatan()
   {
      $builder = $this->db->table('kegiatan');
      $query = $builder->get()->getResult();
      $data = array (
         'judul' => 'Daftar Kegiatan',
         'kegiatan' => $query
      );
      return view('dashboard/admin/daftarkegiatan', $data);
   }
   public function createk()
   {
      $data = array(
         'judul' => 'Tambah Kegiatan'
      );
      return view('dashboard/admin/tambahkegiatan', $data);
   }
   public function tambahk()
   {
      $kegiat = $this->request->getPost("nm_kegiatan");
      $data = [
         'nm_kegiatan' => $kegiat
      ];
      $this->kegiatan->save($data);
      return redirect('admin/kegiatan')->with('status', 'Tambah Data Berhasil');
   }
   public function editk($id = null)
   {
      $kegiatan = $this->kegiatan->find($id);
      if (is_object($kegiatan)) {
         $data = array (
            'judul' => 'Update Kegiatan',
            'kegiatan' => $kegiatan,
         );
         return view('dashboard/admin/editk', $data);
      }else {
         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      }
      return view('dashboard/admin/editk');
   }
   public function updatek($id = null)
   {
      $data = $this->request->getPost();
      $this->kegiatan->update($id, $data);
      return redirect('admin/kegiatan')->with('status', 'Data Berhasil Di Update');
   }
   public function deletek($id = null)
   {
      $this->kegiatan->delete($id);
      return redirect('admin/kegiatan')->with('status', 'Data Berhasil Di Hapus');
   }
}