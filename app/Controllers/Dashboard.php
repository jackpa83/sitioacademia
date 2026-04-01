<?php

namespace App\Controllers;

class Dashboard extends BaseController{
    public function index(): string{
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        } 
        return view('/layout/header').view('/layout/menu_edicion').view('dashboard');
    }
}
