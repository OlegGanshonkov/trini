<?php

/* Modal windows */
use yii\bootstrap\Modal;

?>

<section class="modal-windows-container">
    <div class="container">
        <button class="btn-modal-view" data-toggle="modal" data-target="#nom-1-modal">Посмотреть</button>
    </div>
</section>


<?php 
    Modal::begin([       
        'id'=>'nom-1-modal',
    ]);

    echo $this->render('/site/modal/1_modal');

    Modal::end(); 
?>
