<?php  get_header();?>

<!-- The home page template is the front page by default. If you do not set WordPress to use a static front page, this template is used to show latest posts. -->

<script>
var looper;
var degrees = 0;
function rotateAnimation(el,speed){
	var elem = document.getElementById(el);
	if(navigator.userAgent.match("Chrome")){
		elem.style.WebkitTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Firefox")){
		elem.style.MozTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("MSIE")){
		elem.style.msTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Opera")){
		elem.style.OTransform = "rotate("+degrees+"deg)";
	} else {
		elem.style.transform = "rotate("+degrees+"deg)";
	}
	looper = setTimeout('rotateAnimation(\''+el+'\','+speed+')',speed);

	degrees++;
	if(degrees > 359){
		degrees = 1;
	}
}
</script>



<div class="container">
  <div class="row no-gutters justify-content-center">
    <div class="box1 row justify-content-start m-3 shadow inline-block">
      <div class="col-9 align-self-center">
        <div class=" circle1 justify-content-center m-1 p-1">
            <img class="shadow rounded-circle" id="myRecord" src="wp-content/uploads/2019/01/assembly-300x300.png" alt="skysvinyl record graphic">
            <script>
              rotateAnimation("myRecord",2);
            </script>
        </div>
      </div>
      <!-- infinite -->
      <div class="col-1 animated wobble slow  align-self-center">
        <div class="bar1">

        </div>
      </div>
    </div>
  </div>
</div>

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
									<a href="#" class="card-link ">
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
								<div class="row lwr align-items-end ">
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
