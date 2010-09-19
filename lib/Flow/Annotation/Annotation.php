<?php

namespace Flow\Annotation;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Annotation
 *
 * @author hashinpanakkaparambil
 */
class Annotation extends \ArrayObject
{
    protected $_name;

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setValuesFromString($string)
    {
        $matches = array();
        $matched = preg_match_all('/(\s*(\w+)\s*=\s*(\w+)\s*)/', $string, $matches);
        
        if ($matched) {

            $keys = $matches[2];
            $values = $matches[3];
            foreach ($keys as $index=>$key) {
                $this->$key = $values[$index];
            }
            
        } else {
            return FALSE;
        }
    }
}
