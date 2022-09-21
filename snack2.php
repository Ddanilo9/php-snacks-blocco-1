<?php

$email = $_GET['email'];
$age = $_GET['age'];
$name = $_GET['name'];

$emailCont = strpos($email, '@');

if($emailCont != false && is_numeric($age) && strlen($name) > 3){
    $msg = 'Accesso riuscito';
}   else {
    $msg = 'Accesso negato';
}

?>

<div>
    <?= $msg ?>
</div>