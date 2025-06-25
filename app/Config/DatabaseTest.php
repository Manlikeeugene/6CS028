<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class DatabaseTest extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        echo "Database Connected! MySQL Version: " . $db->getVersion();
    }
}
