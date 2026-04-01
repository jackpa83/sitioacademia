<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class RegisterController extends BaseController {
    public function index() {
       if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        } 
        $db = db_connect();
        $data =$db->query('SELECT * FROM usuarios,niveles,estatus WHERE key_niveles = niveles.id_niveles AND key_estatus = estatus.id_estatus' );
        return view('/layout/header').view('/layout/menu_edicion').view('register_view',compact('data')).view('/layout/footer');
    }
    public function store() {
        $userModel = new UsuarioModel();
        $data = [
            'nombre'     => $this->request->getPost('nombre'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'key_niveles'=> $this->request->getPost('key_niveles'),
            'key_estatus'=> 1
        ];
        if($userModel->save($data)){
                return redirect()->to('/user')->with('msg', '¡Usuario creado con éxito!');
        }    
    }
}

