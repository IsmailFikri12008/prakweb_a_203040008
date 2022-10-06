<?php

class Mahasiswa_model {
    // private $mhs = [
    //         [
    //             "nama" => "Ismail Fikri", 
    //             "nrp" => "203040008",
    //             "email" => "203040008@mail.unpas.ac.id",
    //             "jurusan" => "Teknik Informatika"
    //         ],
    //         [
    //             "nama" => "Faisal Ibnul Hakim", 
    //             "nrp" => "203040027",
    //             "email" => "203040027@mail.unpas.ac.id",
    //             "jurusan" => "Teknik Mesin"
    //         ],
    //         [
    //             "nama" => "Fikri Ridwan", 
    //             "nrp" => "203040001",
    //             "email" => "203040001@mail.unpas.ac.id",
    //             "jurusan" => "Teknik Industri"
    //         ]
    //     ];


    // Database Handler


    private $table = 'mahasiswa';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById( $id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}