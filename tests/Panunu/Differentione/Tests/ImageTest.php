<?php

namespace Panunu\Differentione\Tests;

use PHPUnit_Framework_TestCase;
use Panunu\Differentione\Image;

class ImageTest extends PHPUnit_Framework_TestCase
{
    private $image;

    public function setUp()
    {
        parent::setUp();

        $this->image = new Image();
    }

    /**
     * @test
     */
    public function smoke()
    {
        $this->assertInstanceOf('Panunu\Differentione\Image', $this->image);
    }
}