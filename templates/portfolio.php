<?php /* Template Name: Portfolio */ ?>

<?php   

   get_header();

?>
<div class="page-banner blog-banner blog-banner-section">
            <div class="container">
                <div class="page-banner-inner">
                    <div class="page-banner-content">
                        <div class="page-title">
                            <h1 class="title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Work</h1>
                        </div>
                    </div>
                </div>
            </div>
           <div class="cdn-inner-ocean">
                <div class="cdn-inner-wave"></div>
            </div>
        </div>

        <main class="main" id="main">
            <section class="section inner-page-section pb-zero">
                <div class="container">
                
                    <div class="section-filter">
                        <form id="filter-form">
                            <div class="row justify-content-end">
                                <div class="col-md-3 form-group">
                                <select id="category-filter" cate="Industry" class="video-filter form-control" data-filter-group="category">
                                 <option value=".all" selected="selected">By Industry</option>
                                 <option value=".all" selected="selected">All</option>
                                 <option value=".retail">Retail&amp;e-commerce
                                 <!-- <option value=".all">Education</option> -->
                                 <!-- <option value=".ecommerce">Healthcare</li> -->
                                 </option><option value=".travel">Tour &amp; Travel
                                <!-- <option value=".ecommerce">Food & Restaurant</li>
                                <option value=".education">Real Estate</li> -->
                                <!-- <option value=".ecommerce">Sports</li> -->
                                </option><option value=".social">Social Network
                                <!-- <option value=".ecommerce">Fleet Management</li>
                                <option value=".education">POS</li>
                                <option value=".ecommerce">Fintech</li>
                                <option value=".education">IOT</li>
                                <option value=".ecommerce">Startups</li> -->
                                </option><option value=".consumer">Consumer Electronics
                                </option><option value=".insurance"> Insurance Market
                                </option><option value=".financial">Financial
                                                                
                              </option></select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <select id="technology-filter" cate="Technology" class="video-filter form-control" data-filter-group="category">
                                        <option value=".all" selected="selected">By Technology</option>
                                        <option value=".all">All</option>
                                        <option value=".ios">iOS
                                        </option><option value=".android">Android
                                        </option><option value=".cross-platform">Cross Platform
                                    </option></select>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    
              
                    <div class="portfolio-posts-wrap mt-3 portfolio">
                        <div class="row js-filter-grid">

                        <div class="col-md-4 all retail cross-platform wow fadeInRight active" style="visibility: visible; animation-name: fadeInRight;">
                           <div class="cdn-portfolio-box portfolio-post">
                              <div class="cdn-portfolio-img">
                                 <img src="<?php echo home_url(); ?>/wp-assets/images/lazy-placeholder.png" alt="image" data-original="<?php echo home_url(); ?>/wp-assets/images/port-gongcha.jpg" class="lazy">
                                 <a class="cdn-port-play-btn cdn-popup-video" href="https://www.youtube.com/watch?v=VpaEgv70cBo">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                       <path d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z"></path>
                                    </svg>
                                 </a>
                              </div>
                                <div class="portfolio-content">
                                    <h2 class="portfolio-title">Gongcha</h2>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-4 all social android wow fadeInRight active" style="visibility: visible; animation-name: fadeInRight;">
                           <div class="cdn-portfolio-box portfolio-post">
                              <div class="cdn-portfolio-img">
                                 <img src="<?php echo home_url(); ?>/wp-assets/images/lazy-placeholder.png" alt="image" data-original="<?php echo home_url(); ?>/wp-assets/images/port-photostring.jpg" class="lazy">
                                 <a class="cdn-port-play-btn cdn-popup-video" href="https://www.youtube.com/watch?v=voZfuyarIjo">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                       <path d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z"></path>
                                    </svg>
                                 </a>
                              </div>
                                <div class="portfolio-content">
                                    <h2 class="portfolio-title">Photo Spring</h2>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-4 all retail ios android wow fadeInRight active" style="visibility: visible; animation-name: fadeInRight;">
                           <div class="cdn-portfolio-box portfolio-post">
                                <div class="cdn-portfolio-img">
                                    <img src="<?php echo home_url(); ?>/wp-assets/images/lazy-placeholder.png" alt="image" data-original="<?php echo home_url(); ?>/wp-assets/images/port-nightowl.jpg" class="lazy">
                                    <a class="cdn-port-play-btn cdn-popup-video" href="https://www.youtube.com/watch?v=yAocXP3lUoI">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h2 class="portfolio-title">Night Owl</h2>
                                </div>
                            </div>
                        </div>


                            <div class="col-md-4 all social ios android wow fadeInRight active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="polling-app.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/lazy-placeholder.png" data-original="<?php echo home_url(); ?>/wp-assets/images/portfolio/polling-slider.png" class="img-fluid lazy">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="polling-app.html">Polling App</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 all consumer wow fadeInRight active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="smart-watch-app.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/lazy-placeholder.png" data-original="<?php echo home_url(); ?>/wp-assets/images/portfolio/port-coolfire-bn.png" class="img-fluid lazy">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="smart-watch-app.html">Smart watch app</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all financial ios android wow fadeInRight active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="money-lending-app.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/lazy-placeholder.png" data-original="<?php echo home_url(); ?>/wp-assets/images/portfolio/lendstar-slider.png" class="img-fluid lazy">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="money-lending-app.html">Money lending app</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all social ios wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="artwork-painting.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/port-unpainted-01.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="artwork-painting.html">Artworks/Painting App</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all travel ios android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="flight-ticket-booking.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/port/atlasjet.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="flight-ticket-booking.html">Flight Ticket booking App</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all insurance ios android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="third-party-insurance.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/port-klickmall-01.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="third-party-insurance.html">Third-Party Insurance app</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all ecommerce ios android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="404.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/port/cheerwrap.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="egift-unwrapping.html">E-Gift Unwrapping App</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="media-management-app.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/port-jaja-01.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="media-management-app.html">Media Management App </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="target-music-app.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/port/targetmusic.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="target-music-app.html">Music App</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="gaming-app.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/port/flappybird.jpg" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="gaming-app.html">Gaming App</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all ios android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="bicycle-lock-app.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/port-lock8-01.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="bicycle-lock-app.html">Bicycle Lock App</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 all retail ios android wow fadeInRight  active" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="portfolio-post">
                                    <div class="portfolio-thumbnail">
                                        <a href="retail-business.html">
                                            <div class="arrow"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/arrow-right.png" alt="Arrow Right"></div>
                                            <div class="portfolio-img">
                                                <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/port-nightowl-01.png" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2 class="portfolio-title">
                                            <a href="retail-business.html">iBeacon app for Retail Business </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        
                      
                        </div>
                        <div class="load-more text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <button id="loadMore" class="btn" style="display: none;">Load More</button>
                        </div>
                    </div>
                </div>
            <img src="<?php echo home_url(); ?>/wp-assets/images/section-shape2.png" alt="image" class="cdn-secton-bottom">
            </section>
        </main>

<?php

   get_footer();

?>