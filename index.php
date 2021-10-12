<?php

    $stringaEsercizio = "Nel momento stesso in cui accettate i termini e le condizioni per la pubblicazione 
    dei vostri articoli tramite Facebook, avete a disposizione nella pagina una sezione chiamata 
    “Articoli interattivi” nella sezione che trovate in alto in “Strumenti di pubblicazione”. 
    In questa sezione vi verranno chieste principalmente due cose. La prima è di inserire sul vostro sito
    un meta tag che ne attesti la proprietà; lo farete comodamente dal plugin, inserendo semplicemente
    la “Page ID” nel campo richiesto. La seconda è fornire l’URL del feed che pre caricherà articolo,
    formattazione e oggetti grafici per la eventuale pubblicazione. Facile!
    Prima di autorizzarvi a caricare gli articoli nel sistema, Facebook vuole verificarli, 
    per controllare che non vi siano problemi nel codice, richiesta che verrà evasa al massimo
    entro tre giorni, dicono.";

    $asterischiCensura = "***";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php bad words</title>
</head>
<body>

    <h5>
        <?php
            echo $censura = str_replace($_GET["input"], $asterischiCensura, $stringaEsercizio);
        ?>
    </h5>

    <h5>
        <?php
            echo 'Lunghezza testo inserito: ' . str_word_count($stringaEsercizio) . ' parole.'
        ?>
    </h5>

    
</body>
</html>