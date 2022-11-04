<?php

namespace App\Model;
use CodeIgniter\Model;
class UserModel extends Model {

    protected $table = 'users';
    protected $primaryKey ='id';
    protected $returnType = 'array';
    protected $allowedFields = ['username', 'password'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
	

}

?>