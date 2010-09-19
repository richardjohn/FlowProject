<?php
namespace Flow\Tests\Annotation;
use Flow\Annotation\AnnotatedMethod;

/**
 * Description of AnnotationReaderTest
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedMethodTest extends \PHPUnit_Framework_TestCase
{
    private $_annotated;

    public function setUp()
    {
        $cls = new \ReflectionClass('\Flow\Tests\TestClass');
        $m = $cls->getMethod('testMethod');
        $this->_annotated = new AnnotatedMethod($m);
    }
    
    public function testGetAnnotations()
    {
        $annotations = $this->_annotated->getAnnotations();
        $this->assertType('array', $annotations);
        $this->assertType('\Flow\Annotation\Annotation', $annotations[0]);
    }

    public function testGetReflectionMethod()
    {
        $property = $this->_annotated->getReflectionMethod();
        $this->assertType('\ReflectionMethod', $property);
    }
}
