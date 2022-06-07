<?php include('include/init.php');
		 $dept_payment = new DeptPayment();
		 if(isset($_POST['submit'])) {
			 if($dept_payment) {
				 $dept_payment->dept_id = $_POST['department'];
				 $dept_payment->student_name = $_POST['name'];
				 $dept_payment->matric_no = $_POST['matric_no'];
				 $dept_payment->email = $_POST['email'];
                 $dept_payment->payment_date = date("Y-m-d h:ia");
				 $dept_payment->save();
			 }
		 }
function genReference($qtd){
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
    $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;
 
    $Hash=NULL;
 
    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }
 
    return $Hash;
}
 
 
$result = array();
$dept = Department::find_by_id($_POST['department']);
//Set other parameters as keys in the $postdata array
$postdata = array(
    'email' => $_POST['email'],
	'amount' => $dept->amount,
    'subaccount' =>  $dept->account_code,
    'callback_url'=>"http://eazypay.com.ng/d_invoice.php?id={$dept_payment->id}",
    "reference" => genReference(10)
);
 
$url = "https://api.paystack.co/transaction/initialize";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$headers = [
    'Authorization: Bearer sk_live_00299497c31e2f90641c1ffb4164b231f5b001a9',
    'Content-Type: application/json',
 
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
$request = curl_exec($ch);
 
curl_close($ch);
 
if ($request) {
 
    $result = json_decode($request, true);
 
    header('Location: ' . $result['data']['authorization_url']);
 
}

?>