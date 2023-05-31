<?php   

error_reporting(E_ALL);
ini_set('display_errors', 1);

// include
require_once("./vendor/autoload.php");
require_once("./config.inc.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/",
    "debug"         => true, // set to false to improve the speed
);

Tpl::configure($config);

// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "nome", "Obi Wan Kenoby" );
$tpl->assign( "version", PHP_VERSION );

$tpl->draw( "index" );


