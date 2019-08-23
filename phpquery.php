<?php
require_once('phpQuery-onefile.php');

/* function dns ($murl) {
    $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $murl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64)');
    $str = curl_exec($curl);
    curl_close($curl);

    $html= phpQuery::newDocument($str);
    $price = $html->find('.current-price-value:first');
    $text = $price->html();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
} */

function citilink ($murl) {
    $html= phpQuery::newDocument($murl);
    $id = explode('/', $murl);
    $price = $html->find('#product-item-'.$id[6].' > div:nth-child(2) > div.product-sidebar__line-box.standart_price > div.price.price_break > ins.num:eq(0)');
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}

/* function technopoint ($murl) {
    $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $murl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64)');
    $str = curl_exec($curl);
    curl_close($curl);

    $html= phpQuery::newDocument($str);
    $price = $html->find('.current-price-value:first');
    $text = $price->html();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
} */

?>