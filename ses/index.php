<?php

require 'Vendor/aws.phar';

use Aws\Ses\SesClient;

require_once ('lib/raelgc/view/Template.php');

$client = SesClient::factory(array(
            'key' => 'AKIAJN32XAXLBOLPESVA',
            'secret' => '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',
            'region' => 'us-east-1'
        ));

$subject = $_POST['subject'];
$type = $_POST['type'];
if ($type == 'newUser') {
    $nome = $_POST['userName'];
    $email = $_POST['userEmail'];
    $pass = $_POST['pwd'];
}

//Now that you have the client ready, you can build the message
$msg = array();
$msg['Source'] = "contato@adventa.com.br";
//ToAddresses must be an array
//$msg['Destination']['ToAddresses'][] = "contato@adventa.com.br";
$msg['Destination']['ToAddresses'][] = "advcompany@accential.com.br";

$msg['Message']['Subject']['Data'] = $subject;
$msg['Message']['Subject']['Charset'] = "UTF-8";

$msg['Message']['Body']['Text']['Data'] = "Text data of email";
//$msg['Message']['Body']['Text']['Data'] = $template;
$msg['Message']['Body']['Text']['Charset'] = "UTF-8";

//$msg['Message']['Body']['Html']['Data'] = "HTML Data of email<br />";
if ($type == 'newUser') {
    $msg['Message']['Body']['Html']['Data'] = "Olá $nome, seja bem-vindo!!!<br/>Seu usuário é: $email<br/>Sua senha é: $pass";
} else {

    $data['name'] = "Thiago";
    $context = stream_context_create($data);
    //$temp = file_get_contents("Emails/html/teste.php", false, $context);
    
    ob_start();
    include "Emails/html/teste.php";
    $out1 = ob_get_clean();
    
    $msg['Message']['Body']['Html']['Data'] = $out1;
    $msg['Message']['Body']['Html']['Template'] = 'Emails/html/teste';
}
$msg['Message']['Body']['Html']['Charset'] = "UTF-8";

try {
    $result = $client->sendEmail($msg);
    //save the MessageId which can be used to track the request
    $msg_id = $result->get('MessageId');
    echo("MessageId: $msg_id");

    //view sample output
    print_r($result);
} catch (Exception $e) {
    //An error happened and the email did not get sent
    echo('ERROR: ' . $e->getMessage() . '<br />');
}

//view the original message passed to the SDK 
print_r($msg);


