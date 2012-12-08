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
     * @return Comparable
     */
    public function getComparable()
    {
        return $this->comparable;
    }
}