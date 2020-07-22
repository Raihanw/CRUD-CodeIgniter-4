<?php namespace App\Controllers;

use App\Models\Auth;
use CodeIgniter\Controller;

class Login extends Controller
{

    public function index()
    {
        return view('login_view');
    }

    public function proses()
    {
        $Auth = new Auth();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        if($Auth->login_user($email, $password))
        {
            return redirect()->to(base_url('user'));
        }
        else 
        {
            session()->setflashdata('error','Email atau Password salah!');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}