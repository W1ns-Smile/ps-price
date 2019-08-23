<?php
    require_once('DiDom/ClassAttribute.php');
    require_once('DiDom/Document.php');
    require_once('DiDom/Element.php');
    require_once('DiDom/Encoder.php');
    require_once('DiDom/Errors.php');
    require_once('DiDom/Query.php');
    require_once('DiDom/StyleAttribute.php');
    require_once('DiDom/Exceptions/InvalidSelectorException.php');
    use DiDom\ClassAttribute;
    use DiDom\Document;
    use DiDom\Element;
    use DiDom\Encoder;
    use DiDom\Errors;
    use DiDom\Query;
    use DiDom\StyleAttribute;
    use DiDom\Exceptions\InvalidSelectorException;


/*function edifier ($murl) {
    $curl = curl_init();//инициализация
    curl_setopt($curl, CURLOPT_URL, $murl);//передаем наш URL
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//для записи результата в переменную
    $str = curl_exec($curl);//запрос

    $document = new Document($str, true);
    $price = $document->find('#ps-price');
    $text = $price->text();
        if ($text === '') {
            echo 'Нет в наличии';
        }
        else {
            echo $text.' &#8381;';
        }
}*/

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

    $document = new Document($str);
    $price = $document->find('.current-price-value')[0];
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}

function citilink ($murl) {
    if (empty($murl)) {
        echo 'Не поствляется';
    }
    else {
    $document = new Document($murl, true);
    $id = explode('/', $murl);
    $price = $document->find('#product-item-'.$id[6].' > div:nth-child(2) > div.product-sidebar__line-box.standart_price > div.price.price_break > ins.num')[0];
    if ($price === null) {
        echo 'Нет в наличии';
    }
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}

function oldi ($murl) {
    if (empty($murl)) {
        echo 'Не поствляется';
    }
    else {
    $document = new Document($murl, true);
    $price = $document->find('.price_leg')[0];
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}

function ulmart ($murl) {
    if (empty($murl)) {
        echo 'Не поствляется';
    }
    else {
    $document = new Document($murl, true);
    $price = $document->find('span.b-price__num.js-price')[0];
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}

/*function pleer ($murl) {
    if (empty($murl)) {
        echo 'Не поствляется';
    }
    else {
    $document = new Document($murl, true);
    $price = $document->find('.inlineb')[0];
    $text = $price->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
}*/
?>