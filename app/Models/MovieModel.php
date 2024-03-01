<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model
{
    protected $table = 'movielog';
    protected $primaryKey = 'm_id';
    protected $allowedFields = [
        'moviename',
        'rating',
        'review',
        'datelog',
        'image'
    ];
    protected $returnType = 'object';
}
