<?php get_header(); ?>
<div style="background: lightgrey;">
 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/sa-bg.jpg'); ?>"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Co-Spaces

      <!-- Traditional way to show category or author -->
          <!-- <?php
            if (is_category()) {
                single_cat_title();
            }
            if (is_author()) {
                echo 'Post by: '; the_author();
            }
          ?> -->
      </h1>
      <div class="page-banner__intro">
        <p><?php the_archive_description(); ?></p>
      </div>
    </div>  
</div>

<div class="container-fluid pb-5 pl-4 pr-4" style="background: lightgrey;">
    <h1 class="text-center mt-5 pt-5">Co-Space for lease</h1>
    <h1 class="lead text-center pb-5">Amazing working spaces • Great Location in Chaweng Beach main road.
    </h1>
    <div class="row">

    <?php while(have_posts()) { 
        
    }
        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card" style="width: 95%">
                <div class="img-fluid card-img-top co-space-bg text-center font-weight-bold pt-5 pb-5">
                    <h1>155.31 m²</h1>
                </div>
                <div class="card-body" >

                    <p class="card-text">A spectacular Arena Co-Space 1 of the bird eye view in perspective of the
                        two
                        football fields. Estimate measurement of
                        155.31 m² space best for investing in cafe, restaurant, sport bar, or working space. An area
                        of
                        the upstair above Samui
                        Arena’s reception has two entering slide steel doors either enter from the main road closer
                        to
                        the car park or by within
                        from the reception area.

                    </p>
                    <br />
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card" style="width: 95%">
                <div class="img-fluid card-img-top co-space-bg text-center font-weight-bold pt-5 pb-5">
                    <h1>112.2 m²</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Open space horizontally align along of our Samui Arena (Arena 1) by the side of our large
                        football field locate
                        on the 2nd floor. Own private access stairwell right by the side of the building. Estimate
                        measurement of 112.2 m²
                        space best for investing in fitness centre, yoga class room, and more.
                    </p>
                    <br />
                    <br />
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 mt-3 ">
            <div class="card" style="width: 95%">
                <div class="img-fluid card-img-top co-space-bg text-center font-weight-bold pt-5 pb-5">
                    <h1>52.8 m²</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Taking the action closer view of a football of our Samui Arena (Arena 1)
                        large
                        field on the right flank. An Arena
                        Co-Space 3 of 52.8 m² laying on the ground floor right beside our Area 1 large field.

                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card" style="width: 95%">
                <div class="img-fluid card-img-top co-space-bg text-center font-weight-bold pt-5 pb-5">
                    <h1>26.4 m²</h1>
                </div>

                <div class="card-body">

                    <p class="card-text">Taking the action closer view of a football of our Samui Arena (Arena 1)
                        large
                        field on the right flank. An Arena
                        Co-Space 3 of 26.4 m² laying on the ground floor right beside our Area 1 large field.

                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>