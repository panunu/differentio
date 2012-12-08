<?php

namespace Panunu\Differentio;

class Image
{
    private $encoded;

    /**
     * @param string $encoded
     */
    public function __construct($encoded)
    {
        $this->encoded = $encoded;
    }

    /**
     * @return string
     */
    public function getEncoded()
    {
        return $this->encoded;
    }
}