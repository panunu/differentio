<?php

namespace Panunu\Differentio\Tests;

use PHPUnit_Framework_TestCase;
use Panunu\Differentio\Compare;

class CompareTest extends PHPUnit_Framework_TestCase
{
    private $compare;

    public function setUp()
    {
        parent::setUp();

        $this->compare = new Compare();
    }

    /**
     * @test
     */
    public function smoke()
    {
        $this->assertInstanceOf('Panunu\Differentio\Compare', $this->compare);
    }

}