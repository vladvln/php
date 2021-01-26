<?php
$goods = [
    [
        'id' => 1,
        'title' => 'Флейта',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Гитара',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Барабан',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];

$items = [
    [
        'title' => 'Телефон',
        'price' => 100000,
        'count' => 4
    ],
    [
        'title' => 'Часы',
        'price' => 500000,
        'count' => 2
    ],
    [
        'title' => 'Кольцо',
        'price' => 80000,
        'count' => 10
    ],
    [
        'title' => 'Браслет',
        'price' => 120000,
        'count' => 7
    ],
    [
        'title' => 'Галстук',
        'price' => 8000,
        'count' => 50
    ],
];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Homework_1</title>
</head>
<body>
    <h1>Задание 1</h1>
    <section>
        <div class="content">
            <?php foreach ($goods as $instr): ?>
                <div class="goods">
                    <h2><?php echo $instr['title'] ?></h2>
                    <div>
                        <img src="/homeworks1/img/<?php echo $instr['img']?>">
                    </div>
                    <div class="info">
                        <h3>Стоимость: <?php echo $instr['price']?> руб</h3>
                    </div>
                    <a href="instrument.php?id=<?php echo $instr['id'] ?>">Подробнее</a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="table">
            <table>
                <caption>Описание</caption>
                <tr>
                    <td>Инструмент</td>
                    <td>Цвет</td>
                    <td>Материал</td>
                </tr>
                <?php foreach ($goods as $instr): ?>
                    <tr>
                        <td><?php echo $instr['title'] ?></td>
                        <td><?php echo $instr['description']['color'] ?></td>
                        <td><?php echo $instr['description']['material'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>

    <h1>Задание 2</h1>
    <section>
        <?php
            var_dump($items);
            $keys = array_column($items, 'price');
            array_multisort($keys, SORT_ASC, $items);
            var_dump($items);
        ?>
    </section>

    <h1>Задание 3</h1>
    <section>
        <?php
            $x = 40;
            $y = 500;
            $days = 0;
            $dist = 0;
            while ($dist <= $y){
                $days++;
                $x *= 1.1;
                $dist += $x;
            }
            var_dump($days);
        ?>
    </section>
</body>
</html>
