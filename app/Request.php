<?php

declare(strict_types=1);

include_once 'AppInterface.php';

function handleRequest() {
    $digest = [
        'uri'   => null,
        'query' => null,
    ];
    /**
     * filtering and handling of special chars etc should usually happen here or as soon as possible to sanitize the incoming value
     * but this is only serving as a VERY basic example of file usage etc, its only for demonstration and should not be used normally
     * as it is here!!!
     */
    if (isset($_SERVER['REQUEST_URI']) && strlen($_SERVER['REQUEST_URI']) > 1) {
        $digest['uri'] = $_SERVER['REQUEST_URI'];
    }
    if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '') {
        // This is not being used at the moment, but it will be in a day or two
        $digest['query'] = $_SERVER['QUERY_STRING'];
    }
    $GLOBALS['request'] = $digest;
    if ($digest['uri'] === null && $digest['query'] === null) {
        $GLOBALS['template_filename'] = '/home';
    } else {
        $GLOBALS['template_filename'] = $digest['uri'];
    }
}