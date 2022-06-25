<? get_header(); ?>

<div id="page-title">

   <div class="row">

      <div class="ten columns centered text-center">
         <h1>Category<span>. </span></h1>

         <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
         enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
      </div>

   </div>

</div> 
<div class="content-outer">

   <div id="page-content" class="row">

      <div id="primary" class="eight columns">
      <? if (have_posts()) : while (have_posts()) : the_post(); ?>
         <article class="post">
            <div class="entry-header cf">
               <h1><a href="<?the_permalink();?>" title=""><?the_title();?></a></h1>
               <p class="post-meta">
                  <time class="date" datetime="2014-01-14T11:24"><?the_time("F, d, o")?></time>
                  /
                  <span class="categories">
                    <?the_category(" / ")?>
                  </span>
               </p>
            </div>
            <div class="post-thumb">
               <a href="<?the_permalink();?>" title=""><?the_post_thumbnail()?></a>
            </div>
            <div class="post-content">
                <?the_excerpt()?>
            </div>
         </article> 


        <? endwhile; endif; wp_reset_query(); ?>




         <nav class="col full pagination">
                 <?the_posts_pagination()?>
             </nav>

      </div> <!-- Primary End-->

      <div id="secondary" class="four columns end">

         <? get_sidebar(); ?>

      </div> <!-- Secondary End-->

   </div>

</div> <!-- Content End-->


<!-- footer
================================================== -->
<? get_footer(); ?>