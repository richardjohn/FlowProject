<?php
namespace Flow\Tests\Annotation;
use Flow\Annotation\AnnotatedClass;

/**
 * Description of AnnotationReaderTest
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedClassTest extends \PHPUnit_Framework_TestCase
{
    private $_annotated;

    public function setUp()
    {
        $this->_annotated = new AnnotatedClass('\Flow\Tests\TestClass');
    }
    
    public function testGetAnnotations()
    {
        $annotations = $this->_annotated->getAnnotations();
        $this->assertType('array', $annotations);
    }

    public function testGetAnnotatedProperties()
    {
        $props = $this->_annotated->getAnnotatedProperties();
        $this->assertType('array', $props);
        $this->assertTrue(count($props) > 0);
    }

    public function testGetAnnotatedMethods()
    {
        $methods = $this->_annotated->getAnnotatedMethods();
        $this->assertType('array', $methods);
        $this->assertTrue(count($methods) > 0);
    }

    public function testGetReflectionClass()
    {
        $cls = $this->_annotated->getReflectionClass();
        $this->assertType('\ReflectionClass', $cls);
    }
}
