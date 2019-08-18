<?php

//ini_set('zlib.output_compression_level', 4);//http://magicmonster.com/kb/prg/php/gzip_compression.html
   ob_start ("ob_gzhandler");
      
?>


<?php
flush();

$ms = 100;
$seconds = round($ms);



//$urlbi='https://us6.proxysite.com/process.php?d=';

    $ch =  curl_init($urlbi);  
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

 //https://stackoverflow.com/questions/11064980/php-curl-vs-file-get-contents
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);

    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));

    
    
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  //notwork if savemode  https://www.phpclasses.org/package/10875-PHP-Retrieve-the-content-of-multiple-URLs-using-CURL.html 
    //curl_setopt($ch, CURLOPT_TCP_FASTOPEN, 1);//notwork if savemode 
    
curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");    
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);


$result = curl_exec($ch);

curl_close($ch);
usleep($seconds);
    flush();

//$err= curl_error($ch);
//if ($err) {
  //echo "cURL Error #:" . $err; //https://stackoverflow.com/questions/42211194/php-curl-and-api
    //echo'';
    //sleep(2);
    //flush();
//} 
//else {
//echo $result;


//echo 'Connected';
//}

/*
//Did an error occur? If so, dump it out. //http://thisinterestsme.com/php-setting-curl-timeout/
if(curl_errno($ch)){
    throw new Exception(curl_error($ch));
}
*/
?>


<?php
        ob_end_flush();
      ?>