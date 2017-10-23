<?php

/**
 * upMenu widget
 *
 */

namespace app\widgets\menu;

use Yii;

class upMenu extends \yii\base\Widget
{
    public $items = [];

    public function run()
    {
        return $this->render('upMenu');
    }

}