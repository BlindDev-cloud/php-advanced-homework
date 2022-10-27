<?php

declare(strict_types=1);

namespace Classes\Sony;

use Interfaces\TVs\LCD;

class SonyLCD implements LCD
{
  public function getInfo(): string
  {
      return 'LCD TV by Sony';
  }
}