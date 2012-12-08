<?php

namespace Panunu\Differentio\Tests;

use PHPUnit_Framework_TestCase;
use Panunu\Differentio\Comparable;
use Panunu\Differentio\Image;

class ComparableTest extends PHPUnit_Framework_TestCase
{
    private $comparable;

    public function setUp()
    {
        parent::setUp();

        $this->comparable = new Comparable(
            new Image('dHJvbG9sb28='),
            new Image('dHJvbG9sb28=')
        );
    }

    /**
     * @test
     */
    public function smoke()
    {
        $this->assertInstanceOf('Panunu\Differentio\Comparable', $this->comparable);
    }

    /**
     * @test
     */
    public function hasComparableImages()
    {
        $this->assertInstanceOf('Panunu\Differentio\Image', $this->comparable->getA());
        $this->assertInstanceOf('Panunu\Differentio\Image', $this->comparable->getB());
    }

}