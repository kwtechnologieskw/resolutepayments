<?php
/**
* This file is created by Really Simple SSL
*/

defined('ABSPATH') or die();

if ( isset($_GET["rsssl_header_test"]) && (int) $_GET["rsssl_header_test"] ===  576101476 ) return;

//RULES START

if ( !headers_sent() ) {
}
