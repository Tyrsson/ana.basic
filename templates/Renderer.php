<?php

declare(strict_types=1);
include_once __DIR__ . '/../app/AppInterface.php';
include_once AppInterface::APP_PATH . DIRECTORY_SEPARATOR . 'Request.php';

function renderPage() {
    /**
     * This is really not the way you would want to do this normally, but, I built this version in
     * about an hour total, so overlook it for now. Im just trying to show you how to make the
     * code *do something*, it can be refactored later, which I am already working on but need from input from you first
     *
     * The handleRequest() just sets up some values we need and I will say, does not do that as you should either really
     * as a general rule stay away from Super Global and $GLOBALS usage. If the code is well planned there is rarely a need
     * to use those throughout an application.
     * You need to look closely at this function so that you understand what it is and is NOT doing
     */
    handleRequest();
    // start buffering, the usage of this goes beyond a comment block, please see the php manual for details
    ob_start();
    render();
    // get whats in the buffer, which is everything returned from render, which is basically all of our markup, with the processed php
    $output = ob_get_clean();
    // return it to the calling line in index.php where it will be sent to the client
    return $output;
}

function render() {
    // Notice we use require here, we must have this or fail.
    require AppInterface::VIEWS_PATH . DIRECTORY_SEPARATOR . 'layout.phtml';
}

