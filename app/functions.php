<?php

function sayHi(string $userName = 'Ana', bool $echoHere = true) {

    $greeting = 'Hi ' . $userName . ' it\'s nice to see you back around :)';

    if ($echoHere) {
        echo $greeting;
    } else {
        return $greeting;
    }
}

function fetchTemplate() {
    return file_get_contents(AppInterface::VIEWS_PATH .  $GLOBALS['template_filename'] . AppInterface::TMPL_EXT);
}

function getPageName() {
    $length = strlen($GLOBALS['template_filename']) - 1;
    return ucwords(substr($GLOBALS['template_filename'], 1, $length));
}