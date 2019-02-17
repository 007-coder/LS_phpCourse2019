<!doctype html>

<html lang="ru">
<head>
  <meta charset="utf-8">

  <title>LoftSchool ДЗ1. Вакуленко Юрий. vakulenkoyura211@gmail.com</title>
  <meta name="description" content="">
  <meta name="author" content="Вакуленко Юрий. vakulenkoyura211@gmail.com">
    
    <?php /* ?>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <?php */?>

</head>

<?php 
function inRange($val, $min, $max) {
    return ($val >= $min && $val <= $max);
} ?>

<body>
  <h1>Домашнее задание №1</h1>
  <h4>Вакуленко Юрий. vakulenkoyura211@gmail.com</h4>
    
    <p><b>Задание #1</b></p>
    <ol>
        <li>Создайте переменную $name и присвойте ей строковое значение содержащее Ваше имя</li>
        <li>Создайте переменную $age и присвойте ей строковое значение содержащее Ваш возраст</li>
        <li>Выведите с помощью echo (или print) фразу “Меня зовут: ваше_имя” например: “Меня зовут: Игорь"</li>
        <li>Выведите фразу “Мне ваш_возраст лет”, например: “Мне 99 лет”</li>
        <li>Выведите следующий набор символов, включая кавычки - “!|\/’”\ (двойная кавычка, воскл. знак, вертикальная черта, обратный слэш, слэш, кавычка, двойная кавычка, обратный слэш)</li>
        <li>Каждая фраза должна начинаться с новой строки</li>
    </ol>

    <h4>Решение</h4>
    <?php    
    $name = 'Yura Vakulenko';
    $age = '31';
    ?>
    <p><?php echo 'Меня зовут '.$name; ?></p>
    <p><?php echo 'Мне '.$age.' годиков-годков-годочков'; ?></p>
    <p><?php echo '" ! | / \\ \' " \\'; ?></p>


    <p><b>Задание #2</b></p>
    <ol>
        <li>Дана задача: На школьной выставке 80 рисунков. 23 из них выполнены
фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?</li>
        <li>Описать и вывести условия, решение этой задачи на PHP. Все предоставленные числа из пункта 1 должны быть указаны в константах.</li>  
    </ol>

    <h4>Решение</h4>
    <?php
    const EX2_TOTAL_ARTS = 80;
    const EX2_ARTS_FELT_PEN = 23;
    const EX2_ARTS_PENCIL = 40;
    ?>
    <p><?php
    echo 'Общее кол-во рисунков '.(int)EX2_TOTAL_ARTS.' - (рис фломастерами '.EX2_ARTS_FELT_PEN.' + рис карандошом '.EX2_ARTS_PENCIL.')  = ' . (EX2_TOTAL_ARTS - (EX2_ARTS_FELT_PEN + EX2_ARTS_PENCIL));        
    ?>        
    </p>

    <p><b>Задание #3</b></p>
    <ol>
        <li>Создайте переменную $age</li> 
        <li>Присвойте переменной $age произвольное числовое значение</li> 
        <li>Напишите конструкцию if, которая выводит фразу: “Вам еще работать и
работать” при условии что значение переменной $age попадает в диапазон чисел от 18 до 65 (включительно)</li> 
        <li>Расширьте конструкцию if, выводя фразу: “Вам пора на пенсию” при условии, что значение переменной $age больше 65</li> 
        <li>Расширьте конструкцию elseif, выводя фразу: “Вам ещё рано работать”
при условии, что значение переменной $age попадает в диапазон чисел от 1 до 17 (включительно)</li> 
        <li>Дополните конструкцию ifelseif, выводя фразу: “Неизвестный возраст” при условии, что значение переменной $age не попадет в вышеописанные диапазоны чисел</li>         
    </ol>

    <h4>Решение</h4>
    <?php
    $age = (int)rand(1,110);    
    $messages = [
        'need_work' => 'Вам еще работать и работать. Ишь какой.. отдыхать он собрался.',
        'go_sleep' => 'Вам пора на пенсию. Песок сыпится.',
        'too_young' => 'Вам еще рано работать, подучись вначале!',
        'nan' => 'Неизвестный возраст. Мой суперкомпьютер не может просканировать тебя.'
    ];
    ?>
    <p><?php echo 'Ваш возраст: '.$age.'. ' ?></p>
    <p><?php
        if (!inRange($age, 1, 100)) {
            echo $messages['nan'];
        } else {
            if (inRange($age, 1, 17)) {
                echo $messages['too_young'];
            } else if (inRange($age, 18, 65)) {
                echo $messages['need_work'];
            } else if ($age > 65) {
                echo $messages['go_sleep'];
            }
        } ?>        
    </p>

    <p><b>Задание #4</b></p>
    <ol>
        <li>Создайте переменную $day и присвойте ей произвольное числовое значение</li>       
        <li>С помощью конструкции switch выведите фразу “Это рабочий день”,
если значение переменной $day попадает в диапазон чисел от 1 до 5 (включительно)

        </li>       
        <li>Выведите фразу “Это выходной день”, если значение переменной $day
равно числам 6 или 7</li>       
        <li>Выведите фразу “Неизвестный день”, если значение переменной $day не
попадает в диапазон чисел от 1 до 7 (включительно)</li>       
    </ol>

    <h4>Решение</h4>
    <?php $day = (int)rand(1,13);  ?>
    <p><?php echo 'День: '.$day.'. ' ?></p>
    <p>
        <?php 
        $dayType = 'unknown';
        if (inRange($day, 1, 5)) {
            $dayType = 'work';
        } else if (inRange($day, 6, 7)) {
            $dayType = 'weekend';
        }

        switch ($dayType) {
            case 'unknown':
                echo 'Неизвестный день';
                break;
            case 'work':
                echo 'Это рабочий день';
                break;
            case 'weekend':
                echo 'Это выходной день';
                break;            
        }
        ?>
    </p>


    <p><b>Задание #5</b></p>
    <ol>
        <li>Создайте массив $bmw с ячейками: model, speed, doors, year</li>
        <li>Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”</li>
        <li>Создайте массивы $toyota и $opel аналогичные массиву $bmw (заполните данными)</li>
        <li>Объедините три массива в один многомерный массив</li>              
        <li> Выведите значения всех трех массивов в виде</li>
    </ol>

    <h4>Решение</h4>
    <?php 
    $bmw = [
        'model' => 'X5',
        'speed' => '120',
        'doors' => '5',
        'year' => '2015'
    ];
    $toyota = [
        'model' => 'X2',
        'speed' => '140',
        'doors' => '4',
        'year' => '2010'
    ];
    $opel = [
        'model' => 'X7',
        'speed' => '100',
        'doors' => '2',
        'year' => '2011'
    ];
    $cars = [];
    $cars['bmw'] = $bmw; 
    $cars['toyota'] = $toyota; 
    $cars['opel'] = $opel; 
    ?>
    <table>
        <thead>
            <th>Name</th>
            <?php foreach ($bmw as $opName0 => $opValue0) { ?>
                <th><?php echo $opName0 ?></th>
            <?php } ?>            
        </thead>
        <tbody>
            <?php foreach ($cars as $car_name => $carOptions) { ?>
                <tr>
                    <td><b><?php echo $car_name ?></b></td>
                    <?php foreach ($carOptions as $opName => $opValue) { ?>
                        <td><?php echo $opValue ?></td>   
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <p><b>Задание #6</b></p>
    <ol>
        <li>Используя цикл for, выведите таблицу умножения размером 10x10. Таблица должна быть выведена с помощью HTML тега </li>
        <li>Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.</li>
        <li>Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках</li>
        <li>Во всех остальных случаях результат выводить просто числом</li>      
    </ol>

    <h4>Решение</h4>
    <?php 
    $ex_options = [
        'rows' => [            
            'start' => 1,
            'end' => 10
        ],
        'cols' => [            
            'start' => 1,
            'end' => 10
        ],
        'itemsPerRow' => 5, 
    ];
    $rows = range($ex_options['rows']['start'], $ex_options['rows']['end']);
    $cols = range($ex_options['cols']['start'], $ex_options['cols']['end']);

    
    ?>
    <table>        
        <tbody>
         <?php         
         for ($i=0; $i < (ceil(count($rows) / $ex_options['itemsPerRow'])); $i++) { ?>
             <tr>
                 <table>
                     <thead>
                        <?php for ($i0=0; $i0 < $ex_options['itemsPerRow']; $i0++) { 
                            $ri = $i0 + ($ex_options['itemsPerRow']*$i);
                            ?>
                            <th><b><?php echo $rows[$ri] ?></b></th>              
                        <?php  } ?>
                     </thead>
                     <tbody>
                        <?php for ($i1=0; $i1 < $ex_options['itemsPerRow']; $i1++) { 
                            $ri1 = $i1 + ($ex_options['itemsPerRow']*$i);
                            ?>
                            <td>
                                <?php foreach ($cols as $colVal) { 
                                    $result = $colVal*$rows[$ri1];

                                    if ($rows[$ri1] % 2 === 0 && $colVal%2 === 0 ) {
                                        $result = '('.$result.')';   
                                    } else if ($rows[$ri1] % 2 === 1 && $colVal%2 === 1) {
                                        $result = '['.$result.']';   
                                    }
                                ?>
                                    <p> <?php echo $colVal.' * '.$rows[$ri1].' = '.$result?> </p>
                                <?php } ?>                                
                            </td>              
                        <?php  } ?>                         
                     </tbody>
                 </table>
             </tr>
         <?php } ?>  
        </tbody>
    </table>  
    

</body>
</html>