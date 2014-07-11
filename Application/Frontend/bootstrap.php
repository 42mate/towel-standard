<?php

require_once dirname(__FILE__) . '/../../vendor/autoload.php';
require_once dirname(__FILE__) . '/configs/config.php';
require_once APP_FW_DIR . '/bootstrap.php';

//Init Routes
add_app_routes('Frontend');