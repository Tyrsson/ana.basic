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
    /**
     * at this point template filename is /contact
     * we do not want to display / and we do not want the words lowercase
     * strlen returns the length of the string, we subtract 1 for /
     * substr return the number of chars from offset, see the php manual for all options, but basically we are
     * telling it to skip the / and return everything after it, because that is why we needed $length
     * this could be rewritten into a single line of code but nested code like that is harder to understand so I did it this way
     */
    $length = strlen($GLOBALS['template_filename']) - 1;
    return ucwords(substr($GLOBALS['template_filename'], 1, $length));
}