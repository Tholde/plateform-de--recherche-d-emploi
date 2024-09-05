<?php 
namespace App\Models;
use CodeIgniter\Model;
class RequestOffers extends Model
{
    protected $table = 'demandeoffers';
    protected $primaryKey = 'id';
     
    protected $allowedFields =  [
        'idOffers',
        'idUsers',
        'society',
        'status',
        'last_update'
    ];
    public function create($data){
        return $this->insert($data);
    }
}