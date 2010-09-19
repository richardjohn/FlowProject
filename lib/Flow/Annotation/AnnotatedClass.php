<?php
/*
 * Docbloc class
 */

namespace Flow\Annotation;

/**
 * Annotated class
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedClass implements Annotator
{
    /**
     *
     * @var \ReflectionClass
     */
    protected $_class;

    protected $_properties = array();

    protected $_annotations = array();

    public $_methods = array();

    protected function _parseMethods()
    {
        $methods = $this->_class->getMethods();
        foreach ($methods as $method)
        {
            $this->_methods[] = new AnnotatedMethod($method);
        }
    }

    protected function _parseProperties()
    {
        $props = $this->_class->getProperties();
        foreach ($props as $prop) {
            $this->_properties[] = new AnnotatedProperty($prop);
        }
        
    }

    protected function _initClass($class)
    {
        $class = trim($class);

        if (!empty($class)) {
            $this->_class = new \ReflectionClass($class);
            $docComment = $this->_class->getDocComment();
            $docComment = new DocBloc($docComment);
            $this->_annotations = $docComment->getAnnotations();
            $this->_parseProperties();
            $this->_parseMethods();
        }
    }

    public function __construct($class = '')
    {
        
        $this->_initClass($class);
        
    }
    
    public function getAnnotations()
    {
        return $this->_annotations;
    }

    public function setClass($class)
    {
        $this->_initClass($class);
    }

    public function getAnnotatedProperties()
    {
        return $this->_properties;
    }

    public function getAnnotatedMethods()
    {
        return $this->_methods;
    }
    
    public function getReflectionClass()
    {
        return $this->_class;
    }
}