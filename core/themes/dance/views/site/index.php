<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="moduletable top_blocks  span12">
    <h1 class="moduleTitle ">we use a variety of techniques to make class fun for our students!</h1>
    <div class="mod-newsflash-adv mod-newsflash-adv__top_blocks">
        <div class="row">
            <?php
            foreach ($topBlocks as $topBlock){
            ?>
            <div class="span4 item item_num0 item__module  ">
                <div class="item_img img-intro img-intro__none">
                    <a href="<?=$topBlock->url?>">
                        <img src="/images/top_blocks/<?=$topBlock->img?>" alt=""/>
                    </a>
                </div>
                <div class="item_content">
                    <h2 class="item_title item_title__top_blocks">
                        <span class="item_title_part0"><?=$topBlock->name?></span>
                    </h2>
                    <div class="item_introtext">
                        <p>
                            <span class="black">
                                <?=$topBlock->description?>
                            </span>
                        </p>
                    </div>

                    <a class="btn btn-info readmore" href="<?=$topBlock->url?>">
                        <span>Далее</span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
