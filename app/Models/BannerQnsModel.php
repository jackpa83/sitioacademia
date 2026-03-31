<?php namespace App\Models;

use CodeIgniter\Model;

class BannerQnsModel extends Model {
    protected $table = 'l_somos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'filename']; 
}