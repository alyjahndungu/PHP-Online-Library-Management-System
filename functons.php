<?php

Class smsAPP
{

    private $apikey, $apiUsername;
    public function __construct()
    {
        $this-> apikey = "NerdTurnstone";
        $this-> apiUsername = "a21bf28a33a2a22affcc9e78f3e5897b";
    }
// id of contact to delete
public function sendMessage($phone, $meMessage ){
    $params = array(
        "phoneNumbers"=> $phone, // phone numbers comma separated
        "message"=> $meMessage,
        "senderId"=> "", // leave blank if you do not have a custom sender Id
    );
    $data = json_encode($params);
// endoint
    $sendMessageURL= "https://api.amisend.com/v1/sms/send";

     $req = curl_init($sendMessageURL);

curl_setopt($req, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($req, CURLOPT_TIMEOUT, 60);
curl_setopt($req, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
curl_setopt($req, CURLOPT_POSTFIELDS, $data);
curl_setopt($req, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	'x-api-user: '.$this-> apikey,
	'x-api-key: '.$this-> apiUsername
));

// read api response
$res= curl_exec($req);
}

}
