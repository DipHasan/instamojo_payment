<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_7aa2d48db85a6039eea7732e552",
                  "X-Auth-Token:test_6ad38df8b8bf8176083691a0204"));
$payload = Array(
    'purpose' => 'Buy Domain Name',
    'amount' => '10',
    'phone' => '9999999999',
    'buyer_name' => 'Dip Hasan',
    'redirect_url' => 'http://localhost/oop/instamojo_payment/redirect.php',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'jackyrh66@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
echo '<pre>';
print_r($response);
?>