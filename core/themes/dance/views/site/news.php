<?php

/* @var $this yii\web\View */
/**
 * @var $news \app\models\DanceNews
 * @var $category \app\models\NewsCategory
 * @var $lastNews \app\models\DanceNews
 */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
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
        <div class="page-blog page-blog__">

            <div class="page_header">
                <h3><span class="item_title_part0">Blog</span> </h3>	</div>



            <?php
            foreach ($news as $new) {
                ?>

                <div class="items-row cols-1 row-0 row-fluid">
                    <div class="span12">
                        <div class="item column-1">

                            <!-- Icons -->

                            <!-- Intro image -->
                            <div class="item_img img-intro img-intro__left">
                                <img
                                    src="/images/news/<?=$new->img; ?>" alt="" width="301" />
                            </div>


                            <div class="item_published">
                                <?=date('d.m.Y', $new->time); ?>
                            </div>

                            <!--  title/author -->
                            <div class="item_header">
                                <h4 class="item_title"><a
                                        href="<?=\yii\helpers\Url::to(['news/viewsite', 'id'=>$new->id]); ?>">
                                        <span class="item_title_part0"><?=$new->name; ?></span> </a>
                                </h4>
                            </div>


                            <!-- info TOP -->
                            <div class="item_info">
                                <dl class="item_info_dl">

                                    <!-- <dt class="article-info-term">
                                                    </dt> -->
                                    <dd>
                                        <div class="item_category-name">
<!--                                            Category: <a-->
<!--                                                href="/index.php/blog-categories/blog-vivamus-luctus-lectus-sit">Laduice</a>-->
                                            Category: <?=(\app\models\NewsCategory::find()->where(['id' => $new->category])->one())->mininame; ?>
                                        </div>
                                    </dd>

                                    <dd>
                                        <div class="item_createdby">
                                            Written by <?=(\app\models\NewsWritten::find()->where(['id' => $new->written])->one())->name; ?>
                                        </div>
                                    </dd>


<!--                                    <dd>-->
<!--                                        <div class="item_hits">-->
<!--                                            Hits: 226-->
<!--                                        </div>-->
<!--                                    </dd>-->

                                </dl>
                            </div>


                            <!-- Introtext -->
                            <div class="item_introtext"><p><?=$new->minidescription?></p>
                            </div>

                            <!-- info BOTTOM -->

                            <!-- More -->
                            <a class="btn btn-info"
                               href="<?=\yii\helpers\Url::to(['news/viewsite', 'id'=>$new->id]); ?>"><span>
    Читать		</span></a>
                        </div><!-- end item -->
                    </div><!-- end spann -->

                </div><!-- end row -->
                <?php
            }
            ?>

            <!--<div class="pagination">
                <ul><li class="pagination-start"><span class="pagenav">Start</span></li><li class="pagination-prev"><span class="pagenav">Prev</span></li><li><span class="pagenav">1</span></li><li><a title="2" href="/index.php/news?start=3" class="pagenav">2</a></li><li><a title="3" href="/index.php/news?start=6" class="pagenav">3</a></li><li class="pagination-next"><a title="Next" href="/index.php/news?start=3" class="pagenav">Next</a></li><li class="pagination-end"><a title="End" href="/index.php/news?start=6" class="pagenav">End</a></li></ul> </div>-->
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
