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

        $this->image = new Image('dHJvbG9sb28=');
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
        $this->assertEquals('dHJvbG9sb28=', $this->image->getEncoded());
    }

    /**
     * @test
     * @dataProvider provideInvalidFormats
     * @expectedException InvalidArgumentException
     */
    public function throwsIfGivenValueHasInvalidFormat($format)
    {
        new Image($format);
    }

    public function provideInvalidFormats()
    {
        return [
            [null],
            ['a'],
            ['öööö'],
        ];
    }
}