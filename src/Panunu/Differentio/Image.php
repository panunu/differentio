<?php

namespace Panunu\Differentio;

use InvalidArgumentException;

class Image
{
    private $encoded;
    private $decoded;

    /**
     * @param string $encoded image as Base64
     */
    public function __construct($encoded)
    {
        $this->decoded = base64_decode($encoded, true);

        if (!$this->decoded) {
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

    /**
     * @return string
     */
    public function getDecoded()
    {
        return $this->decoded;
    }
}