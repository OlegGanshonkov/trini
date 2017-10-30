<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<?= $this->render('/site/index/header') ?>
<div class="visible-xs mobile_menu">
    <?= app\widgets\menumobile\upMenu::widget(); ?>
</div>
<?= $this->render('/site/index/our_works') ?>
<?= $this->render('/site/index/platforma') ?>
<?= $this->render('/site/index/team') ?>
<?= $this->render('/site/index/contacts') ?>

<?= $this->render('/site/index/modal_windows') ?>