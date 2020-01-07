<?php
/*
Template Name: Landing Page
*/
get_header();
the_post();
?>
			<div class="slider-area">
				<div class="factorian-slide-preloader">
					<div class="sk-cube-grid">
					  <div class="sk-cube sk-cube1"></div>
					  <div class="sk-cube sk-cube2"></div>
					  <div class="sk-cube sk-cube3"></div>
					  <div class="sk-cube sk-cube4"></div>
					  <div class="sk-cube sk-cube5"></div>
					  <div class="sk-cube sk-cube6"></div>
					  <div class="sk-cube sk-cube7"></div>
					  <div class="sk-cube sk-cube8"></div>
					  <div class="sk-cube sk-cube9"></div>
					</div>
				</div>	
				<div class="homepage-slides">
			
					<div class="single-slide-item slide-bg1 wow animated fadeInUp">
						<div class="slide-item-table">
							<div class="slide-item-tablecell">
								<div class="container">
									<div class="row">
										<div class="col-md-6 col-md-offset-6">
											<div class="slider-text">
												<h2>The most targetted WordPress theme for your site.</h2>
												<p>We always try to bring the beautiful smile of our customers with our awesome works.</p>
												<a href="index.html" class="factorian-btn slide-btn">Get Free Consultation</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="single-slide-item slide-bg1 wow animated fadeInUp">
						<div class="slide-item-table">
							<div class="slide-item-tablecell">
								<div class="container">
									<div class="row">
										<div class="col-md-6 col-md-offset-6">
											<div class="slider-text">
												<h2>The most targetted WordPress theme for your site 2.</h2>
												<p>We always try to bring the beautiful smile of our customers with our awesome works 22222.</p>
												<a href="index.html" class="factorian-btn slide-btn">Get Free Consultation</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
  	<section>
  		<div class="factorian-content-block-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="section-title wow fadeInUp" id="service-heading">
							<h2>
							    <?php 
                                    echo esc_html(get_theme_mod('cust_services_heading',__('OUR Mission Statement','customizer'))); 
                                    // echo esc_html(get_option('cust_services_heading',__('OUR Mission Statement','customizer')));
                                ?>							     
							</h2>							
						</div>
					</div>					
				</div>
				<?php
                if(get_theme_mod('cust_services_display_subheading',1)):
                ?>
				<div class="row">
				    <div class="col-md-8 col-md-offset-2">
				        <h4 class="sub-heading text-center" id="service-subheading">
                            <?php 
                                echo esc_html(get_theme_mod('cust_services_sub_heading',__('This is Subheading of our Mission Statement','customizer')));
                            ?>
                        </h4>
                        <br/>
				    </div>
				</div>
				<?php
                endif;
                ?>
				<div class="row">
					<div class="col-md-4">
						<div class="single-blog wow fadeInRight">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-bg1.jpg" alt="">
							<h3>How I started my startup with only $100 and got success.</h3>
							<span>25th June, 2016</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-blog wow fadeInUp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-bg2.jpg" alt="">
							<h3>How I started my startup with only $100 and got success.</h3>
							<span>25th June, 2016</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-blog wow fadeInLeft">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-bg3.jpg" alt="">
							<h3>How I started my startup with only $100 and got success.</h3>
							<span>25th June, 2016</span>
						</div>
					</div>
				</div>
			</div>
  		</div>
  	</section>	
	<section>
		<div class="factorian-content-block-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="single-service-item wow animated fadeInUp">
							<div class="service-item-bg service-bg1"></div>
							<h3>Best Renovation</h3>
							<p>Over fact all son tell this any his. Insisted confined of weddings to returned debating rendered. Keeps order fully so do party.</p>
							<a href="index.html" class="read-more-btn">See Details <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-service-item wow animated fadeInUp">
							<div class="service-item-bg service-bg1"></div>
							<h3>Architecture Plan</h3>
							<p>Over fact all son tell this any his. Insisted confined of weddings to returned debating rendered. Keeps order fully so do party.</p>
							<a href="index.html" class="read-more-btn">See Details <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<a href=""><div class="single-service-thumb wow animated fadeInRight">	
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-thumb1.jpg" alt="">
							<h3>Building Home</h3>
							<p>Over fact all son tell this any his. This confined of weddings to returned .</p>
						</div></a>
						<a href=""><div class="single-service-thumb wow animated fadeInRight">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-thumb1.jpg" alt="">
							<h3>Product Making</h3>
							<p>Over fact all son tell this any his. This confined of weddings to returned .</p>
						</div></a>
						<a href=""><div class="single-service-thumb wow animated fadeInRight">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-thumb1.jpg" alt="">
							<h3>Delivery Works</h3>
							<p>Over fact all son tell this any his. This confined of weddings to returned .</p>
						</div></a>						
					</div>
				</div>
			</div>	
		</div>	
	</section>
	<section>
		<div class="factorian-contact-us-area">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="contact-us-text wow fadeInLeft">
							Build your dream product with us.
						</div>
					</div>
					<div class="col-md-4 text-right wow fadeInRight">
						<a href="index.html" class="factorian-btn contact-btn">
							Contact us today
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
  	<section>
  		<div class="factorian-content-block-area section-padding">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-4">
  						<img class="wow fadeInLeft" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-bg1.jpg" alt="">
  					</div>
  					<div class="col-md-4">
  						<div class="who-are-we-text wow fadeInUp">
  							<h3>Who we are?</h3>
  							<p>Still court no small think death so an wrote. Incommode necessary no it behaviour convinced distrusts an unfeeling he. Could death since do we hoped is in. Exquisite no my attention extensive. The determine conveying moonlight age. Avoid for see marry sorry child. Sitting so totally forbade hundred to. </p>
  							<a href="index.html" class="read-more-btn">Discover more <i class="fa fa-long-arrow-right"></i></a>
  						</div>
  					</div>
  					<div class="col-md-3 col-md-offset-1">
  						<img class="wow fadeInRight"src="<?php echo get_template_directory_uri(); ?>/assets/img/about-bg2.jpg" alt="">
  					</div>
  				</div>
  				<?php
                $cust_column = get_theme_mod('cust_who_we_are_number_of_items',4);
                ?>
  				<div class="row">
  					<div class="col-md-<?php echo esc_attr($cust_column); ?>">
  						<div class="single-promo wow fadeInLeft">
  							<i class="fa fa-facebook"></i>
  							<h3>Best Product</h3>
  							<p>Noise is round to in it quick timed doors. Written address greatly get attacks inhabit pursuit of things.</p>
  						</div>
  					</div>
  					<div class="col-md-<?php echo esc_attr($cust_column); ?>">
  						<div class="single-promo wow fadeInUp">
  							<i class="fa fa-youtube"></i>
  							<h3>Proper Quality</h3>
  							<p>Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked.</p>
  						</div>
  					</div>
  					<div class="col-md-<?php echo esc_attr($cust_column); ?>">
  						<div class="single-promo wow fadeInRight">
  							<i class="fa fa-linkedin"></i>
  							<h3>High Conversion</h3>
  							<p>Effects present letters inquiry no removed or friends. Desire behind latter me though in. Supposing fastest act.</p>
  						</div>
  					</div>
  					<div class="col-md-<?php echo esc_attr($cust_column); ?>">
  						<div class="single-promo wow fadeInLeft">
  							<i class="fa fa-facebook"></i>
  							<h3>Best Product</h3>
  							<p>Noise is round to in it quick timed doors. Written address greatly get attacks inhabit pursuit of things.</p>
  						</div>
  					</div>
  					<div class="col-md-<?php echo esc_attr($cust_column); ?>">
  						<div class="single-promo wow fadeInUp">
  							<i class="fa fa-youtube"></i>
  							<h3>Proper Quality</h3>
  							<p>Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked.</p>
  						</div>
  					</div>
  					<div class="col-md-<?php echo esc_attr($cust_column); ?>">
  						<div class="single-promo wow fadeInRight">
  							<i class="fa fa-linkedin"></i>
  							<h3>High Conversion</h3>
  							<p>Effects present letters inquiry no removed or friends. Desire behind latter me though in. Supposing fastest act.</p>
  						</div>
  					</div>
  				</div>
  			</div>
		</div>
  	</section>
  	<section>
  		<div class="factorian-content-block-area section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-6 promo-text  wow fadeInUp">
						<h3>Why you should working with us?</h3>
						<p>Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. We help companies at every stage of growth, developing custom solutions.</p>
						<ul class="checklist">
							<li><i class="fa fa-check"></i>We help align your brand strategy with key objectives.</li>
							<li><i class="fa fa-check"></i>We help our customers to build better business for future.</li>
							<li><i class="fa fa-check"></i>We design best working path for startups.</li>
						</ul>						
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class="video-embed wow fadeInUp">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="" height="" src="https://www.youtube.com/embed/_pXbYoNGtNk" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
  		</div>  		
  	</section>
  	<section>
  		<div class="factorian-content-block-area section-padding">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-4 col-md-offset-4">
  						<div class="section-title wow fadeInUp">
  							<h2>We do awesome works for our clients. Check some of our works.</h2>
  						</div>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-md-4">
  						<a href="" class="project-area wow fadeInRight">
  							<div class="single-project single-project-bg1"></div>
  							<h3>Our project name</h3>
  							Manufacturing
  						</a>
  					</div>
  					<div class="col-md-4">
  						<a href="" class="project-area wow fadeInUp">
  							<div class="single-project single-project-bg2"></div>
  							<h3>Our project name</h3>
  							Manufacturing
  						</a>
  					</div>
  					<div class="col-md-4">
  						<a href="" class="project-area wow fadeInLeft">
  							<div class="single-project single-project-bg3"></div>
  							<h3>Our project name</h3>
  							Manufacturing
  						</a>
  					</div>
  				</div>
  				<div class="row">  					
  					<a href="index.html" class="read-more-btn project-btn wow fadeInUp">Check all works <i class="fa fa-long-arrow-right"></i></a>
  				</div>
  			</div>  			
  			<div class="section-border"></div>
		</div>
		
  	</section>
  	<section>
  		<div class="factorian-content-block-area testimonial-area">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-4">
						<div class="single-testimonial wow fadeInRight">
							<p><i class="fa fa-quote-left"></i><i>Looking started he up perhaps against. How remainder all additions get elsewhere resources. One missed shy wishes supply design answer formed. Prevent on present hastily passage an subject in be.”</i></p>
							<h5>Farhan Rizvi<span>UX Designer</span></h5>
						</div>
  					</div>
  					<div class="col-md-4">
						<div class="single-testimonial wow fadeInUp">
							<p><i class="fa fa-quote-left"></i><i>Looking started he up perhaps against. How remainder all additions get elsewhere resources. One missed shy wishes supply design answer formed. Prevent on present hastily passage an subject in be.”</i></p>
							<h5>Farhan Rizvi<span>UX Designer</span></h5>
						</div>
  					</div>
  					<div class="col-md-4">
						<div class="single-testimonial wow fadeInLeft">
							<p><i class="fa fa-quote-left"></i><i>Looking started he up perhaps against. How remainder all additions get elsewhere resources. One missed shy wishes supply design answer formed. Prevent on present hastily passage an subject in be.”</i></p>
							<h5>Farhan Rizvi<span>UX Designer</span></h5>
						</div>
  					</div>
  				</div>
  			</div>
		</div>
  	</section>
  	<section>
		<div class="factorian-contact-us-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="contact-us-text wow fadeInRight">
							Build your dream product with us.
						</div>
					</div>
					<div class="col-md-4 text-right wow fadeInLeft">
						<a href="index.html" class="factorian-btn contact-btn">
							Contact us today
						</a>
					</div>
				</div>
			</div>
		</div>  		
  	</section>
  	<?php 
    get_footer();
    ?>