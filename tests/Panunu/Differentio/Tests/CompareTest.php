<?php

namespace Panunu\Differentio\Tests;

use PHPUnit_Framework_TestCase;
use Panunu\Differentio\Compare;
use Panunu\Differentio\Comparable;
use Panunu\Differentio\Image;

class CompareTest extends PHPUnit_Framework_TestCase
{
    private $compare;
    private $comparable;

    public function setUp()
    {
        parent::setUp();

        $this->comparable = new Comparable(
            new Image('dHJvbG9sb28='),
            new Image('dHJvbG9sb28=')
        );

        $this->compare = new Compare($this->comparable);
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
    public function hasComparable()
    {
        $this->assertInstanceOf('Panunu\Differentio\Comparable', $this->compare->getComparable());
    }
}