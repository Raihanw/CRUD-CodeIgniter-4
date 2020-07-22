<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->getUser();
        return view('user_view', $data);
    }

    public function add_new()
    {
        return view('add_user_view');
    }

    public function save()
    {
        $model = new UserModel();
        $data = array(
            'user_id' => $this->request->getPost('user_id'),
            'user_nama' => $this->request->getPost('user_nama'),
            'user_email' => $this->request->getPost('user_email'),
            'user_pass' => $this->request->getPost('user_pass'),
        );
        $model->saveUser($data);
        return redirect()->to('/user');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->getUser($id)->getRow();
        return view('edit_user_view', $data);
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getPost('user_id');
        $data = array(
            'user_nama' => $this->request->getPost('user_nama'),
            'user_email' => $this->request->getPost('user_email'),
        );
        $model->updateUser($data, $id);
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->deleteUser($id);
        return redirect()->to('/user');
    }
}