<?php

namespace Flow\Annotation;
use Flow\Annotation\Annotated;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SimpleReflectionClass
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedClass implements Annotated
{
    /**
     *
     * @var \ReflectionClass
     */
    protected $_class;

    protected $_properties;

    protected $_annotations;

    protected function _parseProperties()
    {
        $props = $this->_class->getProperties();
        
    }

    public function __construct($class)
    {
        $this->_class = new \ReflectionClass($class);
        $docComment = $this->_class->getDocComment();
        $docComment = new DocBloc($docComment);
        $this->_annotations = $docComment->getAnnotations();
        $this->_parseProperties();
    }
    
    
    public function getAnnotations()
    {
        
    }
}