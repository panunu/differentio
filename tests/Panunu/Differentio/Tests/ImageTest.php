<?php

namespace Panunu\Differentio\Tests;

use PHPUnit_Framework_TestCase;
use Panunu\Differentio\Image;

class ImageTest extends PHPUnit_Framework_TestCase
{
    private $image;

    public function setUp()
    {
        parent::setUp();

        $this->image = new Image('asd');
    }

    /**
     * @test
     */
    public function smoke()
    {
        $this->assertInstanceOf('Panunu\Differentio\Image', $this->image);
    }

    /**
     * @test
     */
    public function hasEncodedValue()
    {
        $this->assertEquals('asd', $this->image->getEncoded());
    }
}