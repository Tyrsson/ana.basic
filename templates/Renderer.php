<?php

declare(strict_types=1);
include_once __DIR__ . '/../app/AppInterface.php';
include_once AppInterface::APP_PATH . DIRECTORY_SEPARATOR . 'Request.php';

function renderPage() {
    handleRequest();
    ob_start();
    render();
    $output = ob_get_clean();
    return $output;
}

function render() {
    require AppInterface::VIEWS_PATH . DIRECTORY_SEPARATOR . 'layout.phtml';
}

