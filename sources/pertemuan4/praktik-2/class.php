<?php

class Lingkaran
{
  private $jarijari;
  const PHI = 3.14;


  /**
   * linkaran untuk return luas dan keliling
   */
  function __construct(int $r)
  {
    $this->jarijari = $r;
  }

  function getArea()
  {
    return self::PHI * pow($this->jarijari, 2);
  }

  function getCircum()
  {
    return 2 * self::PHI * $this->jarijari;
  }

  function getPrivate($propName)
  {
    return $this->$propName;
  }
}
