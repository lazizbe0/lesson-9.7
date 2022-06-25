<?php
/*
Template Name: Portfolio sahifasining  shabloni
*/
?>
<? get_header(); ?>

<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1><?the_field('page-title')?><span>.</span></h1>

            <p><?the_field('page-description')?> </p>
        </div>

    </div>

</div> <!-- Page Title End-->

<!-- Content
================================================== -->
<div class="content-outer">

    <div id="page-content" class="row portfolio">

        <section class="entry cf">

            <div id="secondary" class="four columns entry-details">
                <?
                the_content();
                ?>

            </div> <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">

                <div id="portfolio-wrapper" class="bgrid-halves cf">
                  <?
                      $portfolio = new WP_Query([
                        'post_type' => 'portfolio',
                        'posts_per_page' => -1,
                     ]);
                  ?>
                    <? if ($portfolio->have_posts()) : while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
                    <div class="columns portfolio-item first">
                        <div class="item-wrap">
                            <a href="<?the_permalink()?>">
                                <?the_post_thumbnail()?>
                                <div class="overlay"></div>
                                <div class="link-icon"><i class="fa fa-link"></i></div>
                            </a>
                            <div class="portfolio-item-meta">
                                <h5><a href="<?the_permalink()?>"><?the_title()?></a></h5>
                                <p><?the_category()?></p>
                            </div>
                        </div>
                    </div>

                    <? endwhile; endif; wp_reset_query(); ?>
                </div>

            </div> <!-- primary end-->

        </section> <!-- end section -->

    </div> <!-- #page-content end-->

</div> <!-- content End-->


<? get_footer(); ?>