﻿<?php 

$info = <<<EOT
                Output, который генерирует app в html или текстовый файл, используется для создания mp3 файлов. При прослушке файлов 
                происходит изучение новых слов языка. Выбраные слова будут иметь коректный и некоректный перевод, что является feature 
                данного способа изучения слов. Кроме формата outputa можно выбрать сколько слов будет начтено из db. Это в случае если 
                app будет выбирать их случайно из db(choose randomly в первом selecte). Если же в первом select выбрать select manualy, 
                то произойдет запрос JQ AJAX и возникнет выбор всех слов из db. Кликая на слова можно их выбрать, и тогда процесс подбора 
                правильного и неправильного перевода будет только с использованием данных слов. 
EOT;
?>

