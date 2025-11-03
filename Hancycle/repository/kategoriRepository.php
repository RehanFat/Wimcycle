<?php 
    
    require_once "../Storage/data-kategori.php";

    class KategoriRepository {
        protected $data_kategori = [];

        public function __construct($default_data_kategori)
        {
            $this->data_kategori = $default_data_kategori;
        }

        // Get ALL
        public function getAllkategori() {
            return $this->data_kategori;
        }

        // Get Detail
        public function getDetailkategoriById($id) {
            $foundkategori = null;
            foreach($this->data_kategori as $kategori) {
                if($kategori['id'] == $id) {
                    $foundkategori = $kategori;
                }
            }

            return $foundkategori;
        }

        // create
        public function createkategori($kategori) {
            array_push($this->data_kategori, $kategori);
        }

        // Update
        public function updatekategoriById($id, $new_kategori) {
            for($i = 0; $i < count($this->data_kategori); $i++) {
                if($this->data_kategori[$i]['id'] == $id) {
                    $this->data_kategori[$i] = $new_kategori;
                }
            }
        }
        // Delete
        public function deletekategoriById($id) {
            $new_data_kategori = [];
            foreach($this->data_kategori as $kategori) {
                if($kategori['id'] != $id) {
                array_push($new_data_kategori, $kategori);
                }
            }

            $this->data_kategori = $new_data_kategori;
        }

        public function showData() {
            foreach($this->data_kategori as $kategori) {
                echo $kategori['id'] . " " . $kategori['nama'] . "<br>";
            }
        }
    }
    $kategoriRepository = new kategoriRepository($data_kategori);
    $kategoriRepository->showData();

    echo "<br>";
    echo "<br>";

    $kategoriRepository->deletekategoriById(2);
    $kategoriRepository->deletekategoriById(1);
    $kategoriRepository->showData();

    echo "<br>";
    echo "<br>";

    $new_kategori = [
        "id" => 4,
            "nama" => "Sepeda Joy",
            "deskripsi" => "Deskripsi bmx"
    ];

    $kategoriRepository->createkategori($new_kategori);
    $kategoriRepository->showData();

    echo "<br>";
    echo "<br>";

    $new_kategori_update = [
        "id" => 3,
            "nama" => "XMB",
            "deskripsi" => "Deskripsi XMB"
    ];

    $kategoriRepository->updatekategoriById(3, $new_kategori_update);
    $kategoriRepository->showData();