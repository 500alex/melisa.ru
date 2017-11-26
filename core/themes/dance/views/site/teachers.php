<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
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
        <div class="page-category page-category__teachers">

            <div class="page_header">
                <h3><span class="item_title_part0">our</span> <span class="item_title_part1">teachers</span> </h3>	</div>




            <?php
            $r = 1;
            foreach ($teachers as $teacher) {
                if ($r == 1){
                    echo '<div class="items-row cols-2 row-0 row-fluid">';
                }
                if ($r == 1) {
                    ?>
                    <div class="span6">
                        <div class="item column-1">

                            <!-- Icons -->

                            <!-- Intro image -->
                            <div class="item_img img-intro img-intro__left">
                                <img src="/images/teachers/<?=$teacher->img; ?>" alt=""/>
                            </div>


                            <!--  title/author -->
                            <div class="item_header">
                                <h4 class="item_title"><a href="<?=\yii\helpers\Url::to(['teachers/viewsite', 'id' => $teacher->id]); ?>"> <span
                                            class="item_title_part0"><?=$teacher->name; ?></span>
                                    </a>
                                </h4>

                            </div>


                            <!-- info TOP -->


                            <!-- Introtext -->
                            <div class="item_introtext">
                                <p><?=$teacher->minidescription; ?></p>
                            </div>

                            <!-- info BOTTOM -->

                            <!-- More -->

                        </div><!-- end item -->
                    </div><!-- end spann -->
                    <?php
                $r++;
                } else {
                $r = 1;
                    ?>
                    <div class="span6">
                        <div class="item column-2">
        
                            <!-- Icons -->
        
                            <!-- Intro image -->
                            <div class="item_img img-intro img-intro__left">
                                <img src="/images/teachers/<?=$teacher->img; ?>" alt=""/>
                            </div>
        
        
                            <!--  title/author -->
                            <div class="item_header">
                                <h4 class="item_title"><a href="<?=\yii\helpers\Url::to(['teachers/viewsite', 'id' => $teacher->id]); ?>"> <span
                                            class="item_title_part0"><?=$teacher->name; ?></span>
                                    </a>
                                </h4>

                            </div>
        
        
                            <!-- info TOP -->
        
        
                            <!-- Introtext -->
                            <div class="item_introtext">
                                <p><?=$teacher->minidescription; ?></p>
                            </div>
        
                            <!-- info BOTTOM -->
        
                            <!-- More -->
        
                        </div><!-- end item -->
                    </div><!-- end spann -->
        
                </div><!-- end row -->
                <?php
                }
            }
            ?>
        </div>


        <!-- Content-bottom -->
    </div>

    <!-- Right sidebar -->
</div>