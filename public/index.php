<?php

declare(strict_types=1);

use App\Kernel;

chdir(dirname(__DIR__));

require __DIR__ . '/../vendor/autoload.php';

Kernel::init();
