#!/usr/bin/env php
<?php
/**
 * AWS DDNS client PHP CLI execution script
 *
 * @category PHP
 * @package  AWS_Route53_DDNS_Client
 * @author   Robert F.P. Ludwick <rfpludwick@gmail.com>
 * @license  Apache 2.0
 */

// Autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Namespacing
use RFPLudwick\AWS\DDNS\Client;

(new Client)
    ->execute();
