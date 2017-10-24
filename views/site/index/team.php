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
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
    'img' => '/img/site/index/team/default.png',
];
$arr[] = [
    'name' => 'Михаил',
    'position' => 'CEO',
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