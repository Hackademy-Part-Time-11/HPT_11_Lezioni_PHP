<?php

// include esegue il codice anche con un import errato
// require invece blocca l'esecuzione
include 'foglio1.php';
// include_once
//require_once

Foglio::saluta();

$foglio = new Foglio;
$foglio->saluta();

echo $a;