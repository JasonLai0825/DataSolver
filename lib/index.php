<?php
// initialize constants.
defined('FRAME_PATH') or define('FRAME_PATH', __DIR__ . '/');
defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
defined('APP_DEBUG') or define('APP_DEBUG', false);
defined('CONFIG_PATH') or define('CONFIG_PATH', FRAME_PATH . 'Config/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH', FRAME_PATH . 'runtime/');

// include configs.
require_once CONFIG_PATH . 'config.php';
// include core class.
require_once FRAME_PATH . 'Classes/Core/Core.php';

// initialize core class.
$core = new Core();
$core -> run();