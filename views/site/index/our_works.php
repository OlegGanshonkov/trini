<?php
/* @var $this yii\web\View */

$arr = [];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-chop.png',
    'title' => 'Chop-Chop',
    'info' => 'Всероссийская сеть барбершопов',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" />',
    'bg' => '/img/site/index/our_works/bg-chop.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-julia.png',
    'title' => 'Рецепты Юлии Высоцкой',
    'info' => '1500 рецептов со всего света.',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" />',
    'bg' => '/img/site/index/our_works/bg-julia.png',
    'target' => '#nom-1-modal',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-find-face.png',
    'title' => 'FindFace',
    'info' => 'Ага, оно самое',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" /><img class="android" src="/img/site/index/our_works/android.png" />',
    'bg' => '/img/site/index/our_works/bg-find-face.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-foodmap.png',
    'title' => 'FoodMap',
    'info' => 'Найди где отравиться',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" /><img class="android" src="/img/site/index/our_works/android.png" />',
    'bg' => '/img/site/index/our_works/bg-foodmap.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-troitsky.png',
    'title' => 'Подкасты Артемия Троицкого',
    'info' => 'Подкасты. Троицкого. Артемия.',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" />',
    'bg' => '/img/site/index/our_works/bg-troitsky.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-lilu.png',
    'title' => 'Lilu',
    'info' => 'Моментальная доставка еды.',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" />',
    'bg' => '/img/site/index/our_works/bg-lilu.png',
    'target' => '',
];


$arr[] = [
    'img' => '/img/site/index/our_works/ic-whisky-way.png',
    'title' => 'WhiskyWay',
    'info' => 'Покажи-ка мне путь в следующий виски-бар. А зачем - не спрашивай.',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" />',
    'bg' => '/img/site/index/our_works/bg-whisky-way.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-car-fix.png',
    'title' => 'CarFix',
    'info' => 'Агрегатор автосервисов',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" />',
    'bg' => '/img/site/index/our_works/bg-car-fix.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-tutor.png',
    'title' => 'Репетитор по математике',
    'info' => 'Приложение для подготовки к экзаменам ЕГЭ, ОГЭ и ВПР',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" /><img class="android" src="/img/site/index/our_works/android.png" />',
    'bg' => '/img/site/index/our_works/bg-tutor.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-look-me-up.png',
    'title' => 'LookMeUp',
    'info' => 'Знакомства с использованием геопозиции',
    'type' => '<img class="android" src="/img/site/index/our_works/android.png" />',
    'bg' => '/img/site/index/our_works/bg-look-me-up.png',
    'target' => '',
];
$arr[] = [
    'img' => '/img/site/index/our_works/ic-nespresso.png',
    'title' => 'Nespresso',
    'info' => 'Стихи. Слушайте стихи. Читайте стихи. Любите стихи. Или не стихи.',
    'type' => '<img class="apple" src="/img/site/index/our_works/apple.png" />',
    'bg' => '/img/site/index/our_works/bg-nespresso.png',
    'target' => '',
];
$arr[] = [
    'img' => '',
    'title' => '... и многие, многие другие.',
    'info' => 'Полный список здесь.',
    'type' => '',
    'bg' => '/img/site/index/our_works/bg-other.png',
    'target' => '',
];
?>


<section class="our_works">
    <div class="container">
        <h2>Наши <br>работы <img src="/img/site/index/our_works/apple_big.png" /> <img src="/img/site/index/our_works/robot_big.png" /></h2>
    </div>

    <div class="items size_1920">
        <?php $i = 0; ?>
        <div class="items_row">
            <?php foreach ($arr as $key => $item): ?> 
                <div class="item" style="background-image: url('<?= $item['bg']; ?>');" <?php if ($item['target']): ?> data-toggle="modal" data-target="<?= $item['target']; ?>"<?php endif; ?>>
                    <div class="in">
                        <div class="img"><?php if ($item['img']): ?><img src="<?= $item['img']; ?>" /><?php endif; ?></div>
                        <div class="title"><?= $item['title']; ?></div>
                        <div class="info"><?= $item['info']; ?></div>
                        <div class="type"><?= $item['type']; ?></div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php if ($i == 6): ?>
                </div><div class="items_row">
                <?php endif; ?>
                <?php if (!isset($arr[$key + 1])): ?>
                </div>
                <?php $i = 0; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="items size_1280">
        <?php $i = 0; ?>
        <div class="items_row">
            <?php foreach ($arr as $key => $item): ?> 
                <div class="item" style="background-image: url('<?= $item['bg']; ?>');" <?php if ($item['target']): ?> data-toggle="modal" data-target="<?= $item['target']; ?>"<?php endif; ?>>
                    <div class="in">
                        <div class="img"><?php if ($item['img']): ?><img src="<?= $item['img']; ?>" /><?php endif; ?></div>
                        <div class="title"><?= $item['title']; ?></div>
                        <div class="info"><?= $item['info']; ?></div>
                        <div class="type"><?= $item['type']; ?></div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php if ($i == 4 || $i == 8): ?>
                </div><div class="items_row">
                <?php endif; ?>
                <?php if (!isset($arr[$key + 1])): ?>
                </div>
                <?php $i = 0; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="items size_768">
        <?php $i = 0; ?>
        <div class="items_row">
            <?php foreach ($arr as $key => $item): ?> 
                <div class="item" style="background-image: url('<?= $item['bg']; ?>');" <?php if ($item['target']): ?> data-toggle="modal" data-target="<?= $item['target']; ?>"<?php endif; ?>>
                    <div class="in">
                        <div class="img"><?php if ($item['img']): ?><img src="<?= $item['img']; ?>" /><?php endif; ?></div>
                        <div class="title"><?= $item['title']; ?></div>
                        <div class="info"><?= $item['info']; ?></div>
                        <div class="type"><?= $item['type']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>