<?php
/*
 @MikeRzhevsky miker.ru@gmail.com


Нужно написать на php функцию, которая принимает строку — текст на любом языке
и возвращает массив из 5 наиболее часто встречающихся слов в этом тексте.
Ключ массива — слово, значение — количество.
Ни веб-сервер, ни база данных не понадобятся; версия php не имеет значения.

*/

$text = "А я гуляю по Москве гуляю здесь гуляю гуляю по Москве гуляю здесь и я";
$words   = preg_split('/\s+/', $text);
$wordscount =array_count_values($words);
arsort($wordscount);
$sliced_array = array_slice($wordscount, 0, 5);
foreach ($sliced_array as $id => $values) 
{
    echo "Слово :' $id' было использовано '$values' раз <br>";

}

?>