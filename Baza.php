<?php

class Baza 
{
    public $konekcija;

    public function __construct($konekcija)
    {
        $konekcija = mysqli_connect("localhost","root", "", "web_shop");
        $this->konekcija = $konekcija;
    }
}