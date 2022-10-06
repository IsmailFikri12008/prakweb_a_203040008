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
    private $dbh;
    private $stmt;

    public function __construct() {
        // Data Source Name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}