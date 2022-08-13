<?php

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(
        int $red,
        int $green,
        int $blue
    )
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function setRed(int $code): void
    {
        if(0 > $code || 255 < $code){
            throw new Exception(message: 'Code out of range');
        }

        $this->red = $code;
    }

    public function setGreen(int $code): void
    {
        if(0 > $code || 255 < $code){
            throw new Exception(message: 'Code out of range');
        }

        $this->green = $code;
    }

    public function setBlue(int $code): void
    {
        if(0 > $code || 255 < $code){
            throw new Exception(message: 'Code out of range');
        }

        $this->blue = $code;
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    public function equals(Color ...$colors): bool
    {
        foreach ($colors as $color) {
            if ($this != $color) {
                return false;
            }
        }

        return true;
    }

    public static function random(): Color
    {
        $red = random_int(0, 255);
        $green = random_int(0, 255);
        $blue = random_int(0, 255);

        return new Color($red, $green, $blue);
    }

    public function mix(Color ...$colors): Color
    {
        $sumRed = $this->red;
        $sumGreen = $this->green;
        $sumBlue = $this->blue;
        $count = 1;

        foreach ($colors as $color) {
            $sumRed += $color->getRed();
            $sumGreen += $color->getGreen();
            $sumBlue += $color->getBlue();
            ++$count;
        }

        $red = $sumRed / $count;
        $green = $sumGreen / $count;
        $blue = $sumBlue /$count;

        return new Color($red, $green, $blue);
    }

}