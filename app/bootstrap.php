<?php
// errors
error_reporting(E_ALL & ~E_NOTICE);
// config file
require_once 'config/constants.php';
// helpers
require_once 'helpers/session_helper.php';
// load libraries
require_once 'libs/Core.php';
require_once 'libs/Controller.php';
require_once 'libs/Database.php';