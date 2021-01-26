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

$get = $_GET;
$id = $get['id'];
$instr = $goods[$id - 1];;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $instr['title']?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="main-content">
            <h2><?php echo $instr['title']?></h2>
            <div>
                <img src="/homeworks1/img/<?php echo $instr['img'] ?>">
            </div>
            <div class="info">
                <h3>Стоимость: <?php echo $instr['price']?> руб</h3>
                <p>Описание инструмента</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet, at commodi deserunt eaque earum et exercitationem
                    harum inventore ipsa iure maxime necessitatibus nobis quia,
                    repellat ut. Minima, quos reiciendis? Dolorem.
                </p>
                <p>Цвет: <?php echo $instr['description']['color']?></p>
                <P>Материал: <?php echo $instr['description']['material']?></P>
            </div>
            <div>
                <a href="#">Купить</a>
            </div>
        </div>
</body>
</html>
