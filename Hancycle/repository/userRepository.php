<?php 
    
    require_once "../Storage/data_user.php";

    class userRepository {
        protected $data_user = [];

        public function __construct($default_data_user)
        {
            $this->data_user = $default_data_user;
        }

        // Get ALL
        public function getAlluser() {
            return $this->data_user;
        }

        // Get Detail
        public function getDetailuserById($id) {
            $founduser = null;
            foreach($this->data_user as $user) {
                if($user['id'] == $id) {
                    $founduser = $user;
                }
            }

            return $founduser;
        }

        // create
        public function createuser($user) {
            array_push($this->data_user, $user);
        }

        // Update
        public function updateuserById($id, $new_user) {
            for($i = 0; $i < count($this->data_user); $i++) {
                if($this->data_user[$i]['id'] == $id) {
                    $this->data_user[$i] = $new_user;
                }
            }
        }
        // Delete
        public function deleteuserById($id) {
            $new_data_user = [];
            foreach($this->data_user as $user) {
                if($user['id'] != $id) {
                array_push($new_data_user, $user);
                }
            }

            $this->data_user = $new_data_user;
        }

        public function showData() {
            foreach($this->data_user as $user) {
                echo $user['id'] . " " . $user['name'] . "<br>";
            }
        }
    }
    $userRepository = new userRepository($data_user);
    $userRepository->showData();

    echo "<br>";
    echo "<br>";

    $userRepository->deleteuserById(1);
    $userRepository->deleteuserById(2);
    $userRepository->showData();

    echo "<br>";
    echo "<br>";

    $new_user = [
        "id" => 4,
        "name" => "Rehan e",
        "email" => "rehanE@gmail.com",
        "password" => md5("rehan1223"),
        "role" => "admin"
    ];

    $userRepository->createuser($new_user);
    $userRepository->showData();

    echo "<br>";
    echo "<br>";

    $new_user_update = [
        "id" => 1,
        "name" => "ridho",
        "email" => "ridho@gmail.com",
        "password" => md5("ridho123"),
        "role" => "admin"
    ];

    $userRepository->updateuserById(3, $new_user_update);
    $userRepository->showData();