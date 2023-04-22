<?php

function sayHi(string $userName = 'Ana', bool $echoHere = true) {

    $greeting = 'Hi ' . $userName . ' it\'s nice to see you back around :)';

    if ($echoHere) {
        echo $greeting;
    } else {
        return $greeting;
    }
}