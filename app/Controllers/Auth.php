<?php namespace App\Controllers;

use App\Models\UsuarioModel;

class Auth extends BaseController {

    public function login() {
        return view('login');
    }
public function loginAuth() {
        $session = session();
        $model = new UsuarioModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');   
        $user = $model->where('email', $email)->first();
        if($user && password_verify($password, $user['password'])) {
            $ses_data = [
                'id' => $user['id'],
                'nombre' => $user['nombre'],
                'email' => $user['email'],
                'niveles' => $user['key_niveles'],
                'isLoggedIn' => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('msg', 'Email o Contraseña Invalida!');
            return redirect()->to('/');
        }
    }
   /* public function logear() {
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
                'id' => $user['nombre'],
                'email' => $user['email'],
                'niveles' => $user['key_niveles'],
                'isLoggedIn' => TRUE
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta.');
                return redirect()->to('/dashboard');
            }
        } else {
            $session->setFlashdata('msg', 'El email no existe.');
            return redirect()->to('/');
        }
    }*/

    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }
}