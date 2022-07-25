<?php
error_reporting(0);
$api = "your bot api here";
$key = $_REQUEST["url"];  
$typ = $_REQUEST["method"];  

if (filter_var($key, FILTER_VALIDATE_URL) === FALSE) {
    echo "<script>Swal.fire(
        'Mirror Error!',
        'Invalid url!',
        'error'
      )</script>";
} else {

    $url = "https://api.telegram.org/bot'.$api.'/sendMessage?chat_id=-1001744435283&text=/".$typ."%20".$key;
    
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
