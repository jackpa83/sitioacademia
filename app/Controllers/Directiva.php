<?php
namespace App\Controllers;

class Directiva extends BaseController
{
    public function index(): string
    {
        return view('/layout/header').view('/layout/nav').view('directiva').view('/layout/footer');
    }
}
