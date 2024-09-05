<?php 
namespace App\Models;
use CodeIgniter\Model;
class Page extends Model
{
    protected $table = 'pageWeb';
    protected $primaryKey = 'id';
     
    protected $allowedFields =  [
        'pageType',
        'pageTitle',
        'pageDescription',
        'email',
        'phone',
        'disponibleTime',
        'last_update'
    ];
}