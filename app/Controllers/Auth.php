<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AuthModel;

class Auth extends Controller
{
    public function __construct()
    {
        $this->AuthModel     = new AuthModel();
        $this->validation    = \Config\Services::validation();
        $this->session       = \Config\Services::session();
    }
    // View Login
    public function index()
    {
        $data['judul'] = 'Login';
        if(session('user_id')){
            return redirect()->to(base_url('dashboard'));
        }
        return view('auth/login', $data);
    }
    // Cek Login
    public function valid_login()
    {
        $session = session();
        $model = new AuthModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'nama'          => $data['nama'],
                    'email'         => $data['email'],
                    'role_id'       => $data['role_id'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/auth');
            }
        }else{
            $session->setFlashdata('msg', 'Email Salah');
            return redirect()->to('/auth');
        }
    }
    // View register
    public function register()
    {
        if(session('user_id')){
            return redirect()->to(base_url('dashboard'));
        }
        $data = array(
			'judul'		=> 'Register',
			);
        return view('auth/register', $data);
    }
    // Proses Register
    public function valid_register()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[user.nama]',
                'errors' => [
                    'required'   => 'Nama harus diisi',
                    'min_length' => 'Nama minimal 3 Karakter',
                    'max_length' => 'Nama Maksimal 20 Karakter',
                    'is_unique'  => 'Nama sudah digunakan sebelumnya'
                ]
            ],
            'nik' => [
                'rules'  => 'required|min_length[16]|max_length[16]|is_unique[user.nik]',
                'errors' => [
                    'required'   => 'Nik Harus diisi',
                    'min_length' => 'Nik Minimal 16 Karakter',
                    'max_length' => 'Nik Maksimal 16 Karakter',
                    'is_unique'  => 'Nik sudah digunakan sebelumnya'
                ]
            ],
            'password'   => [
                'rules'  => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required'   => 'Password Harus diisi',
                    'min_length' => 'Password Minimal 4 Karakter',
                    'max_length' => 'Password Maksimal 50 Karakter',
                ]
            ],
            'konfirmasi' => [
                'rules'  => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) 
        {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new AuthModel();
        $users->insert([
            'nama'          => $this->request->getVar('nama'),
            'nik'           => $this->request->getVar('nik'),
            'email'         => $this->request->getVar('email'),
            'password'      => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'image'         => 'profil.svg',
            'create_on'     => date('Y-m-d'),
            'role_id'       => 3,
        ]);
        session()->setFlashData('msg', 'Selamat Berhasil Daftar');
        return redirect()->to('/auth');
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/auth');
    }

}   