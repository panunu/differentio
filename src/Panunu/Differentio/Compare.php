<?php

namespace Panunu\Differentio;

use Imagick;

class Compare
{
    private $comparable;

    public function __construct(Comparable $comparable)
    {
        $this->comparable = $comparable;
    }

    /**
     * Gives a percentual difference of comparable images.
     * Can see it from the pixels (and colors).
     *
     * @return int
     */
    public function percent()
    {
        if ($this->comparable->getA()->getEncoded() === $this->comparable->getB()->getEncoded()) {
            return 100;
        }

        $imagick = new Imagick();

        return 0;
    }

    /**
     * @return Comparable
     */
    public function getComparable()
    {
        return $this->comparable;
    }
}