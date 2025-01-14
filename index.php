<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ottieni i dati del form
    $search = htmlspecialchars($_POST['search']);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $exp = "/([A-Z])\w+@([A-Z])\w+.([A-Z])+\w/gi";
    $email = htmlspecialchars($_POST['email']);
    
    if(preg_match($email, $exp) == 1)
    {
        //va avanti alla homepage
    }else
    {
        //messaggio di errore nella text box
    }
    
}
?>