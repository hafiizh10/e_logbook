<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('session', 'database', 'form_validation');

$autoload['drivers'] = array();

$autoload['helper'] = array('xss', 'url', 'security', 'log');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Admin_model', 'Menu_model', 'User_model', 'Logbook_model');
