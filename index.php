<?php
  $htmlTitle = 'HomeWork PHP#4';
  $htmlTheme = 'Строки, массивы, рег.выражения';
  include('./src/header.php');
  include('./src/function.php');

  //функция автодобавления Echo со вложенным тегом <p>
  //function add($text)
  
  //функция добавляющее заголовок "условие" со вложенным текстом
  //condition($text)
  
  //функция добавления начала и конца DIVа с авто-заголовком по запросу
  //task($arg), $arg = "start" или "end"

  task('start');
  condition('1. Дана строка \'london is the capital of great britain\'. Сделайте из нее
  строку \'London Is The Capital Of Great Britain\'.');

  $str = "london is the capital of great britain";
  add("До: ".$str);
  $strArr = explode(' ', $str);
  foreach($strArr as &$s) $s = ucfirst($s);
  $str = implode(' ', $strArr);
  add("После: ".$str);

  task('end');

  include('./src/footer.php');
?>