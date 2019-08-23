<?php 
require_once('simple_html_dom.php');

/* function dns ($murl) {
    $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $murl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64)');
    $str = curl_exec($curl);
    curl_close($curl);

    $html = str_get_html($str);
    $text = $html->find('.current-price-value', 0)->plaintext;
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
} */

function dnstech ($murl) {
    if (empty($murl)) {
        echo 'Не поствляется';
    }
    else {
    $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $murl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64)');
    $str = curl_exec($curl);
    curl_close($curl);

    $html = str_get_html($str);
    $text = $html->find('.current-price-value', 0)->plaintext;
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}

/*function citilink ($murl) {
    $html = str_get_html($murl);
    $id = explode('/', $murl);
    $text = $html->find('ins.num', 0)->plaintext;
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}*/

/* function technopoint ($murl) {
    $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $murl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64)');
    $str = curl_exec($curl);
    curl_close($curl);

    $html = str_get_html($str);
    $text = $html->find('.current-price-value', 0)->plaintext;
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
} */
?>