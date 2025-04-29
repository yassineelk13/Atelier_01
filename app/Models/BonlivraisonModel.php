<?php
namespace App\Models;
use CodeIgniter\Model;

class BonlivraisonModel extends Model{
    protected $table = 'Bonlivraison';
    protected $primaryKey = 'id';
    protected $allowedFields = ['dateCommande','client'];
}?>