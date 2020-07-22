<?php namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model
{
    protected $table = 'user';

    public function login_user($email, $password)
    {
        $query = $this->db->table('user')->where(array('user_email'=>$email));
        $data = $query->get()->getRow();
        if ($data->user_email == $email) {
            
            if ($data->user_pass == $password) {
                session()->set('user_id', $data->user_id);
                session()->set('user_nama', $data->user_nama);
                session()->set('user_id', $data->user_id);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}