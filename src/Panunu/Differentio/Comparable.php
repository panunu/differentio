<?php

namespace Panunu\Differentio;

class Comparable
{
    private $a, $b;

    public function __construct(Image $a, Image $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return Image
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return Image
     */
    public function getB()
    {
        return $this->b;
    }
}