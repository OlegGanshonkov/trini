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
        'class' => 'navbar-inverse navbar-fixed-top brand',
        'onclick' => "",
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-left'],
    'items' => [
        [
            'label' => 'Работы',
            'url' => ['/#our_works']
        ],
        [
            'label' => 'Platforma',
            'url' => ['/#platforma']
        ],
        [
            'label' => 'Команда',
            'url' => ['/#team']
        ],
        [
            'label' => 'Контакты',
            'url' => ['/#contacts']
        ],
        
    ],
]);

NavBar::end();
?>
<div class="navbarFixMargin"></div>


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
        
    })( jQuery );
", yii\web\View::POS_END);
?>

