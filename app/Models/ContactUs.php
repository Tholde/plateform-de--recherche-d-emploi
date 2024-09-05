<?php 
namespace App\Models;
use CodeIgniter\Model;
class ContactUs extends Model
{
    protected $table = 'contactus';
    protected $primaryKey = 'id';
     
    protected $allowedFields =  [
        'fullname',
        'email',
        'phone',
        'message',
        'last_update',
        'IsRead'
    ];
} 