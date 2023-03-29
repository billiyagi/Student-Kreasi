<?php

/**
 * Task 1
 * Buatlah class balok yang memiliki:
 * 1. Private property panjang, lebar dan tinggi
 * 2. Method __construct, getLuas, getKeliling dan getVolume
 */

class Balok
{
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas()
    {
        $pl =  $this->panjang * $this->lebar;
        $pt = $this->panjang * $this->tinggi;
        $lt = $this->lebar * $this->tinggi;
        return 2*($pl + $pt + $lt);
    }

    public function getKeliling()
    {
        return 4 * ($this->lebar + $this->panjang + $this->tinggi);
    }

    public function getVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}
