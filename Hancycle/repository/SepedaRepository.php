<?php 
    
    require_once "../Storage/data_sepeda.php";

    class SepedaRepository {
        protected $data_sepeda = [];

        public function __construct($default_data_sepeda)
        {
            $this->data_sepeda = $default_data_sepeda;
        }

        // Get ALL
        public function getAllSepeda() {
            return $this->data_sepeda;
        }

        // Get Detail
        public function getDetailSepedaById($id) {
            $foundSepeda = null;
            foreach($this->data_sepeda as $sepeda) {
                if($sepeda['id'] == $id) {
                    $foundSepeda = $sepeda;
                }
            }

            return $foundSepeda;
        }

        // create
        public function createSepeda($sepeda) {
            array_push($this->data_sepeda, $sepeda);
        }

        // Update
        public function updateSepedaById($id, $new_sepeda) {
            for($i = 0; $i < count($this->data_sepeda); $i++) {
                if($this->data_sepeda[$i]['id'] == $id) {
                    $this->data_sepeda[$i] = $new_sepeda;
                }
            }
        }
        // Delete
        public function deleteSepedaById($id) {
            $new_data_sepeda = [];
            foreach($this->data_sepeda as $sepeda) {
                if($sepeda['id'] != $id) {
                array_push($new_data_sepeda, $sepeda);
                }
            }

            $this->data_sepeda = $new_data_sepeda;
        }

        public function showData() {
            foreach($this->data_sepeda as $sepeda) {
                echo $sepeda['id'] . " " . $sepeda['merek'] . "<br>";
            }
        }
    }
    $sepedaRepository = new SepedaRepository($data_sepeda);
    $sepedaRepository->showData();

    // echo "<br>";
    // echo "<br>";

    // $sepedaRepository->deleteSepedaById(2);
    // $sepedaRepository->deleteSepedaById(1);
    // $sepedaRepository->deleteSepedaById(3);
    // $sepedaRepository->deleteSepedaById(4);
    // $sepedaRepository->showData();

    // echo "<br>";
    // echo "<br>";

    // $new_sepeda = [
    //     "id" => 7,
    //         "merek" => "Hancycle BMBRO",
    //         "model" => "BMX",
    //         "harga" => 3700000,
    //         "gambar" => "./assets/bmx-hancycle.png",
    //         "short_description" => "BMX legendaris dengan rangka kuat untuk freestyle & race.",
    //         "deskripsi" => "Salah satu merek BMX legendaris asal Indonesia yang sudah ada sejak tahun 1974. Hancycle dikenal dengan rangka kuat dan desain freestyle maupun race BMX, cocok untuk trik di skatepark maupun balap lintasan tanah."
    // ];

    // $sepedaRepository->createSepeda($new_sepeda);
    // $sepedaRepository->showData();

    // echo "<br>";
    // echo "<br>";

    // $new_sepeda_update = [
    //     "id" => 7,
    //         "merek" => "Hancycle BMB",
    //         "model" => "BMX",
    //         "harga" => 3700000,
    //         "gambar" => "./assets/bmx-hancycle.png",
    //         "short_description" => "BMX legendaris dengan rangka kuat untuk freestyle & race.",
    //         "deskripsi" => "Salah satu merek BMX legendaris asal Indonesia yang sudah ada sejak tahun 1974. Hancycle dikenal dengan rangka kuat dan desain freestyle maupun race BMX, cocok untuk trik di skatepark maupun balap lintasan tanah."
    // ];

    // $sepedaRepository->updateSepedaById(7, $new_sepeda_update);
    // $sepedaRepository->showData();