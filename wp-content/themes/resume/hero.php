 <!-- header -->
 <header class="navbar-fixed-top">
     <nav>
        <?php
        wp_nav_menu(
            array(
                'theme-location' => 'topmenu'
                // 'menu-id' => 'topmenucontainer',    
            )
        ); 
        ?> 
    </nav> 
      
    </header>
    <!-- ./header -->
    
    <!-- home -->
    <div class="section  page-banner" id="home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4><?php bloginfo("name"); ?></h4>
                    <h1><?php echo html_entity_decode(get_bloginfo('description')); ?></h1> </div>
            </div>
        </div>
    </div>
    <!-- ./home -->