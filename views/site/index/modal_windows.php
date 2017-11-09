<?php

/* Modal windows */
use yii\bootstrap\Modal;

?>

<?php 
    Modal::begin([       
        'id'=>'nom-1-modal',
        'header' => '<div class="mycontainer"><div class="myheader"><h2>Рецепты Юлии Высоцкой</h2></div></div>',
        'options' => ['class' => 'modal_1 fade'],
    ]);

    echo $this->render('/site/modal/1_modal');

    Modal::end(); 
?>
