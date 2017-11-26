<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Teachers */
?>
<div class="content-inner row">

    <!-- Left sidebar -->

    <div id="component" class="span12">
        <!-- Breadcrumbs -->

        <!-- Content-top -->


        <div id="system-message-container">
            <div id="system-message">
            </div>
        </div>
        <div class="page-item page-item__teachers">


            <div class="item_header">
                <h3 class="item_title">
                    <span class="item_title_part0"><?=$model->name; ?></span>
                </h3>
            </div>

            <div class="item_img img-full img-full__left item-image">
                <img src="/images/teachers/<?=$model->img; ?>" alt=""/>
            </div>

            <div class="item_fulltext">
                <?=$model->description; ?>
            </div>

            <!-- Pagination -->
        </div>


        <!-- Content-bottom -->
    </div>

    <!-- Right sidebar -->
</div>