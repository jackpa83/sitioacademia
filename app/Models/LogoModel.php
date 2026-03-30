<?php namespace App\Models;

use CodeIgniter\Model;

class LogoModel extends Model {
    protected $table = 'logos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'filename']; 
}