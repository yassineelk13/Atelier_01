<?php
namespace App\Models;
use CodeIgniter\Model;

class ArticleModel extends Model{
    protected $table = 'Article';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom','reference','quantity'];

    protected $validationRules = [
        'reference' => 'required',
        'libelle'   => 'required',
        'quantity'  => 'required|integer|greater_than[0]',
    ];
}?>