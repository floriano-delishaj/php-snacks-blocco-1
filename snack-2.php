<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];



if (strlen($name) > 3 && strpos($mail, "@") && ctype_digit($age) ) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}