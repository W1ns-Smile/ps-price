<?php
    include 'base.php';
    include 'didom.php';
    /* include 'phpquery.php'; */
    /* include 'htmldoc.php'; */
    /* include 'simpledom.php'; */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Цены на акустические системы Edifier</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="date"><?php echo 'Цены сформированы - '.date("d.m.y H:i:s") ?></div>
<div class="mobileTable">
<table class="cwdtable" cellspacing="0" cellpadding="1" border="1">
<tr><th>Модель</th><th>Edifier</th><th>ДНС</th><th>Ситилинк</th><th>Технопоинт</th><th>OLDI</th><th>Юлмарт</th><th>Pleer</th></tr>
<tr><td>M1250</td>
<td><a href="<?php echo $m1250[0] ?>" target="_blank"><?php /* edifier($m1250[0]); */ ?>800 &#8381;</a></td>
<td><a href="<?php echo $m1250[1] ?>" target="_blank"><?php dnstech($m1250[1]); ?></a></td>
<td><a href="<?php echo $m1250[2] ?>" target="_blank"><?php citilink($m1250[2]); ?></a></td>
<td><a href="<?php echo $m1250[3] ?>" target="_blank"><?php dnstech($m1250[3]); ?></a></td>
<td><a href="<?php echo $m1250[4] ?>" target="_blank"><?php oldi($m1250[4]); ?></a></td>
<td><a href="<?php echo $m1250[5] ?>" target="_blank"><?php ulmart($m1250[5]); ?></a></td>
<td><a href="<?php echo $m1250[6] ?>" target="_blank"><?php /* pleer($m1250[6]); */ ?></a></td>
</tr>
<tr><td>R12U</td>
<td><a href="<?php echo $r12u[0] ?>" target="_blank"><?php /* edifier($r12u[0]); */ ?>1 200 &#8381;</a></td>
<td><a href="<?php echo $r12u[1] ?>" target="_blank"><?php dnstech($r12u[1]); ?></a></td>
<td><a href="<?php echo $r12u[2] ?>" target="_blank"><?php citilink($r12u[2]); ?></a></td>
<td><a href="<?php echo $r12u[3] ?>" target="_blank"><?php dnstech($r12u[3]); ?></a></td>
<td><a href="<?php echo $r12u[4] ?>" target="_blank"><?php oldi($r12u[4]); ?></a></td>
<td><a href="<?php echo $r12u[5] ?>" target="_blank"><?php ulmart($r12u[5]); ?></a></td>
<td><a href="<?php echo $r12u[6] ?>" target="_blank"><?php /* pleer($r12u[6]); */ ?></a></td>
</tr>
<tr><td>R19U</td>
<td><a href="<?php echo $r19u[0] ?>" target="_blank"><?php /* edifier($r19u[0]); */ ?>1 700 &#8381;</a></td>
<td><a href="<?php echo $r19u[1] ?>" target="_blank"><?php dnstech($r19u[1]); ?></a></td>
<td><a href="<?php echo $r19u[2] ?>" target="_blank"><?php citilink($r19u[2]); ?></a></td>
<td><a href="<?php echo $r19u[3] ?>" target="_blank"><?php dnstech($r19u[3]); ?></a></td>
<td><a href="<?php echo $r19u[4] ?>" target="_blank"><?php oldi($r19u[4]); ?></a></td>
<td><a href="<?php echo $r19u[5] ?>" target="_blank"><?php ulmart($r19u[5]); ?></a></td>
<td><a href="<?php echo $r19u[6] ?>" target="_blank"><?php /* pleer($r19u[6]); */ ?></a></td>
</tr>
<tr><td>R980T</td>
<td><a href="<?php echo $r980t[0] ?>" target="_blank"><?php /* edifier($r980t[0]); */ ?>3 800 &#8381;</a></td>
<td><a href="<?php echo $r980t[1] ?>" target="_blank"><?php dnstech($r980t[1]); ?></a></td>
<td><a href="<?php echo $r980t[2] ?>" target="_blank"><?php citilink($r980t[2]); ?></a></td>
<td><a href="<?php echo $r980t[3] ?>" target="_blank"><?php dnstech($r980t[3]); ?></a></td>
<td><a href="<?php echo $r980t[4] ?>" target="_blank"><?php oldi($r980t[4]); ?></a></td>
<td><a href="<?php echo $r980t[5] ?>" target="_blank"><?php ulmart($r980t[5]); ?></a></td>
<td><a href="<?php echo $r980t[6] ?>" target="_blank"><?php /* pleer($r980t[6]); */ ?></a></td>
</tr>
<tr><td>R1100</td>
<td><a href="<?php echo $r1100[0] ?>" target="_blank"><?php /* edifier($r1100[0]); */ ?>5 000 &#8381;</a></td>
<td><a href="<?php echo $r1100[1] ?>" target="_blank"><?php dnstech($r1100[1]); ?></a></td>
<td><a href="<?php echo $r1100[2] ?>" target="_blank"><?php citilink($r1100[2]); ?></a></td>
<td><a href="<?php echo $r1100[3] ?>" target="_blank"><?php dnstech($r1100[3]); ?></a></td>
<td><a href="<?php echo $r1100[4] ?>" target="_blank"><?php oldi($r1100[4]); ?></a></td>
<td><a href="<?php echo $r1100[5] ?>" target="_blank"><?php ulmart($r1100[5]); ?></a></td>
<td><a href="<?php echo $r1100[6] ?>" target="_blank"><?php /* pleer($r1100[6]); */ ?></a></td>
</tr>
<tr><td>R1580MB</td>
<td><a href="<?php echo $r1580mb[0] ?>" target="_blank"><?php /* edifier($r1580mb[0]); */ ?>5 400 &#8381;</a></td>
<td><a href="<?php echo $r1580mb[1] ?>" target="_blank"><?php dnstech($r1580mb[1]); ?></a></td>
<td><a href="<?php echo $r1580mb[2] ?>" target="_blank"><?php citilink($r1580mb[2]); ?></a></td>
<td><a href="<?php echo $r1580mb[3] ?>" target="_blank"><?php dnstech($r1580mb[3]); ?></a></td>
<td><a href="<?php echo $r1580mb[4] ?>" target="_blank"><?php oldi($r1580mb[4]); ?></a></td>
<td><a href="<?php echo $r1580mb[5] ?>" target="_blank"><?php ulmart($r1580mb[5]); ?></a></td>
<td><a href="<?php echo $r1580mb[6] ?>" target="_blank"><?php /* pleer($r1580mb[6]); */ ?></a></td>
</tr>
<tr><td>R1280T</td>
<td><a href="<?php echo $r1280t[0] ?>" target="_blank"><?php /* edifier($r1280t[0]); */ ?>5 300 &#8381;</a></td>
<td><a href="<?php echo $r1280t[1] ?>" target="_blank"><?php dnstech($r1280t[1]); ?></a></td>
<td><a href="<?php echo $r1280t[2] ?>" target="_blank"><?php citilink($r1280t[2]); ?></a></td>
<td><a href="<?php echo $r1280t[3] ?>" target="_blank"><?php dnstech($r1280t[3]); ?></a></td>
<td><a href="<?php echo $r1280t[4] ?>" target="_blank"><?php oldi($r1280t[4]); ?></a></td>
<td><a href="<?php echo $r1280t[5] ?>" target="_blank"><?php ulmart($r1280t[5]); ?></a></td>
<td><a href="<?php echo $r1280t[6] ?>" target="_blank"><?php /* pleer($r1280t[6]); */ ?></a></td>
</tr>
<tr><td>R1280DB</td>
<td><a href="<?php echo $r1280db[0] ?>" target="_blank"><?php /* edifier($r1280db[0]); */ ?>7 200 &#8381;</a></td>
<td><a href="<?php echo $r1280db[1] ?>" target="_blank"><?php dnstech($r1280db[1]); ?></a></td>
<td><a href="<?php echo $r1280db[2] ?>" target="_blank"><?php citilink($r1280db[2]); ?></a></td>
<td><a href="<?php echo $r1280db[3] ?>" target="_blank"><?php dnstech($r1280db[3]); ?></a></td>
<td><a href="<?php echo $r1280db[4] ?>" target="_blank"><?php oldi($r1280db[4]); ?></a></td>
<td><a href="<?php echo $r1280db[5] ?>" target="_blank"><?php ulmart($r1280db[5]); ?></a></td>
<td><a href="<?php echo $r1280db[6] ?>" target="_blank"><?php /* pleer($r1280db[6]); */ ?></a></td>
</tr>
<tr><td>R1700BT</td>
<td><a href="<?php echo $r1700bt[0] ?>" target="_blank"><?php /* edifier($r1700bt[0]); */ ?>8 000 &#8381;</a></td>
<td><a href="<?php echo $r1700bt[1] ?>" target="_blank"><?php dnstech($r1700bt[1]); ?></a></td>
<td><a href="<?php echo $r1700bt[2] ?>" target="_blank"><?php citilink($r1700bt[2]); ?></a></td>
<td><a href="<?php echo $r1700bt[3] ?>" target="_blank"><?php dnstech($r1700bt[3]); ?></a></td>
<td><a href="<?php echo $r1700bt[4] ?>" target="_blank"><?php oldi($r1700bt[4]); ?></a></td>
<td><a href="<?php echo $r1700bt[5] ?>" target="_blank"><?php ulmart($r1700bt[5]); ?></a></td>
<td><a href="<?php echo $r1700bt[6] ?>" target="_blank"><?php /* pleer($r1700bt[6]); */ ?></a></td>
</tr>
<tr><td>R1800TIII</td>
<td><a href="<?php echo $r1800tiii[0] ?>" target="_blank"><?php /* edifier($r1800tiii[0]); */ ?>8 000 &#8381;</a></td>
<td><a href="<?php echo $r1800tiii[1] ?>" target="_blank"><?php dnstech($r1800tiii[1]); ?></a></td>
<td><a href="<?php echo $r1800tiii[2] ?>" target="_blank"><?php citilink($r1800tiii[2]); ?></a></td>
<td><a href="<?php echo $r1800tiii[3] ?>" target="_blank"><?php dnstech($r1800tiii[3]); ?></a></td>
<td><a href="<?php echo $r1800tiii[4] ?>" target="_blank"><?php oldi($r1800tiii[4]); ?></a></td>
<td><a href="<?php echo $r1800tiii[5] ?>" target="_blank"><?php ulmart($r1800tiii[5]); ?></a></td>
<td><a href="<?php echo $r1800tiii[6] ?>" target="_blank"><?php /* pleer($r1800tiii[6]); */ ?></a></td>
</tr>
<tr><td>R1900TV</td>
<td><a href="<?php echo $r1900tv[0] ?>" target="_blank"><?php /* edifier($r1900tv[0]); */ ?>9 000 &#8381;</a></td>
<td><a href="<?php echo $r1900tv[1] ?>" target="_blank"><?php dnstech($r1900tv[1]); ?></a></td>
<td><a href="<?php echo $r1900tv[2] ?>" target="_blank"><?php citilink($r1900tv[2]); ?></a></td>
<td><a href="<?php echo $r1900tv[3] ?>" target="_blank"><?php dnstech($r1900tv[3]); ?></a></td>
<td><a href="<?php echo $r1900tv[4] ?>" target="_blank"><?php oldi($r1900tv[4]); ?></a></td>
<td><a href="<?php echo $r1900tv[5] ?>" target="_blank"><?php ulmart($r1900tv[5]); ?></a></td>
<td><a href="<?php echo $r1900tv[6] ?>" target="_blank"><?php /* pleer($r1900tv[6]); */ ?></a></td>
</tr>
<tr><td>R2000DB</td>
<td><a href="<?php echo $r2000db[0] ?>" target="_blank"><?php /* edifier($r2000db[0]); */ ?>12 000 &#8381;</a></td>
<td><a href="<?php echo $r2000db[1] ?>" target="_blank"><?php dnstech($r2000db[1]); ?></a></td>
<td><a href="<?php echo $r2000db[2] ?>" target="_blank"><?php citilink($r2000db[2]); ?></a></td>
<td><a href="<?php echo $r2000db[3] ?>" target="_blank"><?php dnstech($r2000db[3]); ?></a></td>
<td><a href="<?php echo $r2000db[4] ?>" target="_blank"><?php oldi($r2000db[4]); ?></a></td>
<td><a href="<?php echo $r2000db[5] ?>" target="_blank"><?php ulmart($r2000db[5]); ?></a></td>
<td><a href="<?php echo $r2000db[6] ?>" target="_blank"><?php /* pleer($r2000db[6]); */ ?></a></td>
</tr>
<tr><td>E25HD</td>
<td><a href="<?php echo $e25hd[0] ?>" target="_blank"><?php /* edifier($e25hd[0]); */ ?>11 000 &#8381;</a></td>
<td><a href="<?php echo $e25hd[1] ?>" target="_blank"><?php dnstech($e25hd[1]); ?></a></td>
<td><a href="<?php echo $e25hd[2] ?>" target="_blank"><?php citilink($e25hd[2]); ?></a></td>
<td><a href="<?php echo $e25hd[3] ?>" target="_blank"><?php dnstech($e25hd[3]); ?></a></td>
<td><a href="<?php echo $e25hd[4] ?>" target="_blank"><?php oldi($e25hd[4]); ?></a></td>
<td><a href="<?php echo $e25hd[5] ?>" target="_blank"><?php ulmart($e25hd[5]); ?></a></td>
<td><a href="<?php echo $e25hd[6] ?>" target="_blank"><?php /* pleer($e25hd[6]); */ ?></a></td>
</tr>
<tr><td>R2700</td>
<td><a href="<?php echo $r2700[0] ?>" target="_blank"><?php /* edifier($r2700[0]); */ ?>11 500 &#8381;</a></td>
<td><a href="<?php echo $r2700[1] ?>" target="_blank"><?php dnstech($r2700[1]); ?></a></td>
<td><a href="<?php echo $r2700[2] ?>" target="_blank"><?php citilink($r2700[2]); ?></a></td>
<td><a href="<?php echo $r2700[3] ?>" target="_blank"><?php dnstech($r2700[3]); ?></a></td>
<td><a href="<?php echo $r2700[4] ?>" target="_blank"><?php oldi($r2700[4]); ?></a></td>
<td><a href="<?php echo $r2700[5] ?>" target="_blank"><?php ulmart($r2700[5]); ?></a></td>
<td><a href="<?php echo $r2700[6] ?>" target="_blank"><?php /* pleer($r2700[6]); */ ?></a></td>
</tr>
<tr><td>S880DB</td>
<td><a href="<?php echo $s880db[0] ?>" target="_blank"><?php /* edifier($s880db[0]); */ ?>18 000 &#8381;</a></td>
<td><a href="<?php echo $s880db[1] ?>" target="_blank"><?php dnstech($s880db[1]); ?></a></td>
<td><a href="<?php echo $s880db[2] ?>" target="_blank"><?php citilink($s880db[2]); ?></a></td>
<td><a href="<?php echo $s880db[3] ?>" target="_blank"><?php dnstech($s880db[3]); ?></a></td>
<td><a href="<?php echo $s880db[4] ?>" target="_blank"><?php oldi($s880db[4]); ?></a></td>
<td><a href="<?php echo $s880db[5] ?>" target="_blank"><?php ulmart($s880db[5]); ?></a></td>
<td><a href="<?php echo $s880db[6] ?>" target="_blank"><?php /* pleer($s880db[6]); */ ?></a></td>
</tr>
<tr><td>R2730DB</td>
<td><a href="<?php echo $r2730db[0] ?>" target="_blank"><?php /* edifier($r2730db[0]); */ ?>18 000 &#8381;</a></td>
<td><a href="<?php echo $r2730db[1] ?>" target="_blank"><?php dnstech($r2730db[1]); ?></a></td>
<td><a href="<?php echo $r2730db[2] ?>" target="_blank"><?php citilink($r2730db[2]); ?></a></td>
<td><a href="<?php echo $r2730db[3] ?>" target="_blank"><?php dnstech($r2730db[3]); ?></a></td>
<td><a href="<?php echo $r2730db[4] ?>" target="_blank"><?php oldi($r2730db[4]); ?></a></td>
<td><a href="<?php echo $r2730db[5] ?>" target="_blank"><?php ulmart($r2730db[5]); ?></a></td>
<td><a href="<?php echo $r2730db[6] ?>" target="_blank"><?php /* pleer($r2730db[6]); */ ?></a></td>
</tr>
<tr><td>S1000DB</td>
<td><a href="<?php echo $s1000db[0] ?>" target="_blank"><?php /* edifier($s1000db[0]); */ ?>22 000 &#8381;</a></td>
<td><a href="<?php echo $s1000db[1] ?>" target="_blank"><?php dnstech($s1000db[1]); ?></a></td>
<td><a href="<?php echo $s1000db[2] ?>" target="_blank"><?php citilink($s1000db[2]); ?></a></td>
<td><a href="<?php echo $s1000db[3] ?>" target="_blank"><?php dnstech($s1000db[3]); ?></a></td>
<td><a href="<?php echo $s1000db[4] ?>" target="_blank"><?php oldi($s1000db[4]); ?></a></td>
<td><a href="<?php echo $s1000db[5] ?>" target="_blank"><?php ulmart($s1000db[5]); ?></a></td>
<td><a href="<?php echo $s1000db[6] ?>" target="_blank"><?php /* pleer($s1000db[6]); */ ?></a></td>
</tr>
<tr><td>R2800</td>
<td><a href="<?php echo $r2800[0] ?>" target="_blank"><?php /* edifier($r2800[0]); */ ?>21 000 &#8381;</a></td>
<td><a href="<?php echo $r2800[1] ?>" target="_blank"><?php dnstech($r2800[1]); ?></a></td>
<td><a href="<?php echo $r2800[2] ?>" target="_blank"><?php citilink($r2800[2]); ?></a></td>
<td><a href="<?php echo $r2800[3] ?>" target="_blank"><?php dnstech($r2800[3]); ?></a></td>
<td><a href="<?php echo $r2800[4] ?>" target="_blank"><?php oldi($r2800[4]); ?></a></td>
<td><a href="<?php echo $r2800[5] ?>" target="_blank"><?php ulmart($r2800[5]); ?></a></td>
<td><a href="<?php echo $r2800[6] ?>" target="_blank"><?php /* pleer($r2800[6]); */ ?></a></td>
</tr>
<tr><td>S2000 Pro</td>
<td><a href="<?php echo $s2000pro[0] ?>" target="_blank"><?php /* edifier($s2000pro[0]); */ ?>26 000 &#8381;</a></td>
<td><a href="<?php echo $s2000pro[1] ?>" target="_blank"><?php dnstech($s2000pro[1]); ?></a></td>
<td><a href="<?php echo $s2000pro[2] ?>" target="_blank"><?php citilink($s2000pro[2]); ?></a></td>
<td><a href="<?php echo $s2000pro[3] ?>" target="_blank"><?php dnstech($s2000pro[3]); ?></a></td>
<td><a href="<?php echo $s2000pro[4] ?>" target="_blank"><?php oldi($s2000pro[4]); ?></a></td>
<td><a href="<?php echo $s2000pro[5] ?>" target="_blank"><?php ulmart($s2000pro[5]); ?></a></td>
<td><a href="<?php echo $s2000pro[6] ?>" target="_blank"><?php /* pleer($s2000pro[6]); */ ?></a></td>
</tr>
<tr><td>R2750DB</td>
<td><a href="<?php echo $r2750db[0] ?>" target="_blank"><?php /* edifier($r2750db[0]); */ ?>19 000 &#8381;</a></td>
<td><a href="<?php echo $r2750db[1] ?>" target="_blank"><?php dnstech($r2750db[1]); ?></a></td>
<td><a href="<?php echo $r2750db[2] ?>" target="_blank"><?php citilink($r2750db[2]); ?></a></td>
<td><a href="<?php echo $r2750db[3] ?>" target="_blank"><?php dnstech($r2750db[3]); ?></a></td>
<td><a href="<?php echo $r2750db[4] ?>" target="_blank"><?php oldi($r2750db[4]); ?></a></td>
<td><a href="<?php echo $r2750db[5] ?>" target="_blank"><?php ulmart($r2750db[5]); ?></a></td>
<td><a href="<?php echo $r2750db[6] ?>" target="_blank"><?php /* pleer($r2750db[6]); */ ?></a></td>
</tr>
<tr><td>S3000 Pro</td>
<td><a href="<?php echo $s3000pro[0] ?>" target="_blank"><?php /* edifier($s3000pro[0]); */ ?>48 000 &#8381;</a></td>
<td><a href="<?php echo $s3000pro[1] ?>" target="_blank"><?php dnstech($s3000pro[1]); ?></a></td>
<td><a href="<?php echo $s3000pro[2] ?>" target="_blank"><?php citilink($s3000pro[2]); ?></a></td>
<td><a href="<?php echo $s3000pro[3] ?>" target="_blank"><?php dnstech($s3000pro[3]); ?></a></td>
<td><a href="<?php echo $s3000pro[4] ?>" target="_blank"><?php oldi($s3000pro[4]); ?></a></td>
<td><a href="<?php echo $s3000pro[5] ?>" target="_blank"><?php ulmart($s3000pro[5]); ?></a></td>
<td><a href="<?php echo $s3000pro[6] ?>" target="_blank"><?php /* pleer($s3000pro[6]); */ ?></a></td>
</tr>
<tr><td>R1080BT</td>
<td><a href="<?php echo $r1080bt[0] ?>" target="_blank"><?php /* edifier($r1080bt[0]); */ ?>7 100 &#8381;</a></td>
<td><a href="<?php echo $r1080bt[1] ?>" target="_blank"><?php dnstech($r1080bt[1]); ?></a></td>
<td><a href="<?php echo $r1080bt[2] ?>" target="_blank"><?php citilink($r1080bt[2]); ?></a></td>
<td><a href="<?php echo $r1080bt[3] ?>" target="_blank"><?php dnstech($r1080bt[3]); ?></a></td>
<td><a href="<?php echo $r1080bt[4] ?>" target="_blank"><?php oldi($r1080bt[4]); ?></a></td>
<td><a href="<?php echo $r1080bt[5] ?>" target="_blank"><?php ulmart($r1080bt[5]); ?></a></td>
<td><a href="<?php echo $r1080bt[6] ?>" target="_blank"><?php /* pleer($r1080bt[6]); */ ?></a></td>
</tr>
<tr><td>A100</td>
<td><a href="<?php echo $a100[0] ?>" target="_blank"><?php /* edifier($a100[0]); */ ?>47 000 &#8381;</a></td>
<td><a href="<?php echo $a100[1] ?>" target="_blank"><?php dnstech($a100[1]); ?></a></td>
<td><a href="<?php echo $a100[2] ?>" target="_blank"><?php citilink($a100[2]); ?></a></td>
<td><a href="<?php echo $a100[3] ?>" target="_blank"><?php dnstech($a100[3]); ?></a></td>
<td><a href="<?php echo $a100[4] ?>" target="_blank"><?php oldi($a100[4]); ?></a></td>
<td><a href="<?php echo $a100[5] ?>" target="_blank"><?php ulmart($a100[5]); ?></a></td>
<td><a href="<?php echo $a100[6] ?>" target="_blank"><?php /* pleer($a100[6]); */ ?></a></td>
</tr>
<tr><td>A200</td>
<td><a href="<?php echo $a200[0] ?>" target="_blank"><?php /* edifier($a200[0]); */ ?>50 000 &#8381;</a></td>
<td><a href="<?php echo $a200[1] ?>" target="_blank"><?php dnstech($a200[1]); ?></a></td>
<td><a href="<?php echo $a200[2] ?>" target="_blank"><?php citilink($a200[2]); ?></a></td>
<td><a href="<?php echo $a200[3] ?>" target="_blank"><?php dnstech($a200[3]); ?></a></td>
<td><a href="<?php echo $a200[4] ?>" target="_blank"><?php oldi($a200[4]); ?></a></td>
<td><a href="<?php echo $a200[5] ?>" target="_blank"><?php ulmart($a200[5]); ?></a></td>
<td><a href="<?php echo $a200[6] ?>" target="_blank"><?php /* pleer($a200[6]); */ ?></a></td>
</tr>
<tr><td>A300</td>
<td><a href="<?php echo $a300[0] ?>" target="_blank"><?php /* edifier($a300[0]); */ ?>65 000 &#8381;</a></td>
<td><a href="<?php echo $a300[1] ?>" target="_blank"><?php dnstech($a300[1]); ?></a></td>
<td><a href="<?php echo $a300[2] ?>" target="_blank"><?php citilink($a300[2]); ?></a></td>
<td><a href="<?php echo $a300[3] ?>" target="_blank"><?php dnstech($a300[3]); ?></a></td>
<td><a href="<?php echo $a300[4] ?>" target="_blank"><?php oldi($a300[4]); ?></a></td>
<td><a href="<?php echo $a300[5] ?>" target="_blank"><?php ulmart($a300[5]); ?></a></td>
<td><a href="<?php echo $a300[6] ?>" target="_blank"><?php /* pleer($a300[6]); */ ?></a></td>
</tr>
<tr><td>M1360</td>
<td><a href="<?php echo $m1360[0] ?>" target="_blank"><?php /* edifier($m1360[0]); */ ?>2 700 &#8381;</a></td>
<td><a href="<?php echo $m1360[1] ?>" target="_blank"><?php dnstech($m1360[1]); ?></a></td>
<td><a href="<?php echo $m1360[2] ?>" target="_blank"><?php citilink($m1360[2]); ?></a></td>
<td><a href="<?php echo $m1360[3] ?>" target="_blank"><?php dnstech($m1360[3]); ?></a></td>
<td><a href="<?php echo $m1360[4] ?>" target="_blank"><?php oldi($m1360[4]); ?></a></td>
<td><a href="<?php echo $m1360[5] ?>" target="_blank"><?php ulmart($m1360[5]); ?></a></td>
<td><a href="<?php echo $m1360[6] ?>" target="_blank"><?php /* pleer($m1360[6]); */ ?></a></td>
</tr>
<tr><td>XM6PF</td>
<td><a href="<?php echo $xm6pf[0] ?>" target="_blank"><?php /* edifier($xm6pf[0]); */ ?>5 800 &#8381;</a></td>
<td><a href="<?php echo $xm6pf[1] ?>" target="_blank"><?php dnstech($xm6pf[1]); ?></a></td>
<td><a href="<?php echo $xm6pf[2] ?>" target="_blank"><?php citilink($xm6pf[2]); ?></a></td>
<td><a href="<?php echo $xm6pf[3] ?>" target="_blank"><?php dnstech($xm6pf[3]); ?></a></td>
<td><a href="<?php echo $xm6pf[4] ?>" target="_blank"><?php oldi($xm6pf[4]); ?></a></td>
<td><a href="<?php echo $xm6pf[5] ?>" target="_blank"><?php ulmart($xm6pf[5]); ?></a></td>
<td><a href="<?php echo $xm6pf[6] ?>" target="_blank"><?php /* pleer($xm6pf[6]); */ ?></a></td>
</tr>
<tr><td>XM6BT</td>
<td><a href="<?php echo $xm6bt[0] ?>" target="_blank"><?php /* edifier($xm6bt[0]); */ ?>7 000 &#8381;</a></td>
<td><a href="<?php echo $xm6bt[1] ?>" target="_blank"><?php dnstech($xm6bt[1]); ?></a></td>
<td><a href="<?php echo $xm6bt[2] ?>" target="_blank"><?php citilink($xm6bt[2]); ?></a></td>
<td><a href="<?php echo $xm6bt[3] ?>" target="_blank"><?php dnstech($xm6bt[3]); ?></a></td>
<td><a href="<?php echo $xm6bt[4] ?>" target="_blank"><?php oldi($xm6bt[4]); ?></a></td>
<td><a href="<?php echo $xm6bt[5] ?>" target="_blank"><?php ulmart($xm6bt[5]); ?></a></td>
<td><a href="<?php echo $xm6bt[6] ?>" target="_blank"><?php /* pleer($xm6bt[6]); */ ?></a></td>
</tr>
<tr><td>C2XD</td>
<td><a href="<?php echo $c2xd[0] ?>" target="_blank"><?php /* edifier($c2xd[0]); */ ?>8 800 &#8381;</a></td>
<td><a href="<?php echo $c2xd[1] ?>" target="_blank"><?php dnstech($c2xd[1]); ?></a></td>
<td><a href="<?php echo $c2xd[2] ?>" target="_blank"><?php citilink($c2xd[2]); ?></a></td>
<td><a href="<?php echo $c2xd[3] ?>" target="_blank"><?php dnstech($c2xd[3]); ?></a></td>
<td><a href="<?php echo $c2xd[4] ?>" target="_blank"><?php oldi($c2xd[4]); ?></a></td>
<td><a href="<?php echo $c2xd[5] ?>" target="_blank"><?php ulmart($c2xd[5]); ?></a></td>
<td><a href="<?php echo $c2xd[6] ?>" target="_blank"><?php /* pleer($c2xd[6]); */ ?></a></td>
</tr>
<tr><td>C2XB</td>
<td><a href="<?php echo $c2xb[0] ?>" target="_blank"><?php /* edifier($c2xb[0]); */ ?>11 000 &#8381;</a></td>
<td><a href="<?php echo $c2xb[1] ?>" target="_blank"><?php dnstech($c2xb[1]); ?></a></td>
<td><a href="<?php echo $c2xb[2] ?>" target="_blank"><?php citilink($c2xb[2]); ?></a></td>
<td><a href="<?php echo $c2xb[3] ?>" target="_blank"><?php dnstech($c2xb[3]); ?></a></td>
<td><a href="<?php echo $c2xb[4] ?>" target="_blank"><?php oldi($c2xb[4]); ?></a></td>
<td><a href="<?php echo $c2xb[5] ?>" target="_blank"><?php ulmart($c2xb[5]); ?></a></td>
<td><a href="<?php echo $c2xb[6] ?>" target="_blank"><?php /* pleer($c2xb[6]); */ ?></a></td>
</tr>
<tr><td>E3360BT</td>
<td><a href="<?php echo $e3360bt[0] ?>" target="_blank"><?php /* edifier($e3360bt[0]); */ ?>8 000 &#8381;</a></td>
<td><a href="<?php echo $e3360bt[1] ?>" target="_blank"><?php dnstech($e3360bt[1]); ?></a></td>
<td><a href="<?php echo $e3360bt[2] ?>" target="_blank"><?php citilink($e3360bt[2]); ?></a></td>
<td><a href="<?php echo $e3360bt[3] ?>" target="_blank"><?php dnstech($e3360bt[3]); ?></a></td>
<td><a href="<?php echo $e3360bt[4] ?>" target="_blank"><?php oldi($e3360bt[4]); ?></a></td>
<td><a href="<?php echo $e3360bt[5] ?>" target="_blank"><?php ulmart($e3360bt[5]); ?></a></td>
<td><a href="<?php echo $e3360bt[6] ?>" target="_blank"><?php /* pleer($e3360bt[6]); */ ?></a></td>
</tr>
<tr><td>M3600D</td>
<td><a href="<?php echo $m3600d[0] ?>" target="_blank"><?php /* edifier($m3600d[0]); */ ?>11 500 &#8381;</a></td>
<td><a href="<?php echo $m3600d[1] ?>" target="_blank"><?php dnstech($m3600d[1]); ?></a></td>
<td><a href="<?php echo $m3600d[2] ?>" target="_blank"><?php citilink($m3600d[2]); ?></a></td>
<td><a href="<?php echo $m3600d[3] ?>" target="_blank"><?php dnstech($m3600d[3]); ?></a></td>
<td><a href="<?php echo $m3600d[4] ?>" target="_blank"><?php oldi($m3600d[4]); ?></a></td>
<td><a href="<?php echo $m3600d[5] ?>" target="_blank"><?php ulmart($m3600d[5]); ?></a></td>
<td><a href="<?php echo $m3600d[6] ?>" target="_blank"><?php /* pleer($m3600d[6]); */ ?></a></td>
</tr>
<tr><td>S351DB</td>
<td><a href="<?php echo $s351db[0] ?>" target="_blank"><?php /* edifier($s351db[0]); */ ?>19 000 &#8381;</a></td>
<td><a href="<?php echo $s351db[1] ?>" target="_blank"><?php dnstech($s351db[1]); ?></a></td>
<td><a href="<?php echo $s351db[2] ?>" target="_blank"><?php citilink($s351db[2]); ?></a></td>
<td><a href="<?php echo $s351db[3] ?>" target="_blank"><?php dnstech($s351db[3]); ?></a></td>
<td><a href="<?php echo $s351db[4] ?>" target="_blank"><?php oldi($s351db[4]); ?></a></td>
<td><a href="<?php echo $s351db[5] ?>" target="_blank"><?php ulmart($s351db[5]); ?></a></td>
<td><a href="<?php echo $s351db[6] ?>" target="_blank"><?php /* pleer($s351db[6]); */ ?></a></td>
</tr>
<tr><td>S360DB</td>
<td><a href="<?php echo $s360db[0] ?>" target="_blank"><?php /* edifier($s360db[0]); */ ?>26 000 &#8381;</a></td>
<td><a href="<?php echo $s360db[1] ?>" target="_blank"><?php dnstech($s360db[1]); ?></a></td>
<td><a href="<?php echo $s360db[2] ?>" target="_blank"><?php citilink($s360db[2]); ?></a></td>
<td><a href="<?php echo $s360db[3] ?>" target="_blank"><?php dnstech($s360db[3]); ?></a></td>
<td><a href="<?php echo $s360db[4] ?>" target="_blank"><?php oldi($s360db[4]); ?></a></td>
<td><a href="<?php echo $s360db[5] ?>" target="_blank"><?php ulmart($s360db[5]); ?></a></td>
<td><a href="<?php echo $s360db[6] ?>" target="_blank"><?php /* pleer($s360db[6]); */ ?></a></td>
</tr>
<tr><td>XM3BT</td>
<td><a href="<?php echo $xm3bt[0] ?>" target="_blank"><?php /* edifier($xm3bt[0]); */ ?>7 900 &#8381;</a></td>
<td><a href="<?php echo $xm3bt[1] ?>" target="_blank"><?php dnstech($xm3bt[1]); ?></a></td>
<td><a href="<?php echo $xm3bt[2] ?>" target="_blank"><?php citilink($xm3bt[2]); ?></a></td>
<td><a href="<?php echo $xm3bt[3] ?>" target="_blank"><?php dnstech($xm3bt[3]); ?></a></td>
<td><a href="<?php echo $xm3bt[4] ?>" target="_blank"><?php oldi($xm3bt[4]); ?></a></td>
<td><a href="<?php echo $xm3bt[5] ?>" target="_blank"><?php ulmart($xm3bt[5]); ?></a></td>
<td><a href="<?php echo $xm3bt[6] ?>" target="_blank"><?php /* pleer($xm3bt[6]); */ ?></a></td>
</tr>
<tr><td>R501TIII</td>
<td><a href="<?php echo $r501tiii[0] ?>" target="_blank"><?php /* edifier($r501tiii[0]); */ ?>12 500 &#8381;</a></td>
<td><a href="<?php echo $r501tiii[1] ?>" target="_blank"><?php dnstech($r501tiii[1]); ?></a></td>
<td><a href="<?php echo $r501tiii[2] ?>" target="_blank"><?php citilink($r501tiii[2]); ?></a></td>
<td><a href="<?php echo $r501tiii[3] ?>" target="_blank"><?php dnstech($r501tiii[3]); ?></a></td>
<td><a href="<?php echo $r501tiii[4] ?>" target="_blank"><?php oldi($r501tiii[4]); ?></a></td>
<td><a href="<?php echo $r501tiii[5] ?>" target="_blank"><?php ulmart($r501tiii[5]); ?></a></td>
<td><a href="<?php echo $r501tiii[6] ?>" target="_blank"><?php /* pleer($r501tiii[6]); */ ?></a></td>
</tr>
<tr><td>R501BT</td>
<td><a href="<?php echo $r501bt[0] ?>" target="_blank"><?php /* edifier($r501bt[0]); */ ?>15 000 &#8381;</a></td>
<td><a href="<?php echo $r501bt[1] ?>" target="_blank"><?php dnstech($r501bt[1]); ?></a></td>
<td><a href="<?php echo $r501bt[2] ?>" target="_blank"><?php citilink($r501bt[2]); ?></a></td>
<td><a href="<?php echo $r501bt[3] ?>" target="_blank"><?php dnstech($r501bt[3]); ?></a></td>
<td><a href="<?php echo $r501bt[4] ?>" target="_blank"><?php oldi($r501bt[4]); ?></a></td>
<td><a href="<?php echo $r501bt[5] ?>" target="_blank"><?php ulmart($r501bt[5]); ?></a></td>
<td><a href="<?php echo $r501bt[6] ?>" target="_blank"><?php /* pleer($r501bt[6]); */ ?></a></td>
</tr>
<tr><td>S760D</td>
<td><a href="<?php echo $s760d[0] ?>" target="_blank"><?php /* edifier($s760d[0]); */ ?>43 000 &#8381;</a></td>
<td><a href="<?php echo $s760d[1] ?>" target="_blank"><?php dnstech($s760d[1]); ?></a></td>
<td><a href="<?php echo $s760d[2] ?>" target="_blank"><?php citilink($s760d[2]); ?></a></td>
<td><a href="<?php echo $s760d[3] ?>" target="_blank"><?php dnstech($s760d[3]); ?></a></td>
<td><a href="<?php echo $s760d[4] ?>" target="_blank"><?php oldi($s760d[4]); ?></a></td>
<td><a href="<?php echo $s760d[5] ?>" target="_blank"><?php ulmart($s760d[5]); ?></a></td>
<td><a href="<?php echo $s760d[6] ?>" target="_blank"><?php /* pleer($s760d[6]); */ ?></a></td>
</tr>
<tr><td>MP15 Plus</td>
<td><a href="<?php echo $mp15plus[0] ?>" target="_blank"><?php /* edifier($mp15plus[0]); */ ?>1 350 &#8381;</a></td>
<td><a href="<?php echo $mp15plus[1] ?>" target="_blank"><?php dnstech($mp15plus[1]); ?></a></td>
<td><a href="<?php echo $mp15plus[2] ?>" target="_blank"><?php citilink($mp15plus[2]); ?></a></td>
<td><a href="<?php echo $mp15plus[3] ?>" target="_blank"><?php dnstech($mp15plus[3]); ?></a></td>
<td><a href="<?php echo $mp15plus[4] ?>" target="_blank"><?php oldi($mp15plus[4]); ?></a></td>
<td><a href="<?php echo $mp15plus[5] ?>" target="_blank"><?php ulmart($mp15plus[5]); ?></a></td>
<td><a href="<?php echo $mp15plus[6] ?>" target="_blank"><?php /* pleer($mp15plus[6]); */ ?></a></td>
</tr>
<tr><td>MP17</td>
<td><a href="<?php echo $mp17[0] ?>" target="_blank"><?php /* edifier($mp17[0]); */ ?>1 550 &#8381;</a></td>
<td><a href="<?php echo $mp17[1] ?>" target="_blank"><?php dnstech($mp17[1]); ?></a></td>
<td><a href="<?php echo $mp17[2] ?>" target="_blank"><?php citilink($mp17[2]); ?></a></td>
<td><a href="<?php echo $mp17[3] ?>" target="_blank"><?php dnstech($mp17[3]); ?></a></td>
<td><a href="<?php echo $mp17[4] ?>" target="_blank"><?php oldi($mp17[4]); ?></a></td>
<td><a href="<?php echo $mp17[5] ?>" target="_blank"><?php ulmart($mp17[5]); ?></a></td>
<td><a href="<?php echo $mp17[6] ?>" target="_blank"><?php /* pleer($mp17[6]); */ ?></a></td>
</tr>
<tr><td>MP80</td>
<td><a href="<?php echo $mp80[0] ?>" target="_blank"><?php /* edifier($mp80[0]); */ ?>1 700 &#8381;</a></td>
<td><a href="<?php echo $mp80[1] ?>" target="_blank"><?php dnstech($mp80[1]); ?></a></td>
<td><a href="<?php echo $mp80[2] ?>" target="_blank"><?php citilink($mp80[2]); ?></a></td>
<td><a href="<?php echo $mp80[3] ?>" target="_blank"><?php dnstech($mp80[3]); ?></a></td>
<td><a href="<?php echo $mp80[4] ?>" target="_blank"><?php oldi($mp80[4]); ?></a></td>
<td><a href="<?php echo $mp80[5] ?>" target="_blank"><?php ulmart($mp80[5]); ?></a></td>
<td><a href="<?php echo $mp80[6] ?>" target="_blank"><?php /* pleer($mp80[6]); */ ?></a></td>
</tr>
<tr><td>MP100</td>
<td><a href="<?php echo $mp100[0] ?>" target="_blank"><?php /* edifier($mp100[0]); */ ?>1 850 &#8381;</a></td>
<td><a href="<?php echo $mp100[1] ?>" target="_blank"><?php dnstech($mp100[1]); ?></a></td>
<td><a href="<?php echo $mp100[2] ?>" target="_blank"><?php citilink($mp100[2]); ?></a></td>
<td><a href="<?php echo $mp100[3] ?>" target="_blank"><?php dnstech($mp100[3]); ?></a></td>
<td><a href="<?php echo $mp100[4] ?>" target="_blank"><?php oldi($mp100[4]); ?></a></td>
<td><a href="<?php echo $mp100[5] ?>" target="_blank"><?php ulmart($mp100[5]); ?></a></td>
<td><a href="<?php echo $mp100[6] ?>" target="_blank"><?php /* pleer($mp100[6]); */ ?></a></td>
</tr>
<tr><td>MP200</td>
<td><a href="<?php echo $mp200[0] ?>" target="_blank"><?php /* edifier($mp200[0]); */ ?>1 980 &#8381;</a></td>
<td><a href="<?php echo $mp200[1] ?>" target="_blank"><?php dnstech($mp200[1]); ?></a></td>
<td><a href="<?php echo $mp200[2] ?>" target="_blank"><?php citilink($mp200[2]); ?></a></td>
<td><a href="<?php echo $mp200[3] ?>" target="_blank"><?php dnstech($mp200[3]); ?></a></td>
<td><a href="<?php echo $mp200[4] ?>" target="_blank"><?php oldi($mp200[4]); ?></a></td>
<td><a href="<?php echo $mp200[5] ?>" target="_blank"><?php ulmart($mp200[5]); ?></a></td>
<td><a href="<?php echo $mp200[6] ?>" target="_blank"><?php /* pleer($mp200[6]); */ ?></a></td>
</tr>
<tr><td>MP202 DUO</td>
<td><a href="<?php echo $mp202duo[0] ?>" target="_blank"><?php /* edifier($mp202duo[0]); */ ?>3 000 &#8381;</a></td>
<td><a href="<?php echo $mp202duo[1] ?>" target="_blank"><?php dnstech($mp202duo[1]); ?></a></td>
<td><a href="<?php echo $mp202duo[2] ?>" target="_blank"><?php citilink($mp202duo[2]); ?></a></td>
<td><a href="<?php echo $mp202duo[3] ?>" target="_blank"><?php dnstech($mp202duo[3]); ?></a></td>
<td><a href="<?php echo $mp202duo[4] ?>" target="_blank"><?php oldi($mp202duo[4]); ?></a></td>
<td><a href="<?php echo $mp202duo[5] ?>" target="_blank"><?php ulmart($mp202duo[5]); ?></a></td>
<td><a href="<?php echo $mp202duo[6] ?>" target="_blank"><?php /* pleer($mp202duo[6]); */ ?></a></td>
</tr>
<tr><td>MP233</td>
<td><a href="<?php echo $mp233[0] ?>" target="_blank"><?php /* edifier($mp233[0]); */ ?>2 300 &#8381;</a></td>
<td><a href="<?php echo $mp233[1] ?>" target="_blank"><?php dnstech($mp233[1]); ?></a></td>
<td><a href="<?php echo $mp233[2] ?>" target="_blank"><?php citilink($mp233[2]); ?></a></td>
<td><a href="<?php echo $mp233[3] ?>" target="_blank"><?php dnstech($mp233[3]); ?></a></td>
<td><a href="<?php echo $mp233[4] ?>" target="_blank"><?php oldi($mp233[4]); ?></a></td>
<td><a href="<?php echo $mp233[5] ?>" target="_blank"><?php ulmart($mp233[5]); ?></a></td>
<td><a href="<?php echo $mp233[6] ?>" target="_blank"><?php /* pleer($mp233[6]); */ ?></a></td>
</tr>
<tr><td>MP280</td>
<td><a href="<?php echo $mp280[0] ?>" target="_blank"><?php /* edifier($mp280[0]); */ ?>3 400 &#8381;</a></td>
<td><a href="<?php echo $mp280[1] ?>" target="_blank"><?php dnstech($mp280[1]); ?></a></td>
<td><a href="<?php echo $mp280[2] ?>" target="_blank"><?php citilink($mp280[2]); ?></a></td>
<td><a href="<?php echo $mp280[3] ?>" target="_blank"><?php dnstech($mp280[3]); ?></a></td>
<td><a href="<?php echo $mp280[4] ?>" target="_blank"><?php oldi($mp280[4]); ?></a></td>
<td><a href="<?php echo $mp280[5] ?>" target="_blank"><?php ulmart($mp280[5]); ?></a></td>
<td><a href="<?php echo $mp280[6] ?>" target="_blank"><?php /* pleer($mp280[6]); */ ?></a></td>
</tr>
<tr><td>SS01C</td>
<td><a href="<?php echo $ss01c[0] ?>" target="_blank"><?php /* edifier($ss01c[0]); */ ?>5 650 &#8381;</a></td>
<td><a href="<?php echo $ss01c[1] ?>" target="_blank"><?php dnstech($ss01c[1]); ?></a></td>
<td><a href="<?php echo $ss01c[2] ?>" target="_blank"><?php citilink($ss01c[2]); ?></a></td>
<td><a href="<?php echo $ss01c[3] ?>" target="_blank"><?php dnstech($ss01c[3]); ?></a></td>
<td><a href="<?php echo $ss01c[4] ?>" target="_blank"><?php oldi($ss01c[4]); ?></a></td>
<td><a href="<?php echo $ss01c[5] ?>" target="_blank"><?php ulmart($ss01c[5]); ?></a></td>
<td><a href="<?php echo $ss01c[6] ?>" target="_blank"><?php /* pleer($ss01c[6]); */ ?></a></td>
</tr>
<tr><td>SS02</td>
<td><a href="<?php echo $ss02[0] ?>" target="_blank"><?php /* edifier($ss02[0]); */ ?>9 200 &#8381;</a></td>
<td><a href="<?php echo $ss02[1] ?>" target="_blank"><?php dnstech($ss02[1]); ?></a></td>
<td><a href="<?php echo $ss02[2] ?>" target="_blank"><?php citilink($ss02[2]); ?></a></td>
<td><a href="<?php echo $ss02[3] ?>" target="_blank"><?php dnstech($ss02[3]); ?></a></td>
<td><a href="<?php echo $ss02[4] ?>" target="_blank"><?php oldi($ss02[4]); ?></a></td>
<td><a href="<?php echo $ss02[5] ?>" target="_blank"><?php ulmart($ss02[5]); ?></a></td>
<td><a href="<?php echo $ss02[6] ?>" target="_blank"><?php /* pleer($ss02[6]); */ ?></a></td>
</tr>
<tr><td>SS03</td>
<td><a href="<?php echo $ss03[0] ?>" target="_blank"><?php /* edifier($ss03[0]); */ ?>11 000 &#8381;</a></td>
<td><a href="<?php echo $ss03[1] ?>" target="_blank"><?php dnstech($ss03[1]); ?></a></td>
<td><a href="<?php echo $ss03[2] ?>" target="_blank"><?php citilink($ss03[2]); ?></a></td>
<td><a href="<?php echo $ss03[3] ?>" target="_blank"><?php dnstech($ss03[3]); ?></a></td>
<td><a href="<?php echo $ss03[4] ?>" target="_blank"><?php oldi($ss03[4]); ?></a></td>
<td><a href="<?php echo $ss03[5] ?>" target="_blank"><?php ulmart($ss03[5]); ?></a></td>
<td><a href="<?php echo $ss03[6] ?>" target="_blank"><?php /* pleer($ss03[6]); */ ?></a></td>
</tr>
<tr><td>ST200</td>
<td><a href="<?php echo $st200[0] ?>" target="_blank"><?php /* edifier($st200[0]); */ ?>9 600 &#8381;</a></td>
<td><a href="<?php echo $st200[1] ?>" target="_blank"><?php dnstech($st200[1]); ?></a></td>
<td><a href="<?php echo $st200[2] ?>" target="_blank"><?php citilink($st200[2]); ?></a></td>
<td><a href="<?php echo $st200[3] ?>" target="_blank"><?php dnstech($st200[3]); ?></a></td>
<td><a href="<?php echo $st200[4] ?>" target="_blank"><?php oldi($st200[4]); ?></a></td>
<td><a href="<?php echo $st200[5] ?>" target="_blank"><?php ulmart($st200[5]); ?></a></td>
<td><a href="<?php echo $st200[6] ?>" target="_blank"><?php /* pleer($st200[6]); */ ?></a></td>
</tr>
<tr><td>ST300</td>
<td><a href="<?php echo $st300[0] ?>" target="_blank"><?php /* edifier($st300[0]); */ ?>10 900 &#8381;</a></td>
<td><a href="<?php echo $st300[1] ?>" target="_blank"><?php dnstech($st300[1]); ?></a></td>
<td><a href="<?php echo $st300[2] ?>" target="_blank"><?php citilink($st300[2]); ?></a></td>
<td><a href="<?php echo $st300[3] ?>" target="_blank"><?php dnstech($st300[3]); ?></a></td>
<td><a href="<?php echo $st300[4] ?>" target="_blank"><?php oldi($st300[4]); ?></a></td>
<td><a href="<?php echo $st300[5] ?>" target="_blank"><?php ulmart($st300[5]); ?></a></td>
<td><a href="<?php echo $st300[6] ?>" target="_blank"><?php /* pleer($st300[6]); */ ?></a></td>
</tr>
</table>
</div>

</body>
</html>