<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Email COnfiguration
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.naatimocktests.com';

$config['smtp_port'] = 587;
//$config["smtp_crypto"] = "ssl";

// $config['smtp_port'] = 587;
// $config["smtp_crypto"] = "tls";


$config['smtp_user'] = 'support@naatimocktests.com';
$config['smtp_pass'] = 'Naati123@';
$config['mailtype'] = 'html';
$config['smtp_timeout'] = '500';

$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
defined('BASEPATH') OR exit('No direct script access allowed');