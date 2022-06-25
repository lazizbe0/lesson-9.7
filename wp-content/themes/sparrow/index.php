  <? get_header(); ?>

  <!-- Intro Section
   ================================================== -->
  <section id="intro">

      <!-- Flexslider Start-->
      <div id="intro-slider" class="flexslider">

          <ul class="slides">
              <?
                      $slider = new WP_Query([
                        'post_type' => 'slider',
                        'posts_per_page' => -1,
                     ]);
                  ?>
              <? if ($slider->have_posts()) : while ($slider->have_posts()) : $slider->the_post(); ?>
              <!-- Slide -->
              <li>
                  <div class="row">
                      <div class="twelve columns">
                          <div class="slider-text">
                              <h1><?the_title()?><span>.</span></h1>
                              <?the_content()?>
                          </div>
                          <div class="slider-image">
                            <?the_post_thumbnail()?>
                        </div>
                      </div>
                  </div>
              </li>


              <? endwhile; endif; wp_reset_query(); ?>

          </ul>

      </div> <!-- Flexslider End-->

  </section> <!-- Intro Section End-->

  <!-- Info Section
   ================================================== -->
  <section id="info">

      <div class="row">

          <div class="bgrid-quarters s-bgrid-halves">

              <? dynamic_sidebar("text-widget"); ?>

          </div>

      </div>

  </section> <!-- Info Section End-->

  <!-- Works Section
   ================================================== -->
  <section id="works">

      <div class="row">

          <div class="twelve columns align-center">
              <h1>Some of our recent works.</h1>
          </div>

          <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">
              <?
                      $portfolio = new WP_Query([
                        'post_type' => 'portfolio',
                        'posts_per_page' => 4,
                     ]);
                  ?>
              <? if ($portfolio->have_posts()) : while ($portfolio->have_posts()) : $portfolio->the_post(); ?>


              <div class="columns portfolio-item">
                  <div class="item-wrap">
                      <a href="<?the_permalink()?>">
                          <?the_post_thumbnail()?>
                          <div class="overlay"></div>
                          <div class="link-icon"><i class="fa fa-link"></i></div>
                      </a>
                      <div class="portfolio-item-meta">
                          <h5><a href="<?the_permalink()?>">
                                  <?the_title()?>
                              </a></h5>
                          <p>
                              <? the_field("category")?>
                          </p>
                      </div>
                  </div>
              </div>

              <? endwhile; endif; wp_reset_query(); ?>
          </div>

      </div>

  </section> <!-- Works Section End-->

  <!-- Journal Section
   ================================================== -->
  <section id="journal">

      <div class="row">
          <div class="twelve columns align-center">
              <h1>Our latest posts and rants.</h1>
          </div>
      </div>

      <div class="blog-entries">

          <!-- Entry -->
          <article class="row entry">

              <div class="entry-header">

                  <div class="permalink">
                      <a href="single.html"><i class="fa fa-link"></i></a>
                  </div>

                  <div class="ten columns entry-title pull-right">
                      <h3><a href="single.html">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin
                              auctor.</a></h3>
                  </div>

                  <div class="two columns post-meta end">
                      <p>
                          <time datetime="2014-01-31" class="post-date" pubdate="">Jan 31, 2014</time>
                          <span class="dauthor">By Sakura Haruno</span>
                      </p>
                  </div>

              </div>

              <div class="ten columns offset-2 post-content">
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                      <a class="more-link" href="single.html">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
                  </p>
              </div>

          </article> <!-- Entry End -->

          <!-- Entry -->
          <article class="row entry">

              <div class="entry-header">

                  <div class="permalink">
                      <a href="single.html"><i class="fa fa-link"></i></a>
                  </div>

                  <div class="ten columns entry-title pull-right">
                      <h3><a href="single.html">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                              fugit sed.</a></h3>
                  </div>

                  <div class="two columns post-meta end">
                      <p>
                          <time datetime="2014-01-29" class="post-date" pubdate="">Jan 30, 2014</time>
                          <span class="dauthor">By John Doe</span>
                      </p>
                  </div>

              </div>

              <div class="ten columns offset-2 post-content">
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                      <a class="more-link" href="single.html">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
                  </p>
              </div>

          </article> <!-- Entry End -->

          <!-- Entry -->
          <article class="row entry">

              <div class="entry-header">

                  <div class="permalink">
                      <a href="single.html"><i class="fa fa-link"></i></a>
                  </div>

                  <div class="ten columns entry-title pull-right">
                      <h3><a href="blog-single.html">Quis autem vel esse eum iure reprehenderit qui in ea voluptate
                              velit esse.</a></h3>
                  </div>

                  <div class="two columns post-meta end">
                      <p>
                          <time datetime="2014-01-28" class="post-date" pubdate="">Jan 28, 2014</time>
                          <span class="dauthor">By Naruto Uzumaki</span>
                      </p>
                  </div>

              </div>

              <div class="ten columns offset-2 post-content">
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                      <a class="more-link" href="single.html">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
                  </p>
              </div>

          </article> <!-- Entry End -->

      </div> <!-- Entries End -->

  </section> <!-- Journal Section End-->

  <? get_footer(); ?>