<?php

declare(strict_types=1);
/**
 * This talk will focus on a concept known as front controller, fancy way to say, were going to load this file and its gonna more or less
 * be the only entry point for the application. So how do we accomplish this? Well, lets take a look.
 */
// Brings the AppInterface into scope so we can use it.
require __DIR__ . '/../app/AppInterface.php';
require AppInterface::APP_PATH . DIRECTORY_SEPARATOR . 'Request.php';
require AppInterface::ROOT_PATH . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'Renderer.php';
require AppInterface::UTILS_PATH . DIRECTORY_SEPARATOR . 'Debug.php';
echo renderPage();

