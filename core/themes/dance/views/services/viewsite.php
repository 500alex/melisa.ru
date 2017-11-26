<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Services */

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
        <div class="page-item page-item__gallery page-item__">


            <div class="item_header">
                <h3 class="item_title">
                    <span class="item_title_part0">
                        <?=$model->title; ?>
                    </span>
                </h3>
            </div>







            <!-- Article Image -->

            <div class="page-gallery_img">
                <div class="item_img img-full img-full__left span5">
                    <a class="touchGalleryLink zoom" href="/images/services/<?=$model->img; ?>">
                        <span class="zoom-bg"></span>
                        <span class="zoom-icon"></span>
                        <img
                            src="/images/services/<?=$model->img; ?>" alt=""/>
                    </a>
                </div>
            </div>



            <div class="item_fulltext">
                <?=$model->description; ?>
            </div>


        </div>


        <!-- Content-bottom -->
    </div>

    <!-- Right sidebar -->
</div>
