<?php

namespace App\Models;
use Config\Database\ConnectionInterface;
use CodeIgniter\Model;
class userModel extends Model{
    protected $table='users';
    protected $allowedFields = ['username','password','u_type',];

    protected $primaryKey   = 'u_id';
    public function __construct()
    {
        parent::__construct();
        $db=\Config\Database::connect();
        $builder = $db->table('users');
    }
}
?>