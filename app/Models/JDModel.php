<?php namespace App\Models;

use CodeIgniter\Model;

class JDModel extends Model {
    protected $table = 'fichas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','titulo','contenido','email','interes','filename']; 
}