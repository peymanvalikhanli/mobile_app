<?php
function sendsms($username,$password,$too,$text)
{
    $post = array(
        'action' => 'SMS_SEND',
        'username' => 'Fonoontadbir',
        'password'   => '1234sibka4321',
        'api'=>1,
        'from'=>'1000',
        'to'=>$too,
        'FLASH'=>0,
        'text'=>$text
    );
    $ch = curl_init('http://iraniansms.net/API/');
    curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=@peymanvalikhanlichaneltest&text='.$Mobile");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // RETURN THE CONTENTS OF THE CALL
    $resp = curl_exec($ch);
    return $resp;
}
$too="+989365820723";
$text="salampeyman";
$rr = sendsms($username,$password,$too,$text);
//echo "test";

print_r($rr);