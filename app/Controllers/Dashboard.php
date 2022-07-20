<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Controllers\BaseController;


class Dashboard extends BaseController
{
	function __construct()
   {
      $this->auth = new AuthModel();
   }
   public function index()
	{ 
		$data = array(
			'judul' => 'Dashboard',
		);
		return view ("dashboard/pegawai/dashboard", $data);
	}
	public function profil()
	{
		$data = array(
			'judul' => 'Profil',
		);
		return view ("dashboard/template/profil", $data);
	}
	
	public function update()
   {
		$id = $this->session->userLogin('user_id');
		$data = $this->request->getPost();
		$this->auth->update($data, $id);
      return redirect('dashboard/profil')->with('status', 'Data Berhasil Di Update');
     }
}