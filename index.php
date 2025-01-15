<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $exp = "/([A-Z])\w+@([A-Z])\w+.([A-Z])+\w/gi";
    $email = htmlspecialchars($_POST['email']);
    
    if(preg_match($email, $exp) == 1)
    {
        //va avanti alla homepage  
        return "Pages/Balisong_Web.html";
    }else
    {
        //messaggio di errore nella text box
        echo '<script>alert("inserire un\'email valida")</script>';
    }
    
}
?>