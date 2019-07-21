<?php
require 'core.php';
require 'connect.php';
session_destroy();
header('Location:hosp-index.php');
?>