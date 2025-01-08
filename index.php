<?php
// Verifica se il form è stato inviato
//$_SERVER è una variabile "superglobale" che contiene info riguardo il server e la sessione sottoforma di
// array chiave - valore
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ottieni i dati del form
    $search = htmlspecialchars($_POST['search']);
}
?>