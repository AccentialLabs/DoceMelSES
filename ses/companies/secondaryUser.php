<?php

require '../Vendor/aws.phar';

use Aws\Ses\SesClient;

$client = SesClient::factory(array(
            'key' => 'AKIAJIBFPESW4BASAF7Q',
            'secret' => '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',
            'region' => 'us-east-1'
        ));

//capturando os dados enviados
$nome = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['normalPass'];

//Now that you have the client ready, you can build the message
$msg = array();
$msg['Source'] = "contato@adventa.com.br";
//ToAddresses must be an array
$msg['Destination']['ToAddresses'][] = "contato@adventa.com.br";
//$msg['Destination']['ToAddresses'][] = "advcompany@accential.com.br";

$msg['Message']['Subject']['Data'] = "Usuário Secundário";
$msg['Message']['Subject']['Charset'] = "UTF-8";

$msg['Message']['Body']['Text']['Data'] = "Text data of email";
$msg['Message']['Body']['Text']['Charset'] = "UTF-8";

//enviando array para template
$data['normalPass'] = $pwd;
$data['name'] = $nome;
$data['email'] = $email;
$context = stream_context_create($data);

ob_start();

include "../Emails/html/table_email_company_secondary_user.php";
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

