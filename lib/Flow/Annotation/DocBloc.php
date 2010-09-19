<?php

namespace Flow\Annotation;
use Flow\Annotation\Annotator;
use Flow\Annotation\Annotation;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocBloc
 *
 * @author hashinpanakkaparambil
 */
class DocBloc implements Annotator
{
    protected $_comment;

    protected $_lines;

    protected $_annotations = array();
    
    public function __construct($comment)
    {
        $this->_comment = $comment;
    }

    public function getAnnotations()
    {
        $this->_lines = explode("\n", $this->_comment);
        foreach ($this->_lines as $line) {
            $matches = array();

            $matched = preg_match(
                '/[\*\s]*@(\w+)\s*(\((\s*(\w+\s*=\s*\w+\s*,?\s*)*\s*)\))?\s*$/',
                $line, $matches
            );
            
            if ($matched > 0) {
                $annotation = new Annotation();
                $annotation->setName($matches[1]);
                $annotation->setValuesFromString($matches[2]);
                $this->_annotations[] = $annotation;
            }
            
        }

        return $this->_annotations;
    }

}