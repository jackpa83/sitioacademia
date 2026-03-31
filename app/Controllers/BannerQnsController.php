<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BannerQnsModel;

class BannerQnsController extends Controller{
    public function index(){
        $db = db_connect();
        $data =$db->query('SELECT * FROM l_somos');
        return view('/layout/header').view('/layout/menu_edicion').view('L_quienes_somos',compact('data')).view('/layout/footer');
    }
    public function process(){
        $model = new BannerQnsModel();
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
            $img = $this->request->getFile('userfile');
            if (! $img->hasMoved()) {
                // 3. Move the file to a permanent location
                // WRITEPATH . 'uploads' maps to /writable/uploads/
                $newName = $img->getRandomName();
                //$img->move(WRITEPATH . 'uploads', $newName);
                $img->move('public/uploads', $newName);
                $model->save([
                    'title'    => $this->request->getPost('title'),
                    'filename' => $newName
                ]);
                if($model){
                    return redirect()->to(base_url('logo_q'));
                }
                
            }
    }
}