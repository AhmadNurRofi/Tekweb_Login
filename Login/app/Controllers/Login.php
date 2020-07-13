<?php namespace App\Controllers;
use App\Models\LoginModel;
use App\Controllers\Home;
class Login extends BaseController
{
	public function __construct()
	{
		helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        echo view('v_login');
    }

    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        $cek = $this->LoginModel->cek_login($username, $password);
        
        if (($cek['username']==$username) &&($cek['password']==$password)){
            //jika username pass benar
            session()->set('username',$cek['username']);
            session()->set('nama_user',$cek['nama_user']);
            session()->set('level',$cek['level']);
            return redirect()->to(base_url('user'));
        }else{
            //jika username pass salah
            session()->setFlashdata('gagal', 'username atau password salah !');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

}
