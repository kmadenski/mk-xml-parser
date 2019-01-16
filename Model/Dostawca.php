<?php
/**
 * Created by PhpStorm.
 * User: kmadenski
 * Date: 16.01.19
 * Time: 20:27
 */

class Dostawca
{
    public $nazwa;
    public $logoMale;
    public $logoDuze;

    /**
     * Dostawca constructor.
     * @param $nazwa
     * @param $logoMale
     * @param $logoDuze
     */
    public function __construct($nazwa, $logoMale, $logoDuze)
    {
        $this->nazwa = (string)$nazwa;
        $this->logoMale = (string)$logoMale;
        $this->logoDuze = (string)$logoDuze;
    }
    public function __toString()
    {
        return $this->nazwa;
    }


}