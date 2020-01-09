<?php
/*
Template Name: Customizer About
Class 28.7
*/
get_header();
the_post();
?>

<section>
    <div class="factorian-content-block-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title wow fadeInUp" id="about-heading">
                        <h1>
                            <?php
                            echo esc_html(get_theme_mod('cust_about_heading', __('About Page Heading','customizer')));
                            //or Class 28.8
                            //echo esc_html(cs_get_customize_option('about_heading'));
                            ?>
                        </h1>							
                    </div>
                    <br/>
                </div>
            </div>
           <div class="row text-center" id= "about-description">
                <div class="col-md-8 col-md-offset-2">
                <p>
                    <?php
                    //Class 28.8
                    //echo esc_html(cs_get_customize_option('about_description'));
                    //Class 28.11
                    echo apply_filters('the_content', get_theme_mod('cust_about_description'));
                    ?>
                </p>
                </div>
           </div>
        </div>
    </div>
</section>
<?php 
get_footer();
?>