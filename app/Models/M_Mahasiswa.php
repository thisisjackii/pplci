<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa extends Model
{
    protected $table = 'tbl_mahasiswa';

    protected $primaryKey = 'nim'; // Specify the primary key column

    protected $allowedFields = ['nim', 'nama', 'umur']; // Fields that are allowed to be inserted

    public function fetchAll()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM tbl_mahasiswa');
        return $query->getResult('array');
    }

    public function fetchByID($id)
    {
        $query = "SELECT * FROM $this->table WHERE nim = ?";
        return $this->db->query($query, [$id])->getRowArray();
    }

    public function deleteByID($id)
    {
        $query = "DELETE FROM $this->table WHERE nim = ?";
        $this->db->query($query, [$id]);
        return $this->db->affectedRows() > 0;
    }

    public function searchByName($name)
    {
        $query = "SELECT * FROM $this->table WHERE nama LIKE ?";
        return $this->db->query($query, ["%$name%"])->getResult('array');
    }

    public function insertData($id, $nama, $umur)
    {
        $query = "INSERT INTO $this->table (nim, nama, umur) VALUES (?, ?, ?)";
        $this->db->query($query, [$id, $nama, $umur]);
        return $this->db->affectedRows() > 0;
    }

    public function updateData($nim, $data)
    {
        $fields = '';
        foreach ($data as $key => $value) {
            $fields .= "$key = '$value', ";
        }
        $fields = rtrim($fields, ', ');

        $query = "UPDATE $this->table SET $fields WHERE nim = ?";
        $this->db->query($query, [$nim]);
        return $this->db->affectedRows() > 0;
    }
}