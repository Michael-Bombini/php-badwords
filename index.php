<?php

/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$testo = "Lorem ipsum, 
dolor sit ciao testo lorem prova LorEM LOREM lorem LoreM";


$daCensurare = $_GET["censura"];
$testoCensurato = "";
$testoCensurato = str_ireplace($daCensurare,"***",$testo);
echo "Testo : " . "  " . $testo;
echo "<br>";
echo "Lunghezza testo : " . strlen($testo);
echo "<br>";
echo "Testo da censurare:" . "  " . $daCensurare;
echo "<br>";
echo "Testo censurato " . " " . $testoCensurato;
echo "<br>";
echo "Lunghezza testo censurato : " . strlen($testoCensurato);
?>
