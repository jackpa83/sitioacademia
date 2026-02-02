<?php namespace App\Controllers;

use App\Models\UsuarioModel;

class Auth extends BaseController {

    public function login() {
        return view('login');
    }

    public function logear() {
        $session = session();
        $model = new UsuarioModel();
        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
            
        $user = $model->where('email', $email)->first();

        if($user) {
            // Verificamos si la contraseña coincide con el hash
            if(password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'nombre' => $user['nombre'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'El email no existe.');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}