<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Dashboard';
$route['logout'] = 'Login/index';
$route['insert'] = 'Dashboard/insert';
