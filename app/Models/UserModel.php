<?php
<<<<<<< HEAD
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'db_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','email'];
}?>
=======
 namespace App\Models;
 use CodeIgniter\Model;
 
 class UserModel extends Model{
     protected $table = 'users';
     protected $primaryKey = 'id';
     protected $allowedFields = ['name','email'];
 }?>
>>>>>>> 6cacc1df8cc14f9566ada4119cf1fb6f4763b6d6
