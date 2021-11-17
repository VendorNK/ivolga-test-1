<?php

$page = $_REQUEST['p'] ?? '';

$a = '<p>В Москве компания из трех собак угнала машину своего хозяина, устроила ДТП, а затем скрылась с места происшествия. Об этом сообщается в пресс-релизе компании "АльфаСтрахование", поступившем в редакцию "Ленты.ру". Инцидент произошел в середине марта, однако страховая компания, которая занималась изучением деталей происшествия, распространила информацию о нем только сейчас.<p>
<p>Как выяснилось в ходе расследования происшествия, псы устроили аварию вскоре после того, как хозяин оставил их в заведенном автомобиле на стоянке торгового центра, а сам ушел по делам. Каким-то образом животные сумели привести машину в движение и проехали в ней несколько метров до ближайшего препятствия, которым оказался другой автомобиль.<p>
<p>В момент столкновения в машине, в которую врезались собаки, никого не было. Хозяйка автомобиля увидела последствия устроенной псами аварии только когда вышла из торгового центра. Девушка бросилась к машине, врезавшейся в ее авто, открыла дверь, но не обнаружила водителя в салоне. Вместо него в водительском кресле сидели три пса и лаяли.<p>
<p>Потрясенная девшка собралась с мыслями и решила снять на камеру мобильного телефона и собак, и последствия того, что они натворили. После этого на место происшествия были вызваны сотрудники ГИБДД. Для составления протокола о необычной автомобильной аварии они пригласили девушку в служебный автомобиль.<p>
<p>Когда составление протокола было завершено, хозяйка поврежденного автомобиля и сотрудники ГИБДД отправились на место аварии, но машины с собаками там не обнаружили. Оказалось, во время заполнения документов специалистами псы сумели скрыться с места ДТП. Но уехать далеко у них не получилось - машину с собаками нашли неподалеку.<p>
<p>Как хозяин собак отреагировал на произошедшее, не уточняется. Известно, что собачье ДТП было признано страховым случаем. Размер компенсации, полученной девушкой, не указывается.<p>';

$link = '/a';

if ($page == '') {

    // Вырезаем первые 180 символов из полного текста новости
    $a = strip_tags($a);
    $pos = mb_strpos($a, ' ', 180); // Обрезаем текст по пробелу (можно закомментировать)
    if (!$pos) $pos = 180;
    $b = mb_substr($a, 0, $pos); // Вырезаем фрагмент текста

    // Вырезаем два последних слова из сокращенного текста новости
    $arr_b = explode(' ', $b);
    $last_word = array_pop($arr_b);
    $pre_last_word = array_pop($arr_b);

    // Формируем сокращенный текст новости с ссылкой и многоточием.
    $anchor = $pre_last_word . ' ' . $last_word;
    $excerpt = implode(' ', $arr_b) . " <a href=\"{$link}\">{$anchor} ...</a>";

    $content = $excerpt;

} else {

    $content = ${$page};

}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 - PHP и HTML. Напишите код на PHP</title>

    <style>
        .container {
            width: 800px;
            max-width: 100%;
            margin: 0 auto;
        }
    </style>

</head>

<body>
    <div class="container">
        <p><?= $content ?></p>
    </div>
</body>

</html>