<?php

//include_once '../../../src/admin/About/About.php';
include_once '../../../vendor/autoload.php';
use App\admin\About\About;
$object = new About();




$_POST['image']=upload('image');
$_POST['resume']=upload('resume');

function upload($file){
    $file_name=$_FILES[$file]['name'];
    $image_tmp_name=$_FILES[$file]['tmp_name'];
    $name=substr(md5(time()),0,10 );
    $data= explode('.',$file_name);
    $file=$name.'.'.end($data);

    move_uploaded_file($image_tmp_name,'../uploads/'.$file);
    return $file;

}
$data=$object->set($_POST)->store();


?>