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
  $uniqArr = [];
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


  task('start');
  condition('14. Вывести на черном фоне n красных квадратов случайного размера в
  случайной позиции в браузере.');

  add('???');

  task('end');


  task('start');
  condition('15. Дана строка с любыми символами. Для примера пусть будет \'1234567890\'.
  Нужно разбить эту строку в массив таким образом: array(\'1\', \'23\', \'456\', \'7890\')
  и так далее пока символы в строке не закончатся');

  $str = '1234567890';
  $arr = [];

  task('end');


  task('start');
  condition('16. Найдите сумму элементов массива между двумя нулями (первым и
  последним нулями в массиве). Если двух нулей нет в массиве, то выведите
  ноль. В массиве может быть более 2х нулей. Пример массива:
  [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2]
  ');

  $arr = [1,8,0,13,76,8,7,0,22,0,2,3,2];
  //прямой цикл
  for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] == 0){
      $index1 = $i;
      break;
    } else {
      $result = null;
    }
  }
  //обратный цикл
  for ($i = count($arr) - 1; $i > 0; $i--){
    if ($arr[$i] == 0){
      $index2 = $i;
      break;
    } else {
      $result = null;
    }
  }
  //проверка на 1 символ нуля, иначе подсчет суммы
  if($index1 == $index2){
    $result = null;
  } else {
    for ($j = $index1; $j < $index2; $j++){
      $result += $arr[$j];
    }
  }
  $result == null ? add (0) : add ($result);

  task('end');


  task('start');
  condition('17. Сделайте функцию, которая будет генерировать случайный цвет в hex
  (dechex) формате (типа #ffffff).');
  
  //каждое значение случайным образом поднимается из массива
  $rand = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 
          'a', 'b', 'c', 'd', 'e', 'f'];
  $color = '#'.
            $rand[mt_rand(0,15)].
            $rand[mt_rand(0,15)].
            $rand[mt_rand(0,15)].
            $rand[mt_rand(0,15)].
            $rand[mt_rand(0,15)];
  add($color);

  task('end');


  task('start');
  condition('18. Дана строка \'332 441 550\'. Найдите все места, где есть два одинаковых
  идущих подряд цифры и замените их на \'!\'. ');

  $str = '332 441 550';
  for ($i = 0; $i < strlen($str) - 1; $i++){
    if ($str[$i] == $str[$i + 1]){
      $str[$i] = '!';
      $str[$i + 1] = '!';
    }
  }
  add($str);

  task('end');


  task('start');
  condition('19. Напишите ф-цию строгой проверки ввода номер телефона в
  международном формате (<код страны> <код города или сети> <номер
  телефона>) и упрощенной проверки ввода простого номера с кодом и без
  него. Функция должна возвращать true или false.');
  
  $phone = '+375291506253';
  if (preg_match("
      /((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/
      ", $phone)){
      add ("{$phone} - допустимый номер");
    } else {
      add ("{$phone} - недопустимый номер");
    }

  task('end');


  task('start');
  condition('20. Напишите ф-цию, которая должна проверить правильность ввода адреса
  эл. почты. Почта верна при условии:<br>
  a. весь адрес не должен содержать русские буквы и спецсимволы, кроме
  одной «собачки», знака подчеркивания, дефиса и точки, причем они не могут
  быть первыми и последними в адресе, и идти подряд, например: «..», «@.»,
  «.@» или «@@», «_@», «@-», «--» и т.п.<br>
  b. имя эл. почты (до знака @) должно быть длиной более 2 символов, причем
  имя может содержать только буквы, цифры, но не быть первыми и
  единственными в имени, и точку;<br>
  c. после последней точки и после @, домен верхнего уровня (ru, by, com и
  т.п.) не может быть длиной менее 2 и более 11 символов.');
  
  $email = 'andremarkov@icloud.com';
  if (preg_match("
      /^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,11})$/i
      ", $email)){
      add ("{$email} - допустимая почта");
    } else {
      add ("{$email} - недопустимая почта");
    }

  task('end');

  include('./src/footer.php');
?>