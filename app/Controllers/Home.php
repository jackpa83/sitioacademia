<?php

namespace App\Controllers;
use App\Models\BannerQnsModel;
class Home extends BaseController{
    public function index(): string{
        $db = db_connect();
        $data =$db->query('SELECT * FROM l_somos ORDER BY id DESC LIMIT 1');
        $datos =$db->query('SELECT * FROM banner ORDER BY id DESC LIMIT 1');
        return view('/layout/header').view('/layout/nav').view('welcome_message',compact('data','datos')).view('/layout/footer');
    }
}
