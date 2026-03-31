<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JDModel;

class JDirectivaController extends Controller
{
    public function index(){
        $db = db_connect();
        $data =$db->query('SELECT * FROM fichas');
        return view('/layout/header').view('/layout/menu_edicion').view('J_directiva',compact('data')).view('/layout/footer');
    }
    public function process(){
        $model = new JDModel();
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
        if(!$this->validate($validationRules)) {
            return view('J_directiva', ['errors' => $this->validator->getErrors()]);
        }
        $img = $this->request->getFile('userfile');
      
            if ( !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move('public/uploads', $newName);
                        $model->save([
                            'nombre'=> $this->request->getPost('nombre'),
                            'titulo'=> $this->request->getPost('titulo'),
                            'contenido'=> $this->request->getPost('contenido'),
                                'email'=> $this->request->getPost('email'),
                            'interes'=> $this->request->getPost('interes'),
                            'filename' => $newName
                        ]);
                      
               if($model){
                    return redirect()->to(base_url('jdirectiva'));
                } else{
                  return redirect()->to(base_url('logo'));  
                }
            }
    }
}