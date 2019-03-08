<?php  get_header();
if( have_posts() ) {
  while ( have_posts() ) {
    the_post();
?>

<!-- The single post template is used when a visitor requests a single post. -->


<div class="container">
  <div class="row justify-content-center no-gutters">
    <div class="col">
      <!-- col-md-8 when the side advertisement area is there -->
      <!-- Post Header - Title of Post -->
      <header>
        <div class="card mb-3 sglpgCrd mt-5">
          <div class="card-body text-center m-1 ftrHghlght">
            <div class="row d-flex justify-content-center">
              <div class="col-md-6">
                <h1 class="sglpgH1"><?php the_title() ?></h1>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main>
        <div class="container">
          <section class="mt-3">
            <div class="row no-gutters justify-content-center">
              <!--Main content from the post - Breadcrumb | Featured Image | Post -->
              <div class="col-12 mb-4 no-gutters justify-content-center mr-1 ml-1">
                <!-- Breadcrumbs -->
                <?php
                  $categories = get_the_category();
                  $first_category_name = $categories[0]->cat_name;
                  $first_category_id = get_cat_ID( $category[0]->cat_name );
                  $first_category_link = get_category_link( $category_id );
                ?>
                <ol class="breadcrumb mt-3">
                  <li class="breadcrumb-item">
                      <a class="brdCrmbs-link" href="<?php echo get_home_url(); ?>">Home Page</a>
                  </li>
                  <?php
                  if (count($categories)){
                  ?>
                  <li class="breadcrumb-item">
                      <a class="brdCrmbs-link" href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
                  </li>
                  <?php
                  }
                  ?>
                  <li class="breadcrumb-item active brdCrmbs-link"><?php the_title() ?></li>
                </ol>
                <!-- Featured image -->
                <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid mb-4 single-img')); ?>
                <!-- Post Content -->
                <div class="card mb-5 sglpgCrd1">
                  <div class="card-body">
                    <p>by <a class="sglpgCrd-links"href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></p>
                    <hr>
                    <div class="post-content sglpgPstCnt">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Comments - User login & comment | Existing comments-->
              <?php comments_template('/components/short-comments.php'); ?>
              <!--
                * On some occasions you may want display your comments differently within your theme. For this you would build an alternate file (ex. short-comments.php) and call it as follows: comments_template( '/short-comments.php' );
              -->
            </div>
          </section>
        </div>
      </main>
    </div>
    <!-- <div class="col-md-4">
      Where the side menu and advertisements will go
    </div> -->
  </div>
</div>
<?php
  } //end while
} // end if
get_footer();
?>
