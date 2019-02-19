<?php $exName = 'ДЗ2';

require (__DIR__.'/src/functions.php');
?>

<!doctype html>

<html lang="ru">
<head>
  <meta charset="utf-8">

  <title>LoftSchool <?php echo $exName ?>. Вакуленко Юрий. vakulenkoyura211@gmail.com</title>
  <meta name="description" content="">
  <meta name="author" content="Вакуленко Юрий. vakulenkoyura211@gmail.com">

</head>


<body>
  <h1>Домашнее задание <?php echo $exName ?></h1>
  <h4>Вакуленко Юрий. vakulenkoyura211@gmail.com</h4>
    
    <h3>Задание #1</h3>    
    <?php 

    echo task1([
        'string 1',
        'string 2',
        'string 3',
        'string 4'
    ]);

    echo task1([
        'string single1',
        'string single2',
        'string single3',
        'string single4'
    ], true );    
    ?>
    
    
    <h3>Задание #2</h3>
    <p><?php     
    $d1 = 1; $d2 = 2; $d3 = 3; $d4 = 5.2;    
    echo 'Числа: '. $d1 . ' | '. $d2 . ' | ' . $d3 . ' | ' . $d4 . ' | ';
     ?></p>
    <p><?php echo '<b>+</b> &nbsp;&nbsp; '. task2('+', $d1, $d2, $d3, $d4); ?></p>
    <p><?php echo '<b>-</b> &nbsp;&nbsp; '. task2('-', $d1, $d2, $d3, $d4); ?></p>
    <p><?php echo '<b>*</b> &nbsp;&nbsp; '. task2('*', $d1, $d2, $d3, $d4); ?></p>
    <p><?php echo '<b>/</b> &nbsp;&nbsp; '. task2('/', $d1, $d2, $d3, $d4); ?></p>

    
    <h3>Задание #3</h3>
    <?php echo task3(4, 2); ?>
    

    
    <h3>Задание #4</h3>   
    <p><?php echo 'Дата: '.date('d.m.Y H:i'); ?></p>
    <p><?php echo 'Дата UNIX 24.02.2016 00:00:00: '.strtotime('24.02.2016 00:00:00'); ?></p>
    


    
    <h3>Задание #5</h3>
    <?php 
    $str1 = 'Карл у Клары украл Кораллы';
    $str2 = 'Две бутылки лимонада';
    echo str_replace('К', '', $str1).'<br>';
    echo str_replace('Две', 'Три великие вкуснейшие', $str2).'<br>';
    ?>


    
    <h3>Задание #6</h3>
    <?php
    $file = 'test.txt';
    file_put_contents(__DIR__.'/src/'.$file, 'Hello again!');
    ?>    
    <p><?php echo task6($file); ?></p>
    
    

</body>
</html>