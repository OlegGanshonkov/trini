<?php
/* @var $this yii\web\View */

$arr = [];
$arr[] = [
    'name' => 'Михаил<br>Вайсман',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];

$arr[] = [
    'name' => 'Дмитрий Старков',
    'position' => 'PM',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Екатерина Колесникова',
    'position' => 'iOS',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Андрей Хитрый',
    'position' => 'Android',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Владислав Чугункин',
    'position' => 'iOS',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Игорь Тюкавкин',
    'position' => 'iOS',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Владимир Барабаш',
    'position' => 'Backend / Frontend',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Оксана Покровская',
    'position' => 'Android',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Максим Железный',
    'position' => 'QA',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Ирина Джиоева',
    'position' => 'PM',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Рида Хасанова',
    'position' => 'Design',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Кирилл Рак',
    'position' => 'PM',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Андрей Зайцев',
    'position' => 'QA',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Игорь Ямушев',
    'position' => 'Android',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Дарья Горчакова',
    'position' => 'PR',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Евгений Калинин',
    'position' => 'Backend',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Роман Голышков',
    'position' => 'Design',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Владимир Зуев',
    'position' => 'PM',
    'img' => '/img/site/index/team/default.png',
];

?>


<section class="team">
    <div class="container">
        <div class="right">
            <a href="#">Вакансии <img src="/img/site/index/team/arr-right.png" /></a>
        </div>
        <h2>Команда</h2>
    </div>

    <div class="items">
        <?php foreach ($arr as $key => $item): ?> 
            <div class="item">
                <div class="in">
                    <div class="img"><?php if ($item['img']): ?><img src="<?= $item['img']; ?>" /><?php endif; ?></div>
                    <div class="name"><?= $item['name']; ?></div>
                    <div class="position"><?= $item['position']; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>