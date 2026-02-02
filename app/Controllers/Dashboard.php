<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('/layout/header').view('/layout/menu_edicion').view('dashboard');
    }
}
