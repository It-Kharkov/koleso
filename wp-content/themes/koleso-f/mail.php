<?php

if(isset($_POST['name']) && isset($_POST['phone'])){

    $message=$_POST['name']." ".$_POST['phone'];

    mail("girbest@gmail.com", "Обратный звонок", $message,
        "From: webmaster@$SERVER_NAME\r\n"
        ."Reply-To: webmaster@$SERVER_NAME\r\n"
        ."X-Mailer: PHP/" . phpversion());

}

?>