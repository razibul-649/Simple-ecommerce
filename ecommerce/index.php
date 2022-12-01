<?php
require_once 'vendor/autoload.php';
use App\classes\Home;

$home_redirect = new Home();

$home_redirect->index();