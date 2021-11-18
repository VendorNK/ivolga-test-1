# ivolga-test-1

1. PHP и HTML. Напишите код на PHP
В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
Нужно в переменную $b записать сокращенный текст новости по правилам:
- обрезать до 180 символов
- приписать многоточие
- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
Результат: ссылка на репозиторий с кодом и ваши комментарии.


Комментарии:
- Возможна проблема при подсчете количества символол, следует учесть кириллицу в кодрировке UTF-8.
- Также перед обработкой текста нужно вырезать из него фрагменты HTML-кода.
