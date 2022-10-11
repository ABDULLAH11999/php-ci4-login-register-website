<?php 
namespace App\Models;
use CodeIgniter\Model;

class UsersModal extends Model{
protected $table = 'users';
protected $primarykey = 'id';
protected $allowfields = ['name','email','password'];
}

?>