<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Services';
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

        <div class="note"></div>


        <div class="page-gallery page-gallery__gallery">

            <div class="page_header">
                <h3><span class="item_title_part0">services</span> <span class="item_title_part1">overview</span> </h3>  </div>



            <!-- Filter -->

            <div class="filters">
                <b>Filter by category:</b>

                <ul id="filters" class="unstyled">
                    <li><a href="#" data-filter="*" class="selected">Show All</a></li>
                    <li><a class="" href="#" data-filter=".service1">First Category</a></li>
                    <li><a class="" href="#" data-filter=".service2">Second Category</a></li>
                    <li><a class="" href="#" data-filter=".service3">Third Category</a></li>
                </ul>

                <div class="clearfix"></div>
            </div>





            <div class="row-fluid">
                <ul id="isotopeContainer" class="gallery items-row cols-4">

                    <?php
                    foreach ($services as $service) {
                        ?>
                        <li class="gallery-item service<?=$service->category; ?>">

                            <!-- Icons -->


                            <!-- Image  -->

                            <div class="item_img img-intro img-intro__left">

                                <a class="touchGalleryLink zoom" href="/images/services/<?=$service->img; ?>">
                                    <span class="zoom-bg"></span>
                                    <span class="zoom-icon"></span>
                                    <img
                                        src="/images/services/<?=$service->img; ?>" alt=""/>
                                </a>

                            </div>


                            <!--  title/author -->
                            <div class="item_header">
                                <h4 class="item_title"><a
                                        href="<?=\yii\helpers\Url::to(['services/viewsite', 'id' => $service->id]); ?>"> <span
                                            class="item_title_part0"><?=$service->title; ?></span> </a>
                                </h4>

                            </div>


                            <!-- info TOP -->


                            <!-- Introtext -->
                            <div class="item_introtext">
                                <?=$service->minidescription; ?>
                            </div>

                            <!-- info BOTTOM -->

                            <!-- More -->
                            <a class="btn btn-info"
                               href="<?=\yii\helpers\Url::to(['services/viewsite', 'id' => $service->id]); ?>"><span>
    more		</span></a>

                            <div class="clearfix"></div>
                        </li><!-- end span -->
                        <?php
                    }
                    ?>

                </ul>
            </div><!-- end row -->




        </div>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                (function($){
                    $(window).load(function(){

                        var $cols = 4;
                        var $container = $('#isotopeContainer');

                        $item = $('.gallery-item')
                        $item.outerWidth(Math.floor($container.width() / $cols));

                        $container.isotope({
                            animationEngine: 'best-available',
                            animationOptions: {
                                queue: false,
                                duration: 800
                            },
                            containerClass : 'isotope',
                            containerStyle: {
                                position: 'relative',
                                overflow: 'hidden'
                            },
                            hiddenClass : 'isotope-hidden',
                            itemClass : 'isotope-item',
                            resizable: true,
                            resizesContainer : true,
                            transformsEnabled: !$.browser.opera // disable transforms in Opera
                        });

                        if($container.width() <= '767'){
                            $item.outerWidth($container.width());
                            $item.addClass('straightDown');
                            $container.isotope({
                                layoutMode: 'straightDown'
                            });
                        } else {
                            $item.removeClass('straightDown');
                            $container.isotope({
                                layoutMode: 'fitRows'
                            });
                        }

                        $(window).resize(function(){
                            $item.outerWidth(Math.floor($container.width() / $cols));
                            if($container.width() <= '767'){
                                $item.outerWidth($container.width());
                                $item.addClass('straightDown');
                                $container.isotope({
                                    layoutMode: 'straightDown'
                                });
                            } else {
                                $item.outerWidth(Math.floor($container.width() / $cols));
                                $item.removeClass('straightDown');
                                $container.isotope({
                                    layoutMode: 'fitRows'
                                });
                            }
                        });
                    });
                })(jQuery);
            });
        </script>


        <script type="text/javascript">
            jQuery(document).ready(function() {
                (function($){
                    $(window).load(function(){

                        var $container = $('#isotopeContainer');

                        // filter items when filter link is clicked
                        $('#filters a').click(function(){
                            var selector = $(this).attr('data-filter');
                            $container.isotope({ filter: selector });
                            return false;
                        });

                        var $optionSets = $('#filters li'),
                            $optionLinks = $optionSets.find('a');

                        $optionLinks.click(function(){
                            var $this = $(this);
                            // don't proceed if already selected
                            if ( $this.hasClass('selected') ) {
                                return false;
                            }
                            var $optionSet = $this.parents('#filters');
                            $optionSet.find('.selected').removeClass('selected');
                            $this.addClass('selected');

                            // make option object dynamically, i.e. { filter: '.my-filter-class' }
                            var options = {},
                                key = $optionSet.attr('data-option-key'),
                                value = $this.attr('data-option-value');
                            // parse 'false' as false boolean
                            value = value === 'false' ? false : value;
                            options[ key ] = value;
                            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                                // changes in layout modes need extra logic
                                changeLayoutMode( $this, options )
                            } else {
                                // otherwise, apply new options
                                $container.isotope( options );
                            }

                            return false;
                        });
                    });
                })(jQuery);
            });
        </script>



        <!-- Content-bottom -->
    </div>

    <!-- Right sidebar -->
</div>