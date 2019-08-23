<?php
    require_once('hexydec/html/htmldoc.php');
    require_once('hexydec/html/cssmin.php');
    require_once('hexydec/html/tokens/cdata.php');
    require_once('hexydec/html/tokens/comment.php');
    require_once('hexydec/html/tokens/doctype.php');
    require_once('hexydec/html/tokens/script.php');
    require_once('hexydec/html/tokens/style.php');
    require_once('hexydec/html/tokens/tag.php');
    require_once('hexydec/html/tokens/text.php');
    require_once('hexydec/html/tokens/tokenise.php');
    use hexydec\html\htmldoc;
    use hexydec\html\cssmin;
    use hexydec\html\tokens\cdata;
    use hexydec\html\tokens\comment;
    use hexydec\html\tokens\doctype;
    use hexydec\html\tokens\script;
    use hexydec\html\tokens\style;
    use hexydec\html\tokens\tag;
    use hexydec\html\tokens\text;
    use hexydec\html\tokens\tokenise;


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

/* function citilink ($murl) {
    $doc = new htmldoc();
    $doc->open($murl);
    $name = $doc->find(".num");
    $text = $name->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}

function oldi ($murl) {
    $doc = new htmldoc();
    $doc->open($murl);
    $name = $doc->find(".price_leg");
    $text = $name->text();
        if ($text === '') {
            echo 'Нет в наличии';
        }
        else {
            echo $text.' &#8381;';
        }
}

function ulmart ($murl) {
    $doc = new htmldoc();
    $doc->open($murl);
    $name = $doc->find("span.b-price__num.js-price")->eq(0);
    $text = $name->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}

function pleer ($murl) {
    $doc = new htmldoc();
    $doc->open($murl);
    $name = $doc->find(".inlineb")->eq(0);
    $text = $name->text();
    if ($text === '') {
        echo 'Нет в наличии';
    }
    else {
        echo $text.' &#8381;';
    }
}
?> */