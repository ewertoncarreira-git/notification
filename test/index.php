<?php

require __DIR__ . "/../lib_ext/autoload.php";

use Notification\Email;

$novoEmail = new Email(
        2                           
        , 'mail.host.com'          
        , 'your@email.com'      
        , 'your-pass'     
        , 'smtp secure (tls / ssl)'                     
        , port (587)                       
        , 'from@email.com'         
        , 'From Name'          
);

$novoEmail->sendEmail("Assunto de Teste"
        , "<p>Este é um e-mail de <b>teste</b></p>"
        , "ewertoncarreira@gmail.com"
        , "Ewerton Carreira - Remetente"
        , "ewertoncarreira@gmail.com"
        , "Ewerton Carreira - Destinatário"
);

var_dump($novoEmail);
