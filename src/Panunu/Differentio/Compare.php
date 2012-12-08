<?php

namespace Panunu\Differentio;

class Compare
{
    private $comparable;

    public function __construct(Comparable $comparable)
    {
        $this->comparable = $comparable;
    }

    /**
     * @return int
     */
    public function percent()
    {
        if ($this->comparable->getA()->getEncoded() === $this->comparable->getB()->getEncoded()) {
            return 100;
        }
    }

    /**
     * @return Comparable
     */
    public function getComparable()
    {
        return $this->comparable;
    }
}