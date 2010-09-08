<?php

$paths = array(realpath('../lib/'), get_include_path());
set_include_path(implode(PATH_SEPARATOR, $paths));

require_once ('Flow/Autoloader/NsAutoloader.php');

$autoloader = new Flow\Autoloader\NsAutoloader();
$autoloader->register();

?>
