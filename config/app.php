<?php

if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__ . '/../');
}

if (!defined('PATH_LOGGING_FILE')) {
    define('PATH_LOGGING_FILE', BASE_PATH . '/storage/logs/' . date('Y-m-d') . '_error.log');
}

if (!defined('PREFIX_SHEET_MONEY_MANAGER')) {
    define('PREFIX_SHEET_MONEY_MANAGER', 'MONEY_MANAGER_');
}
