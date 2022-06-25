<?php
/*
Template Name: About sahifasining  shabloni
*/
?>
<?get_header()?>
   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1><?the_field('page-title')?><span>.</span></h1>

            <p><?the_field('page-description')?></p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row page">

         <div id="primary" class="eight columns">

            <section>
<?the_content()?>
               <div class="row">

                  <div id="team-wrapper" class="bgrid-halves cf">
                  <?
                      $team = new WP_Query([
                        'post_type' => 'team',
                        'posts_per_page' => -1,
                     ]);
                  ?>
                    <? if ($team->have_posts()) : while ($team->have_posts()) : $team->the_post(); ?>
                     <div class="column member">
                        <?the_post_thumbnail()?>

                        <div class="member-name">
                           <h5><?the_title()?></h5>
                           <span><?the_field('job')?></span>
                        </div>

<?the_content()?>


            			</div>

                     <? endwhile; endif; wp_reset_query(); ?>
                  </div> 
                  
                  
                  <!-- Team wrapper End -->

               </div> <!-- row End -->

            </section> <!-- section end -->

         </div> <!-- primary end -->

         <div id="secondary" class="four columns end">

                                 <?get_sidebar('about');?>
         </div> <!-- secondary End-->

      </div> <!-- page-content End-->

   </div> <!-- Content End-->

<?get_footer()?>