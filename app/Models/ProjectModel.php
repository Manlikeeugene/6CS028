<?php

namespace App\Models;
use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $allowedFields = ['title', 'image', 'view_link'];
}
