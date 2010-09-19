<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Flow\Annotation;

/**
 * Description of AnnotatedProperty
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedProperty implements Annotator
{
    protected $_property;
    
    protected $_annotations = array();

    public function __construct(\ReflectionProperty $property)
    {
        $this->_property = $property;
        $comment = $property->getDocComment();
        $comment = new DocBloc($comment);
        $this->_annotations = $comment->getAnnotations();
    }
    
    public function getAnnotations()
    {
        return $this->_annotations;
    }

    public function getReflectionProperty()
    {
        return $this->_property;
    }
}