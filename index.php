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
  add("До: {$str}");
  $strArr = explode(' ', $str);
  foreach($strArr as &$s) $s = ucfirst($s);
  $str = implode(' ', $strArr);
  add("После: {$str}");

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

  add("До: {$str}");
  $str = str_shuffle($str);
  add("После: {$str}");

  task('end');


  task('start');
  condition('4. Найдите количество дней в текущем месяце. Скрипт должен работать
  независимо от месяца, в котором он запущен.');

  $currentMonth  = date('m');
  $currentYear  = date('Y');
  $date = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
  add("Всего дней в $currentMonth месяце в $currentYear году - $date");

  task('end');


  task('start');
  condition('5. Выведите текущую дату-время в форматах
  \'2025-12-31\', \'31.12.2025\', \'31.12.13\', \'12:59:59\', timestamp.');

  add(date("Y-m-j"));
  add(date("j.m.Y"));
  add(date("j.m.y"));
  add(date("H:i:s"));
  add("Прошло секунд с 1 января 1970 00:00:00 GMT - ".time());

  task('end');


  task('start');
  condition('6. В переменной $date лежит дата в формате \'2025-12-31\'. Прибавьте к этой
  дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.');

  function datePlusMinus($arg)
  {
    $plus = strtotime($arg);
    $date = date("Y-m-j", $plus);

    return add($date);
  }

  datePlusMinus('+2 days, +1 month');
  datePlusMinus('+3 days, +1 year');
  datePlusMinus('-3 days');

  task('end');


  task('start');
  condition('7. Дана строка с буквами и цифрами, например, \'1a2b3c4b5d6e7f8g9h0\'.
  Удалите из нее все цифры. То есть в нашем случае должна получится строка
  \'abcbdefgh\'.');

  $str1 = '1a2b3c4b5d6e7f8g9h0';
  add("До: {$str1}");
  $str1 = preg_replace('/\d/', '' ,$str1);
  add("После: {$str1}");

  task('end');


  task('start');
  condition('8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное
  число.');

  $arr = [4, -2, 5, 19, -130, 0, 10];
  print_r($arr);
  add(max($arr));

  task('end');


  task('start');
  condition('9. Выведите на экран случайное число от 1 до 100.');

  add(mt_rand(1,100));

  task('end');


  task('start');
  condition('10. Создайте ассоциативный массив дней недели. Ключами в нем должны
  служить номера дней от начала недели (понедельник - должен иметь ключ 1,
  вторник - 2 и т.д.). Выведите на экран текущий день недели.');

  $week = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье',
  ];
  $w = date('w');
  if ($w == 0) $w = 7;
  add($week[$w]);

  task('end');


  task('start');
  condition('11. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]].
  Найдите сумму элементов этого массива. Массив, конечно же, может быть
  произвольным.');
  
	function arrSum($arr) 
  {
		$sum = 0;
		foreach ($arr as $a) {
			if (is_array($a)) {
				$sum += arrSum($a);
			} else {
				$sum += $a;
			}
		}
		
		return $sum;
	}
  add('<b>Выполнено через рекурсию</b>');
  add('Сумма массивов в массиве [1, [2, 7, 8], [3, 4, [5, [6, 7]]]] равна '.
    arrSum([1, [2, 7, 8], [3, 4, [5, [6, 7]]]])
  );

  task('end');


  task('start');
  condition('12. Есть массив $array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то
  есть вывести без дублей при помощи лишь одного цикла и без использования
  функций PHP.');
  
  $arr = array(1,1,1,2,2,2,2,3);
  $uniqArr = array();
  foreach ($arr as $a) {
      if (!in_array($a, $uniqArr)) {
          $uniqArr[] = $a;
          add ($a);
      }
  }

  task('end');


  task('start');
  condition('13. Используя ассоциативный массив, добавить на страницу навигационное
  меню вида:
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="catalog.php">Catalog</a></li>
    <li><a href="contacts.php">Contacts</a></li>
  </ul>
  Заполните массив соблюдая сл. условия: название индексов являются именем
  файла (без расширения), на который ссылается меню; значения массива явл.
  названиями пунктов меню.
  ');
  
  $arrMenu = [
    'index' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'catalog' => 'Catalog',
    'contacts' => 'Contacts',
  ];
  function menu($arr)
  {
    echo '<ul>';
    foreach ($arr as $index => $name) {
      echo "<li><a href=\"{$index}.php\">{$name}</a></li>";
    }
    echo '</ul>';
  }
  menu($arrMenu);

  task('end');

  include('./src/footer.php');
?>