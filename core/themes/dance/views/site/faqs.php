<div class="content-inner row">

    <!-- Left sidebar -->

    <div id="component" class="span8">
        <!-- Breadcrumbs -->

        <!-- Content-top -->


        <div id="system-message-container">
            <div id="system-message">
            </div>
        </div>
        <div class="page-category page-category__faqs">

            <div class="page_header">
                <h3><span class="item_title_part0">Frequently</span> <span class="item_title_part1">Asked</span> <span class="item_title_part2">Questions</span> </h3>	</div>




            <?php
            use yii\helpers\Url;

            foreach ($faqs as $faq){
            ?>
            <div class="items-row cols-1 row-0 row-fluid">
                <div class="span12">
                    <div class="item column-1">

                        <!-- Icons -->

                        <!-- Intro image -->


                        <!--  title/author -->
                        <div class="item_header">
                            <h4 class="item_title">
                                <a href="<?=\yii\helpers\Url::to(['faq/viewsite?id=' . $faq->id]); ?>">
                                    <span class="item_title_part0"><?=$faq->title; ?></span> </a>
                            </h4>

                        </div>


                        <!-- info TOP -->


                        <!-- Introtext -->
                        <div class="item_introtext"><p><?=$faq->minidescription; ?></p></div>

                        <!-- info BOTTOM -->

                        <!-- More -->

                    </div><!-- end item -->
                </div><!-- end spann -->

            </div><!-- end row -->

            <?php } ?>

        </div>


        <!-- Content-bottom -->
    </div>

    <!-- Right sidebar -->
    <div id="aside-right" class="span4">
        <div class="row">
            <aside>
                <div class="moduletable aside  span4"><h3 class="moduleTitle ">Search</h3><div class="mod-search mod-search__aside">
                        <form action="<?=Url::to(['site/faqs'])?>" method="post" class="navbar-form">
                            <label for="searchword" class="element-invisible">Search...</label>
                            <input id="searchword" name="searchword" maxlength="20"  class="inputbox mod-search_searchword" type="text" size="20" value="Search..."  onblur="if (this.value=='') this.value='Search...';" onfocus="if (this.value=='Search...') this.value='';" />
                            <br />
                            <button class="btn btn-primary" onclick="this.form.searchword.focus();">Search</button>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>