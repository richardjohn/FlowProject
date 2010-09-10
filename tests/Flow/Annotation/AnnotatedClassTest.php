<?php
namespace Flow\Tests;
use Flow\Annotation\AnnotatedClass;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnnotationReaderTest
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedClassTest extends \PHPUnit_Framework_TestCase
{
    private $_annotatedClass;

    public function setUp()
    {
        
    }
    
    public function testAnnotatedClassCreation()
    {
        $annotatedClass = new AnnotatedClass('Flow\Test\TestClass');
    }
}