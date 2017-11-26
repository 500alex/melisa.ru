<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\History */


?>
<div class="content-inner row">

    <!-- Left sidebar -->

    <div id="component" class="span8">
<div class="history-view">

    <div class="page-item page-item__history">


        <div class="item_header">
            <h3 class="item_title">
                <span class="item_title_part0"><?=$model->title; ?></span>
            </h3>
        </div>

        <div class="item_fulltext"><p>
                <?=$model->description; ?>
            </p></div>
    </div>

</div>
</div>

<!-- Right sidebar -->
<div id="aside-right" class="span4">
    <div class="row">
        <aside>
            <div class="moduletable aside  span4"><h3 class="moduleTitle ">Search</h3><div class="mod-search mod-search__aside">
                    <form action="/joomla_46170/index.php/about-us/faqs" method="post" class="navbar-form">
                        <label for="searchword" class="element-invisible">Search...</label> <input id="searchword" name="searchword" maxlength="20"  class="inputbox mod-search_searchword" type="text" size="20" value="Search..."  onblur="if (this.value=='') this.value='Search...';" onfocus="if (this.value=='Search...') this.value='';" /><br /> <button class="btn btn-primary" onclick="this.form.searchword.focus();">Search</button>    	<input type="hidden" name="task" value="search" />
                        <input type="hidden" name="option" value="com_search" />
                        <input type="hidden" name="Itemid" value="168" />
                    </form>
                </div>
            </div>
        </aside>
    </div>
</div>
</div>