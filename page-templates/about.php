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
                            echo esc_html(get_theme_mod('cust_about_heading', __('About Page Heading','cusomizer')));
                            ?>
                        </h1>							
                    </div>
                    <br/>
                </div>
            </div>
           <div class="row">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eum minima voluptates beatae ipsam numquam error suscipit recusandae accusantium. Earum, dignissimos, saepe. Velit iure error magnam vero repellat necessitatibus, ad quasi unde cupiditate sed quis culpa sunt officiis totam voluptates alias odio voluptatem, cum optio eos earum aliquam commodi maxime? Esse incidunt quas impedit ducimus repellendus eos ea eum amet, provident est possimus, eaque. Asperiores provident, voluptatibus quas possimus quisquam, rerum necessitatibus sit error, voluptatem accusantium eos commodi deleniti distinctio labore odit harum! Voluptate, fugit sapiente saepe quo necessitatibus non doloremque quisquam? Debitis, ea saepe vel odio, nulla ullam illo?
                </p>                
           </div>
        </div>
    </div>
</section>
<?php 
get_footer();
?>