<?php
/*
 * HTML5 crop image in polygon shape
 * author: netplayer@gmx.com
 * file: upload.php
 * github version 
 */
//error_reporting(E_ALL);

if($_POST) {
	
    define('UPLOAD_DIR', 'upload/');
    $img = $_POST['image'];
       $img = str_replace('data:image/png;base64,', '', $img);
   
    $img = str_replace(' ', '+', $img);
   
    $dataimg = base64_decode($img);
    
    $nameimg= uniqid() ;

    $fileimg = UPLOAD_DIR . $nameimg . '.png';
    $successimg = file_put_contents($fileimg, $dataimg);

     echo $nameimg;


}
?>
