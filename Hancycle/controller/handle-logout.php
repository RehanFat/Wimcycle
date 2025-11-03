<?php
require_once "../config/base_config.php";

session_start();
session_destroy();
header("location: " . $config->BASE_URL . "/dashboard/login");