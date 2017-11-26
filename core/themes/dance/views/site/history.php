<div class="content-inner row">

    <!-- Left sidebar -->

    <div id="component" class="span12">
        <!-- Breadcrumbs -->

        <!-- Content-top -->


        <div id="system-message-container">
            <div id="system-message">
            </div>
        </div>
        <div class="page-category page-category__history">

            <div class="page_header">
                <h3><span class="item_title_part0">History</span> </h3>	</div>





                <?php
                $r=0;
                $c=0;
                $f=0;
                foreach ($years as $year){
                ?>
                    <?php if($r==0){
                        echo '<div class="items-row cols-2 row-' . $c . ' row-fluid">';
                        $c++;
                        $f=1;
                        $r++;
                    }
                    if ($f==1){
                        echo '<div class="span6">
                            <div class="item column-1">';
                        $f=2;
                    } elseif ($f==2){
                        echo '<div class="span6">
                            <div class="item column-2">';
                        $f=1;
                        $r=0;
                    }
                    ?>

                    <div class="item_header">
                        <h4 class="item_title">
                            <a href="<?='history/viewsite?id=' . $year->id; ?>">
                                <span class="item_title_part0"><?=$year->year; ?></span>
                            </a>
                        </h4>

                    </div>

                    <div class="item_introtext"><p><?=$year->minidescription ?></p>

                    </div>

                    <?php
                    if ($f>0){
                        echo "</div></div>";
                    }
                    ?>

                    <?php
                        if ($r==0){
                            echo '</div>';
                        }
                    ?>
                <?php
                }
                ?>



        </div>


        <!-- Content-bottom -->
    </div>

    <!-- Right sidebar -->
</div>