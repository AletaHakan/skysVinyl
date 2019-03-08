<?php  get_header();?>

<!-- The home page template is the front page by default. If you do not set WordPress to use a static front page, this template is used to show latest posts. -->

<div class="container-fluid">
    <section class="text-center">
      <h1 class="my-4 hdng">Recent Posts</h1>
      <div class="row justify-content-center">
          <?php
          if ( have_posts() ) {
          $counter = 1;
          while ( have_posts() ) {
          the_post();
          ?>

          <div class="col-lg-4 col-md-6 col-sm-12 mb-4 justify-content-center">
            <!--Featured image-->
						<div class="card crd">
              <div class="card-header text-center crdHdr">
                <p class=""><?php the_title(); ?></p>
              </div>
							<div class="card-body crdBdy mt-1">
								<div class="imgBkgrnd m-1 p-2 align-items-center">
									<?php the_post_thumbnail('category-thumb', array('class' => 'card-img' )); ?>
								</div>

								<div class="upr align-items-center mt-2">
									<a href="#" class="card-link">
										<i class="fa fa-bolt"></i>
										<?php the_category( ', ' ); ?>
									</a>
								</div>


								<div class="mdl align-items-center clearfix">
									<p class="card-text mt-1 mb-1"><?php the_excerpt(); add_filter( 'excerpt_length', function( $length ) { return 50; } );?></p>
	                <p class="card-text mt-1 mb-1">by
	                  <a href="<?php echo get_permalink() ?>" class=""><?php get_the_author(); ?></a>, <?php echo get_the_date(); ?>
	                </p>
								</div>
								<div class="row lwr align-items-end">
									<a href="<?php echo get_permalink() ?>" class="btn cstmBtn btn-rounded btn-block m-1 mr-3 ml-3">Read more</a>
								</div>

							</div>

            </div>
          </div>


        <!--Grid column-->

          <?php
          if ($counter % 6 == 0) {
          ?>
        </div>
          <!--Grid row-->
          <!--Grid dynamic row-->
        <div class="row">
          <?php
            }
            $counter++;
            } // end while
            } // end if
          ?>
        </div>

    </section>
    <!--Section: Articles-->

</div>





<?php  get_footer(); ?>
