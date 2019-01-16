<?php
/**
 * Created by PhpStorm.
 * User: kmadenski
 * Date: 16.01.19
 * Time: 20:26
 */

include_once ("ChwilowkiParser.php");

$parser = new ChwilowkiParser();
$products = $parser->getProducts();
foreach ($products as $product){
    echo $product.PHP_EOL;
}
