<?php
namespace Flow\Tests\Annotation;
use Flow\Annotation\AnnotatedProperty;

/**
 * Description of AnnotationReaderTest
 *
 * @author hashinpanakkaparambil
 */
class AnnotatedPropertyTest extends \PHPUnit_Framework_TestCase
{
    private $_annotated;

    public function setUp()
    {
        $cls = new \ReflectionClass('\Flow\Tests\TestClass');
        $prop = $cls->getProperty('_id');
        $this->_annotated = new AnnotatedProperty($prop);
    }
    
    public function testGetAnnotations()
    {
        $annotations = $this->_annotated->getAnnotations();
        $this->assertType('array', $annotations);
        $this->assertType('\Flow\Annotation\Annotation', $annotations[0]);
    }

    public function testGetReflectionProperty()
    {
        $property = $this->_annotated->getReflectionProperty();
        $this->assertType('\ReflectionProperty', $property);
    }
}
