<?php
include_once 'vendor/autoload.php';
use App\admin\About\About;
$object = new About();
$data=$object->store1($_POST);

?>
