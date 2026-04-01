<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LogoModel;

class Logo extends Controller{
 
    public function index(){
     if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        } 
        $db = db_connect();
        $data =$db->query('SELECT * FROM logos');
        return view('/layout/header').view('/layout/menu_edicion').view('logo',compact('data')).view('/layout/footer');

    }

    public function process()
    {
 $model = new LogoModel();
        
        // 1. Set Validation Rules
        $validationRules = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                    'mime_in[userfile,image/jpg,image/jpeg,image/png]',
                    'max_size[userfile,3072]',
                ],
            ],
        ];

        if (! $this->validate($validationRules)) {
            return view('logo', ['errors' => $this->validator->getErrors()]);
        }

        // 2. Get the file from the request
        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            // 3. Move the file to a permanent location
            // WRITEPATH . 'uploads' maps to /writable/uploads/
            $newName = $img->getRandomName();
            //$img->move(WRITEPATH . 'uploads', $newName);
            $img->move('public/uploads', $newName);
            //return "Imagen Cargada con Exito!" . base_url('uploads');
            $model->save([
                'title'    => $this->request->getPost('title'),
                'filename' => $newName
            ]);
            if($model){
                return redirect()->to(base_url('logo'));
            }
             
        }

      
    }
}