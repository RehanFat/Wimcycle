<?php
require_once "../config/base_config.php";

session_start();
header("location: " . $config->BASE_URL . "/dasboard/login");