<?php

declare(strict_types=1);

/**
 * since this all revolves around scope, what is in scope, whats not in scope, how we get things into scope etc
 * I figuerd I would show a little usage of the paamayim-nekudotayim, or commonly known as the
 * php scope resolution operator ::
 * @see https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php
 * Its what allows us to call the constants defined in the AppInterface, it also allows us to call the
 * static method of the Debug class without creating an instance first
 *
 * also
 * @see https://www.php.net/manual/en/function.include.php
 * You should read that very carefully as they are security implications that have to be considered when including / requiring anything.
 */

// Brings the AppInterface into scope so we can use it.
require __DIR__ . '/../app/AppInterface.php';
// now we can use the interface to call the paths. Defining them there is easier really ;) and now we can use them to require this class file
require AppInterface::UTILS_PATH . DIRECTORY_SEPARATOR . 'Debug.php';

// since its been required / included we can now use it ;)
Debug::dump(AppInterface::APP_PATH, 'APP_PATH');
Debug::dump(AppInterface::FILES_PATH, 'FILES_PATH');
Debug::dump(AppInterface::ROOT_PATH, 'ROOT_PATH');
Debug::dump(AppInterface::UTILS_PATH, 'UTILS_PATH');
Debug::dump(AppInterface::VIEWS_PATH, 'VIEWS_PATH');

// we can also do this
$debug = new Debug();
// It just really serves no purpose ;)
$debug::dump($debug);

