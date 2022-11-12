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


  task('start');
  condition('2. Дана строка \'html <b>css</b> php\'. Удалите теги из этой строки. С
  помощью функции explode запишите каждое слово этой строки в отдельный
  элемент массива.');

  $str1 = "html <b>css</b> php";
  $str1 = strip_tags($str1);
  add($str1);
  $strArr = explode(' ', $str1);
  foreach($strArr as $s){
    add($s);
  }

  task('end');


  task('start');
  condition('3. Дана строка. Перемешайте символы этой строки в случайном порядке.');

  add("До: ".$str);
  $str = str_shuffle($str);
  add("После: ".$str);

  task('end');


  task('start');
  condition('4. Найдите количество дней в текущем месяце. Скрипт должен работать
  независимо от месяца, в котором он запущен.');

  $currentMonth  = date('m');
  $currentYear  = date('Y');
  $date = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
  add("Всего дней в $currentMonth месяце в $currentYear году - $date");

  task('end');

  include('./src/footer.php');
?>