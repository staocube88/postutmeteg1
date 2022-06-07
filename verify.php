<?php
$result = array();
//The parameter after verify/ is the transaction reference to be verified
$url =  'https://api.paystack.co/transaction/verify/'. $_GET['reference'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
  $ch, CURLOPT_HTTPHEADER, [
    'sk_live_00299497c31e2f90641c1ffb4164b231f5b001a9']
);
$request = curl_exec($ch);
if(curl_error($ch)){
 echo 'error:' . curl_error($ch);
 }
curl_close($ch);

if ($request) {
  $result = json_decode($request, true);
}

if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
  echo "Transaction was successful";
	//Perform necessary action
}else{
  echo "Transaction was unsuccessful";
}