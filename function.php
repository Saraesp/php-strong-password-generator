<?php

function generateRanPassword($lenght)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:\<,.?/\\;';

    $pwd = '';

    while(strlen($pwd) < $lenght){
        $shfl = $alphabet[rand(0, strlen($alphabet) -1)];
        $pwd .=  $shfl;
    }
    return $pwd;
}

$error = '';
if(isset($_GET['lungh_password']) && $_GET['lungh_password'] !== ''){
    
    $pwd = generateRanPassword($_GET['lungh_password']);
}
elseif(isset($_GET['lungh_password']) && $_GET['lungh_password'] === ''){
    
    $error = 'Non hai inserito un valore per la lunghezza';
}

?>