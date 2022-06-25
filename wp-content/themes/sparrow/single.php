<?get_header()?>
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1><?the_title()?><span>.</span></h1>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <article class="post">

               <div class="entry-header cf">

                  <h1><?the_title()?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?the_time("F, d, o")?></time>
                     /
                     <span class="categories">
                        <?the_category(" / ")?>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                <?the_post_thumbnail();?>
               </div>

               <div class="post-content">
                <?the_content()?>
               </div>

            </article> <!-- post end -->


         </div>

         <div id="secondary" class="four columns end">                                  
            
         <?get_sidebar()?>

         </div> <!-- Comments End -->

      </div>

   </div> <!-- Content End-->

<?get_footer();?>