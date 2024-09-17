<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?
    ?>
    <h1>Задание 1</h1>
    <?
    $array = ['Кадырова', 'Нигматзянова', 'Фатыхова', 'Шамсутдинова', 'Шакирова', 'Хусаенова'];
    print_r($array);
    echo '<br>';
    echo 'Количество студентов: ' . count($array);
    echo '<br>';

    if (in_array('Сидоров', $array)) {
        echo 'Сидоров есть в списке';
    } else {
        echo 'Сидорова нет в списке';
    }

    echo '<br>';

    $expelled = array_pop($array);
    echo 'Удалена фамилия ' . $expelled . '<br> <br>'; ?>

    <h1>Задание 2</h1>
    <? $array2 = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];

    asort($array2);
    foreach ($array2 as $arr => $surname) {
        echo "$arr : $surname";
        echo '<br>';
    }
    echo '<br>'; ?>


    <h1>Задание 3</h1>
    <? $student = [
        'name' => 'Raniya',
        'surname' => 'Kadyrova',
        'group' => '425',
        'hobbi' => 'dance',
        'social' => ['telegram' => 'raniyshkaaa', 'insta' => 'raniyshkaaa']
    ];?>
    <p><span>Имя: </span><?echo $student['name'];?></p>
    <p><span>Фамилия: </span><?echo $student['surname'];?></p>
    <p><span>Группа: </span><?echo $student['group'];?></p>
    <p><span>Хобби: </span><?echo $student['hobbi'];?></p>
    <p><span>Соцсети: </span>телеграм - <?echo $student['social']['telegram']. ', инста - '. $student['social']['insta'];?></p>

</body>

</html>