<?php

require '../Vendor/aws.phar';

use Aws\Ses\SesClient;

$client = SesClient::factory(array(
            'key' => 'AKIAJIBFPESW4BASAF7Q',
            'secret' => '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',
            'region' => 'us-east-1'
        ));

//Now that you have the client ready, you can build the message
$msg = array();
$msg['Source'] = "contato@adventa.com.br";
//ToAddresses must be an array
$msg['Destination']['ToAddresses'][] = "contato@adventa.com.br";
//$msg['Destination']['ToAddresses'][] = "advcompany@accential.com.br";

$msg['Message']['Subject']['Data'] = "Bem-Vindo ao Adventa";
$msg['Message']['Subject']['Charset'] = "UTF-8";

$msg['Message']['Body']['Text']['Data'] = "Text data of email";
$msg['Message']['Body']['Text']['Charset'] = "UTF-8";

//starta o 
ob_start();
//include "../Emails/html/table_email_new_user.php";
include "../Emails/html/table_email_company_inactivity.php";
$temp = ob_get_clean();

$msg['Message']['Body']['Html']['Data'] = $temp;
$msg['Message']['Body']['Html']['Template'] = 'Emails/html/teste';

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

