<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'tbl_users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'email',
        'password'
    ];
    protected $returnType = 'object';
}