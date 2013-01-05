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
        if ($this->comparablesHaveMatchingHashes()) {
            return 100;
        }

        $a = $this->getImage($this->getComparable()->getA());
        $b = $this->getImage($this->getComparable()->getB());

        return round(
            $this->similarity($a, $b) /
            ($a->getImageWidth() * $a->getImageHeight()) *
            100
        );
    }

    /**
     * @return Comparable
     */
    public function getComparable()
    {
        return $this->comparable;
    }

    /**
     * @param Imagick $a
     * @param Imagick $b
     * @return int
     */
    private function similarity(Imagick $a, Imagick $b)
    {
        $similarity = 0;

        foreach($i = $a->getPixelIterator() as $row => $pixels) {
            foreach($pixels as $column => $pixel) {
                if ($b->getImagePixelColor($row, $column)->getColorAsString() === $pixel->getColorAsString()) {
                    $similarity++;
                }
            }

            $i->syncIterator();
        }

        return $similarity;
    }

    /**
     * @return Imagick
     */
    private function getImage(Image $image)
    {
        $imagick = new Imagick();
        $imagick->readImageBlob($image->getDecoded());

        return $imagick;
    }

    /**
     * @return bool
     */
    private function comparablesHaveMatchingHashes()
    {
        return $this->comparable->getA()->getEncoded() === $this->comparable->getB()->getEncoded();
    }
}