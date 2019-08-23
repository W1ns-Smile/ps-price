<?php

require_once('duzun/hQuery.php');
require_once('duzun/hQuery/Context.php');
require_once('duzun/hQuery/Element.php');
require_once('duzun/hQuery/HTML_Index.php');
require_once('duzun/hQuery/Node.php');
require_once('duzun/hQuery/Parser.php');
require_once('duzun/hQuery/Parser/HTML.php');
require_once('duzun/hQuery/Parser/Selector.php');
use duzun\hQuery;
use duzun\hQuery\Context;
use duzun\hQuery\Element;
use duzun\hQuery\HTML_Index;
use duzun\hQuery\Node;
use duzun\hQuery\Parser;
use duzun\hQuery\Parser\HTML;
use duzun\hQuery\Parser\Selector;

function edifier ($murl) {
    if (empty($murl)) {
        echo 'Не поставляется';
    }
    else {
    $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $murl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64)');
    $str = curl_exec($curl);
    curl_close($curl);

    $doc = hQuery::fromHTML($str);
    $price = $doc->find('#ps-price');
    if ($price === null) {
        echo 'Нет в наличии';
    }
    else {
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}
}

function dnstech ($murl) {
    if (empty($murl)) {
        echo 'Не поставляется';
    }
    else {
    $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $murl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64)');
    $str = curl_exec($curl);
    curl_close($curl);

    $doc = hQuery::fromHTML($str);
    $price = $doc->find('.current-price-value')[0];
    if ($price === null) {
        echo 'Нет в наличии';
    }
    else {
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}
}

function citilink ($murl) {
    if (empty($murl)) {
        echo 'Не поставляется';
    }
    else {
    $doc = hQuery::fromFile($murl);
    $id = explode('/', $murl);
    $price = $doc->find('#product-item-'.$id[6].' > div:nth-child(2) > div.product-sidebar__line-box.standart_price > div.price.price_break > ins.num')[0];
    if ($price === null) {
        echo 'Нет в наличии';
    }
    else {
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}
}

function oldi ($murl) {
    if (empty($murl)) {
        echo 'Не поставляется';
    }
    else {
    $doc = hQuery::fromFile($murl);
    $price = $doc->find('.price_leg')[0];
    if ($price === null) {
        echo 'Нет в наличии';
    }
    else {
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}
}

function ulmart ($murl) {
    if (empty($murl)) {
        echo 'Не поставляется';
    }
    else {
    $doc = hQuery::fromFile($murl);
    $price = $doc->find('span.b-price__num.js-price')[0];
    if ($price === null) {
        echo 'Нет в наличии';
    }
    else {
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}
}

function pleer ($murl) {
    if (empty($murl)) {
        echo 'Не поставляется';
    }
    else {
    $doc = hQuery::fromFile($murl);
    $price = $doc->find('.inlineb')[0];
    if ($price === null) {
        echo 'Нет в наличии';
    }
    else {
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}
}

?>