
 <?php>


print_r($_POST);

method 1 using  php curl library

$handler = curl_init();
curl_setotp($handler,CURL_RETURNTRANSSFER, true);
curl_setotp($handler,CURL_POST, true);
curl_setotp($handler,CURL_URL,'https://www.google.com/recaptcha/api/siteverify');	
curl_setotp($handler,CURL_POSTFIELD, [
'secret' => '6Le61EsUAAAAAH_z-5K1wIuqH12FDOBxoHlf2gRx',
'response' => '$_POST['g-recaptcha-response']'
]);

$response = curl_exec($handler);
$response = json_decode($response);
curl_close($handler);


if($responses->success)
{
	echo "Successfully!!";
}
else
{
	echo "Wrong";
}


?> 
