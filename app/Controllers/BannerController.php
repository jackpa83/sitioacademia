<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BannerModel;

class BannerController extends Controller
{
    public function index(){
    if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        } 
        $db = db_connect();
        $data =$db->query('SELECT * FROM banner');
        return view('/layout/header').view('/layout/menu_edicion').view('Banner',compact('data')).view('/layout/footer');

    }

    public function process()
    {
 $model = new BannerModel();
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
                return redirect()->to(base_url('banner'));
            }
             
        }

      
    }
}