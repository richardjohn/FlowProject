<?php
namespace Flow\Tests;
use Flow\Annotation\DocBloc;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnnotationReaderTest
 *
 * @author hashinpanakkaparambil
 */
class DocBlocTest extends \PHPUnit_Framework_TestCase
{
    private $_docBloc;

    public function setUp()
    {
        $comment = "
        /**
         * @TestAnnotation
         * @AnotherAnnotation
         */";
        $this->_docBloc = new DocBloc($comment);
    }
    
    public function testGetAnnotations()
    {
        $this->_docBloc->getAnnotations();
    }
}