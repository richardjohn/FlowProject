<?php


namespace Flow\Autoloader;
require_once ('Autoloader.php');

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NsAutoloader
 *
 * @author hashinpanakkaparambil
 */
class NsAutoloader implements Autoloader
{
    public function autoload($class)
    {
        $class = str_replace('\\', \DIRECTORY_SEPARATOR, $class);
        if (strpos($class, \DIRECTORY_SEPARATOR) === 0) {
            $class = substr($class, 1);
        }
        require_once ($class . '.php');
    }

    public function register()
    {
        spl_autoload_register(array($this,'autoload'));
    }
}
