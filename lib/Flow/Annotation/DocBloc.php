<?php

namespace Flow\Annotation;
use Flow\Annotation\Parseable;
use Flow\Annotation\Annotated;
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
class DocBloc implements Annotated
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
            $matched = preg_match('/@([a-zA-Z\(\)]+)$/', $line, $matches);
            if ($matched > 0) {
                var_dump($matches[1]);echo "\n";
                $this->_annotations[] = new Annotation($matches[1]);
            }
        }

    }
}