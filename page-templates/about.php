<?php
/*
Template Name: Customizer About
Class 28.7
*/
get_header();
the_post();
?>
<?php
//echo get_theme_mod('cust_display_about');
//if(get_theme_mod('cust_display_about',1)):
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
                <br/>
                <h2>Upload an Image 28.12</h2>
                <?php
                //Class 28.12  
                    //echo get_theme_mod('test_image');
                    $attachment_id = attachment_url_to_postid(get_theme_mod('test_image'));
                    echo wp_get_attachment_image($attachment_id,'large');
                    
                //End Class 28.12    
                ?>
                <br/>
                <br/>
                <h2>Upload an Media 28.13</h2>    
                <br/>            
                <br/>            
                <?php
                //Class 28.13
                    $attachment_id = get_theme_mod('test_image2');
                    echo wp_get_attachment_image($attachment_id,'thumbnail');
                    
                //End Class 28.13
                ?>
                <h2>Upload a File 28.14</h2>    
                <br/>            
                <br/>            
                <?php
                //Class 28.14
                    $attachment_id = attachment_url_to_postid(get_theme_mod('test_file'));
                    //$attachment_id = get_theme_mod('test_file');
                    echo $attachment_id;                    
                //End Class 28.14
                ?>  
                <h2>Upload a File 28.15</h2>    
                <br/>            
                <br/>            
                <?php
                //Class 28.15
                    //$attachment_id = attachment_url_to_postid(get_theme_mod('test_image3'));
                    $attachment_id = get_theme_mod('test_image3');
                    echo "Cropped :".$attachment_id;                    
                //End Class 28.15
                ?>                
                </div>
           </div>
        </div>
    </div>
</section>
<?php
//endif;
?>
<?php 
get_footer();
?>