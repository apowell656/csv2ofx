<?php

require_once '/Users/reubano/Documents/Projects/csv2ofx/lib_general/Number.php';

/**
 * Test class for Number.
 * Generated by PHPUnit on 2012-09-30 at 22:07:04.
 */
class NumberTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Number
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Number;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert (11) == '11th'.
     *
     * @covers Number::addOrdinal
     */
    public function testAddOrdinal()
    {
        $this->assertEquals(
          '11th',
          $this->object->addOrdinal(11)
        );
    }

    /**
     * Generated from @assert (132) == '132nd'.
     *
     * @covers Number::addOrdinal
     */
    public function testAddOrdinal2()
    {
        $this->assertEquals(
          '132nd',
          $this->object->addOrdinal(132)
        );
    }
}
?>
