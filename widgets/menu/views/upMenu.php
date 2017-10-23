<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
?>


<?php

NavBar::begin([
    'brandLabel' => '&nbsp;',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'id' => 'menu',
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-center'],
    'items' => [
        [
            'label' => 'Наши объекты',
        // 'url' => ['#']
        ],
        [
            'label' => 'Клиентам',
            'items' => [
                [
                    'label' => 'Как это работает',
                ],
                [
                    'label' => 'Безопасность',
                ],
                [
                    'label' => 'FAQ',
                ],
                [
                    'label' => 'Продать недвижимость',
                ],
            ]
        ],
        [
            'label' => 'О нас',
            'options' => ['class' => 'hidden-sm'],
            'items' => [
                [
                    'label' => 'О нас',
                ],
                [
                    'label' => 'Карьера',
                ],
                [
                    'label' => 'Контакты',
                ],
            ]
        ],
        [
            'label' => 'Блог',
            'options' => ['class' => 'hidden-sm'],
            'url' => ['#'],
            'items' => [
                [
                    'label' => 'Тренды рынка',
                ],
                [
                    'label' => 'Ликбез',
                ],
                [
                    'label' => 'Новости компании',
                ],
                [
                    'label' => 'СМИ о нас',
                ],
            ]
        ],
        [
            'label' => 'Клуб Liberty',
            'options' => ['class' => 'club_menu'],
        ],
    ],
]);


echo Nav::widget([
    'encodeLabels' => false,
    'options' => [
        'class' => 'navbar-nav navbar-right'
    ],
    'items' => [
        [
            'label' => '<span class="in">8-800-500-64-64</span><br><span class="info">звонок по России бесплатный</span>',
            'options' => ['class' => 'menu_phone'],
            'url' => null,
            'linkOptions' => [
                'href' => 'tel:88005006464',
            ]
        ],
        [
            'label' => 'Регистрация',
            'options' => ['class' => 'button_3'],
        ],
        Yii::$app->user->isGuest ? (
            [
                'label' => 'Вход',
                'options' => ['class' => 'button_4'],
            ]
            ) : (
            '<li>'
            .Html::beginForm(['/site/logout'], 'post')
            .Html::submitButton(
                'Logout ('.Yii::$app->user->identity->username.')', ['class' => 'btn btn-link logout']
            )
            .Html::endForm()
            .'</li>'
            ),
    ],
]);
NavBar::end();
?>



<?php

// menu scrolled
$this->registerJs("
    (function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>0 && !$('#upMenu').hasClass('scrolled')){
                $('#upMenu').addClass('scrolled');
            } 
            if($(this).scrollTop()==0 && $('#upMenu').hasClass('scrolled')){
                $('#upMenu').removeClass('scrolled');
            } 
        });
        
        $('#upMenu').on('click', '.menu_call', function (e) {
            $('html, body').animate({scrollTop: $('#container').offset().top + 'px'});
            return false;
        });
        
    })( jQuery );
", yii\web\View::POS_END);
?>

