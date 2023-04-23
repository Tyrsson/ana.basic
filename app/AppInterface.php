<?php

declare(strict_types=1);

interface AppInterface
{
    public const APP_PATH   = __DIR__ . '/../app';
    public const DATA_PATH  = __DIR__ . '/../data';
    public const FILES_PATH = __DIR__ . '/../public/transaction_files';
    public const ROOT_PATH  = __DIR__ . '/../';
    public const UTILS_PATH = __DIR__ . '/../utils';
    public const VIEWS_PATH = __DIR__ . '/../templates/pages';
    public const TMPL_EXT   = '.phtml';
}