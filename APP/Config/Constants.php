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

// Get the directory and normalize slashes
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

// FIX 1: Strip "public_html" from the internal path so it doesn't leak into your redirects
$scriptDir = preg_replace('#/public_html$#', '', $scriptDir);

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$baseUrl = $protocol . $host . $scriptDir;

// FIX 2: Standardize the trailing slash
$baseUrl = rtrim($baseUrl, '/') . '/';

define('BASE_URL', $baseUrl);

//Mailer setting
  define('E_HOST', 'mail.domain.com');
  define('E_MAIL', 'user@domain.com');
  define('E_NAME', 'User');
  define('E_PORT', '465');
  define('E_PASS', 'password');