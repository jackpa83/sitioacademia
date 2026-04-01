<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\JDModel;
class Directiva extends BaseController {
    public function index(): string{
    
        $db = db_connect();
        $data =$db->query('SELECT * FROM fichas');
        return view('/layout/header').view('/layout/nav').view('directiva',compact('data')).view('/layout/footer');
    }
}
