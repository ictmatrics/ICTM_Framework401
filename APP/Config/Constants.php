<?php
// Core compile-time constants
const APPKEY     = 'licensecodes';
const SITENAME   = 'Site Name';
const APPVERSION = '1.0.1';
const FRAMEWORK  = 'ICTM Framework 4.0.1';
const DOMAIN     = '';


// Build runtime-dependent BASE_URL once
$protocol = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
) ? 'https://' : 'http://';

$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
$host      = $_SERVER['HTTP_HOST'] ?? 'localhost';
$baseUrl   = $protocol . $host ;
define('BASE_URL', $baseUrl);


//Mailer setting
  define('E_HOST', 'mail.domain.com');
  define('E_MAIL', 'user@domain.com');
  define('E_NAME', 'User');
  define('E_PORT', '465');
  define('E_PASS', 'password');