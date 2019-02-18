<!doctype html>

<html lang="ru">
<head>
  <meta charset="utf-8">

  <title>LoftSchool ДЗ1. Вакуленко Юрий. vakulenkoyura211@gmail.com</title>
  <meta name="description" content="">
  <meta name="author" content="Вакуленко Юрий. vakulenkoyura211@gmail.com">

</head>


<body>
  <h1>Домашнее задание №1</h1>
  <h4>Вакуленко Юрий. vakulenkoyura211@gmail.com</h4>
    
    <h3>Задание #1</h3>    
    <?php   

    $name = 'Yura Vakulenko';
    $age = '31';
    ?>
    <p><?php echo 'Меня зовут '.$name; ?></p>
    <p><?php echo 'Мне '.$age.' годиков-годков-годочков'; ?></p>
    <p><?php echo '" ! | / \\ \' " \\'; ?></p>

    
    <h3>Задание #2</h3>    
    <?php
    const EX2_TOTAL_ARTS = 80;
    const EX2_ARTS_FELT_PEN = 23;
    const EX2_ARTS_PENCIL = 40;
    ?>
    <p><?php
    echo 'Общее кол-во рисунков '.EX2_TOTAL_ARTS.
    ' - (рис фломастерами '.EX2_ARTS_FELT_PEN.
    ' + рис карандошом '.EX2_ARTS_PENCIL.
    ')  = ' .(EX2_TOTAL_ARTS - (EX2_ARTS_FELT_PEN + EX2_ARTS_PENCIL));        
    ?>        
    </p>

    
    <h3>Задание #3</h3>
    <?php $age = rand(1,110); ?>
    <p><?php echo 'Ваш возраст: '.$age.'. ' ?></p>
    <p><?php
        if ( $age >= 1 && $age <= 100 ) {
            if ($age >= 1 && $age <= 17) {
                echo 'Вам еще рано работать, подучись вначале!';
            } else if ($age >= 18 && $age <= 65) {
                echo 'Вам еще работать и работать. Ишь какой.. отдыхать он собрался.';
            } else if ($age > 65) {
                echo 'Вам пора на пенсию. Песок сыпится.';
            }
            
        } else {
            echo 'Неизвестный возраст. Мой суперкомпьютер не может просканировать тебя.';
        } ?>        
    </p>

    
    <h3>Задание #4</h3>    
    <?php $day = rand(1,13);  ?>
    <p><?php echo 'День: '.$day.'. ' ?></p>
    <p>
        <?php
        switch ($day) {            
            case 1:
                echo 'Это рабочий день';
                break;
            case 2:
                echo 'Это рабочий день';
                break;
            case 3:
                echo 'Это рабочий день';
                break;
            case 4:
                echo 'Это рабочий день';
                break;
            case 5:
                echo 'Это рабочий день';
                break;
            case 6:
                echo 'Это выходной день';
                break;
            case 7:
                echo 'Это выходной день';
                break;            
     

            default:
                echo 'Неизвестный день';
                break;       
        }
        ?>
    </p>


    
    <h3>Задание #5</h3>
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
    $cars = [
      'bmw' => $bmw,
      'toyota' => $toyota,  
      'opel' => $opel
    ];    
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


    
    <h3>Задание #6</h3>
    
    <?php $rows = $cols = range(1, 10); ?>
    <table>
        <thead>
            <th></th>
            <?php foreach ($rows as $row) { ?>
                <th><b><?php echo $row ?></b></th>
            <?php } ?>
        </thead>
        <tbody>
            <?php foreach ($cols as $coli => $col) { ?>
                <tr>
                    <td><b><?php echo $col ?></b></td>
                    <?php for ($i=0; $i < count($rows) ; $i++) {
                        $res =  $rows[$i] * $col;
                        if ($rows[$i]%2 === 0 && $col%2 ===0) {
                            $res = '('.$res.')';
                        } 
                        else if ($rows[$i]%2 === 1 && $col%2 ===1) {
                            $res = '['.$res.']';
                        }
                        ?>
                        <td><?php echo $res ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    

</body>
</html>