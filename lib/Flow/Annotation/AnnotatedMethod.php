<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Flow\Annotation;

/**
 * Description of AnnotatedMethod
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedMethod implements Annotator
{
    protected $_method;

    protected $_annotations = array();
    
    public function __construct(\ReflectionMethod $method)
    {
        $this->_method = $method;
        $comment = $method->getDocComment();
        $comment = new DocBloc($comment);
        $this->_annotations = $comment->getAnnotations();
    }

    public function getAnnotations()
    {
        return $this->_annotations;
    }

    public function getReflectionMethod()
    {
        return $this->_method;
    }
}
