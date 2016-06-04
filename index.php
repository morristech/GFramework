<?php

/*
* 'genonbeta framework' version 1.0
* This is an alfa version of gFramework
* © 2015 - Genonbeta Open Source Project
*/

if (version_compare(PHP_VERSION, '5.3.0', '<'))
	die("<html>\n<title>Oppps!!!</title>\n	We're sorry but your PHP version is not supported anymore. You're currently running on ".PHP_VERSION." <i>(< 5.3.0)</i>. Please get more information about this error <a href=\"https://github.com/genonbeta/gframework/issues\">https://github.com/genonbeta/gframework/issues</a> \n</html>");

define("G_LOAD_TIME", microtime()); // unix current microtime saved as constant
define("G_DOCUMENT_ROOT", dirname(__FILE__));
define("G_FRAMEWORK_ROOT", substr(G_DOCUMENT_ROOT, strlen($_SERVER['DOCUMENT_ROOT'])));

if(!file_exists("configuration.php"))
	die("No configuration file is available");

include_once "configuration.php";

if(!class_exists("Configuration"))
	die("Configuration class was not found");

if(!file_exists($file = Configuration::LIBRARY_PATH."/genonbeta/system/System.".Configuration::CLASS_EXTENSION))
	die("<b>{$file}</b> was not found. Exited.");

include_once Configuration::LIBRARY_PATH."/genonbeta/system/System.".Configuration::CLASS_EXTENSION;

if(!class_exists("genonbeta\system\System"))
	die("System class was not found. Exited.");

use genonbeta\system\System;

try
{
	System::setup();
}
catch(Exception $e)
{
	die("<h1>Error on Start</h1><br />\n<b>Message:</b> ". $e->getMessage() ."\n<br /><b>Thrown in:</b> ". $e->getFile().":".$e->getLine());
}
