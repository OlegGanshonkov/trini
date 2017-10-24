<?php

/* Modal windows */
use yii\bootstrap\Modal;

?>

<?php 
    Modal::begin([       
        'id'=>'nom-1-modal',
    ]);

    echo $this->render('/site/modal/1_modal');

    Modal::end(); 
?>
