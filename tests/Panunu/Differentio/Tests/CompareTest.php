<?php

namespace Panunu\Differentio\Tests;

use PHPUnit_Framework_TestCase;
use Panunu\Differentio\Compare;
use Panunu\Differentio\Image;

class CompareTest extends PHPUnit_Framework_TestCase
{
    private $compare;

    public function setUp()
    {
        parent::setUp();

        $this->compare = new Compare(
            new Image('dHJvbG9sb28='),
            new Image('dHJvbG9sb28=')
        );
    }

    /**
     * @test
     */
    public function smoke()
    {
        $this->assertInstanceOf('Panunu\Differentio\Compare', $this->compare);
    }

    /**
     * @test
     */
    public function hasComparableImages()
    {
        $this->assertInstanceOf('Panunu\Differentio\Image', $this->compare->getA());
        $this->assertInstanceOf('Panunu\Differentio\Image', $this->compare->getB());
    }

}