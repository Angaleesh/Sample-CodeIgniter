<?php

namespace App\Models;
use Config\Database\ConnectionInterface;
use CodeIgniter\Model;
class newModel extends Model{
    protected $table='tbl';
    protected $allowedFields = ['first_name','last_name','address',];

    protected $primaryKey   = 'id';
    public function __construct()
    {
        parent::__construct();
        $db=\Config\Database::connect();
        $builder = $db->table('tbl');
    }
}
?>