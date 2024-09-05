<?php 
namespace App\Models;
use CodeIgniter\Model;
class Rh extends Model
{
    protected $table = 'rh';
    protected $primaryKey = 'id';
     
    protected $allowedFields =  [
        'name',
        'society',
        'address',
        'phone',
        'email',
        'password',
        'last_update'
    ];
}