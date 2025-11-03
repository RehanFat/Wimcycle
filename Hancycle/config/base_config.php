<?php 
    namespace config;

    class BaseConfig{
        public $BASE_URL;

        public function initConfig(){
            $this->setBaseURL("hancycle");
        }

        public function setBaseURL($foldername){
            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ||$_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $host = $_SERVER['HTTP_HOST'];

            $this->BASE_URL = $protocol . $host . "/" . $foldername;
        }
    } 

    $config = new BaseConfig();
    $config->initConfig();
?>