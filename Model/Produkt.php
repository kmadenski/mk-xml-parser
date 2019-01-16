<?php
/**
 * Created by PhpStorm.
 * User: kmadenski
 * Date: 16.01.19
 * Time: 20:27
 */

class Produkt
{
    public $nazwa;
    public $id;
    public $linkPrezentacja;
    public $linkWniosek;
    public $opis;
    public $dostawca;

    /**
     * Produkt constructor.
     * @param $nazwa
     * @param $id
     * @param $linkPrezentacja
     * @param $linkWniosek
     * @param $opis
     * @param $dostawca
     */
    public function __construct($nazwa, $id, $linkPrezentacja, $linkWniosek, $opis, $dostawca)
    {
        $this->nazwa = (string)$nazwa;
        $this->id = (string)$id;
        $this->linkPrezentacja = (string)$linkPrezentacja;
        $this->linkWniosek = (string)$linkWniosek;
        $this->opis = (string)$opis;
        $this->dostawca = $dostawca;
    }
    public function __toString()
    {
        return $this->id." - ".$this->nazwa." - ".$this->dostawca;
    }


}