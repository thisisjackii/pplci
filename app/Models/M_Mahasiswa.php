<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa extends Model
{
    protected $table = 'tbl_mahasiswa';
    function fetch()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM tbl_mahasiswa');
        return $query->getResult('array');
    }
}