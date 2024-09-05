<?php 
namespace App\Models;
use CodeIgniter\Model;
class Offer extends Model
{
    protected $table = 'offers';
    protected $primaryKey = 'id';
     
    protected $allowedFields =  [
        'title',
        'society',
        'description',
        'typeContrat',
        'status',
        'last_update'
    ];
}