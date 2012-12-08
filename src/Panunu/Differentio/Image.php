<?php

namespace Panunu\Differentio;

use InvalidArgumentException;

class Image
{
    private $encoded;

    /**
     * @param string $encoded image as Base64
     */
    public function __construct($encoded)
    {
        if (!base64_decode($encoded, true)) {
            throw new InvalidArgumentException('Invalid format');
        }

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