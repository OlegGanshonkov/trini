<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
?>

<div id="menumobile">
    <div class="col-xs-five item mobilebrand">
        <a href="/" ><img src="/img/site/menumobile/trinity.png" /></a>
    </div>
    <div class="col-xs-five item">
        <a href="/#our_works"><img src="/img/site/menumobile/works.png" /></a>
    </div>
    <div class="col-xs-five item">
        <a href="/#platforma"><img src="/img/site/menumobile/platforma.png" /></a>
    </div>
    <div class="col-xs-five item">
        <a href="/#team"><img src="/img/site/menumobile/team.png" /></a>
    </div>
    <div class="col-xs-five item">
        <a href="/#contacts"><img src="/img/site/menumobile/contacts.png" /></a>
    </div>
</div>
<div class="navbarFixMargin"></div>

<?php
// menu scrolled
$this->registerJs("
    (function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>0 && !$('#menumobile').hasClass('scrolled')){
                $('#menumobile').addClass('scrolled');
            } 
            if($(this).scrollTop()==0 && $('#menumobile').hasClass('scrolled')){
                $('#menumobile').removeClass('scrolled');
            } 
        });
        
    })( jQuery );
", yii\web\View::POS_END);
?>

