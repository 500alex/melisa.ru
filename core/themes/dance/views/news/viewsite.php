<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

?>
<div class="content-inner row">

    <!-- Left sidebar -->

    <div id="component" class="span8">
        <!-- Breadcrumbs -->

        <!-- Content-top -->


        <div id="system-message-container">
            <div id="system-message">
            </div>
        </div>
        <div class="page-item page-item__blog page-item__">

            <div class="page-header">
                <h3>
                    <span class="item_title_part0">Blog</span>
                </h3>
            </div>

            <div class="item_published">
                <?=date('d.m.Y', $model->time); ?>
            </div>

            <div class="item_header">
                <h4 class="item_title">
                    <span class="item_title_part0"><?=$model->name; ?></span>
                </h4>
            </div>



            <div class="item_info">
                <dl class="item_info_dl">
                    <!-- <dt class="article-info-term"></dt> -->
                    <dd>
                        <div class="item_category-name">
                            Category: <?=(\app\models\NewsCategory::find()->where(['id' => $model->category])->one())->mininame; ?>
                        </div>
                    </dd>

                    <dd>
                        <div class="item_createdby">
                            Written by <?=(\app\models\NewsWritten::find()->where(['id' => $model->written])->one())->name; ?>
                        </div>
                    </dd>
                </dl>
            </div>


            <div class="item_img img-full img-full__none item-image">
                <img src="/images/news/<?=$model->img; ?>" alt="" />
            </div>

            <div class="item_fulltext">
                <?=$model->description; ?>
            </div>

            <!-- Pagination -->
        </div>


        <!-- Content-bottom -->
    </div>

  <!-- Right sidebar -->
  <div id="aside-right" class="span4">
    <div class="row">
      <aside>
        <div class="moduletable   span4">
          <h3 class="moduleTitle ">Categories</h3>
          <ul class="categories-module">
            <?php
            foreach ($categorys as $category) {
              ?>
              <li>
                <a href="<?=\yii\helpers\Url::to(['/site/news', 'category' => $category->id])?>">
                  <?=$category->name?>
                </a>
              </li>
              <?php
            }
            ?>
          </ul>
        </div>
        <div class="moduletable recent_posts  span4">
          <h3 class="moduleTitle ">recent posts</h3>
          <div class="mod-newsflash-adv mod-newsflash-adv__recent_posts">

            <?php
            /**
             * @var $lastNew \app\models\DanceNews
             */
            foreach ($lastNews as $lastNew) {
              ?>
              <div class="item item_num0 item__module ">

                <!-- Intro Image -->

                <div class="item_content">

                  <div class="item_published">
                    <?=date('d.m.Y', $lastNew->time)?>
                  </div>
                  <!-- Item title -->
                  <h4 class="item_title item_title__recent_posts">
                    <a href="<?=\yii\helpers\Url::to(['news/viewsite', 'id' => $lastNew->id])?>">
                      <?=$lastNew->name?>
                    </a>
                  </h4>

                  <!-- Introtext -->
                  <div class="item_introtext">
                    <p>
                      <?=$lastNew->minidescription?>
                    </p>
                  </div>

                  <!-- Read More link -->
                </div>

                <div class="clearfix"></div>
              </div>

              <?php
            }
            ?>


            <div class="clearfix"></div>

          </div>
        </div>
      </aside>
    </div>
  </div>
</div>