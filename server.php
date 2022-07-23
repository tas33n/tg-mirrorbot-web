<?php
error_reporting(0);

$key = $_REQUEST["url"];  

if (filter_var($key, FILTER_VALIDATE_URL) === FALSE) {
    echo "<script>Swal.fire(
        'Faild!',
        'Invalid url!',
        'error'
      )</script>";
} else {

    $url = "https://api.telegram.org/bot5443700122:AAFYxyGEN3dCd66QVjaVGEmrZBBsmcFioBs/sendMessage?chat_id=-1001744435283&text=/mirror%20" . $key;
    
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    
    $resp = curl_exec($curl);
    curl_close($curl);
    // var_dump($resp);

    echo "<script>Swal.fire(
        'Mirror task added!',
        'Your file is added to the task! wait till it get uploaded. ',
        'success'
      )</script>";

}


?>
