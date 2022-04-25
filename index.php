<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!--meta http-equiv="refresh" content="2"-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Тестовое задание по PHP. Сафронов П. - Аспро</title>
  <style>
    pre{
      white-space: normal;
    }
  </style>
</head>

<body>
  <p>Присвойте переменной $title значение «Задание 1»</p>
  <p>Выведите значение этой переменной используя echo, print_r(), var_dump()</p>
  <pre>
    <?php
    $title = "Задание  1";
    echo $title;
    print_r($title);
    var_dump($title);
    ?>
  </pre>
  <p>Выведите значение этой переменной с произвольной строкой, используя метод интерполяции.</p>
  <pre>
    <?php
    echo "Начинаем выполнять задание $title";
    echo "Пытаемся выполнить ", $title, ", идём к успеху!";
    ?>
  </pre>
</body>

</html>