<?php
/**
 * Created by PhpStorm.
 * User: kmadenski
 * Date: 16.01.19
 * Time: 20:35
 */
include_once("Model/Produkt.php");
include_once("Model/Dostawca.php");

class ChwilowkiParser
{

    private $url = "http://api.systempartnerski.pl/2.0/xml/oCO8CjMc2vHaKvLweFP/";
    private $products;
    public function __construct()
    {
        $xml = simplexml_load_file($this->url);
        $this->products = $this->parse($xml);
    }
    public function getProducts(){
        return $this->products;
    }
    private function parse(SimpleXMLElement $xml){
        $products = [];
        foreach ($xml->kategoria as $category){
            if($category->attributes()->nazwa == 'Finanse osobiste'){
                foreach ($category->podkategoria as $podkategoria){
                    if($podkategoria->attributes()->nazwa == 'Chwilówki'){
                        foreach ($podkategoria->produkt as $produkt){
                            $dostawcaNode = $produkt->dostawca;
                            $produkt = new Produkt(
                                $produkt->attributes()->nazwa,
                                $produkt->attributes()->id,
                                $produkt->linki->attributes()->prezentacja,
                                $produkt->linki->attributes()->wniosek,
                                $produkt->opis,
                                new Dostawca(
                                    $dostawcaNode->attributes()->nazwa,
                                    $dostawcaNode->attributes()['logo-male'],
                                    $dostawcaNode->attributes()['logo-duze']
                                )
                            );
                            $products[] = $produkt;
                        }
                    }
                }
            }
        }
        return $products;
    }
}