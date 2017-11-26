<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\History */


?>
<div class="history-view">

    <div class="page-item page-item__history">


        <div class="item_header">
            <h3 class="item_title">
                <span class="item_title_part0"><?=$model->year; ?></span>
            </h3>
        </div>

        <div class="item_fulltext"><p>
                <?=$model->description; ?>
            </p></div>
    </div>

</div>
