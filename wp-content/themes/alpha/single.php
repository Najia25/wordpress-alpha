<?php
$alpha_layout_class = "col-md-10 offset-md-1";
$alpha_text_class = "text-center";

if(is_active_sidebar("footer-left"))
{
    $alpha_layout_class = "col-md-8";
    $alpha_text_class = "";
}
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="container">
        <div class="row">
            <div class="<?php echo $alpha_layout_class; ?>">
                <div class="posts" <?php ?>>
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                    <div <?php post_class(); ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 <?php echo $alpha_text_class; ?>">
                                    <h2 class="post-title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="">
                                        <em><?php the_author_posts_link(); ?></em><br />
                                        <?php echo get_the_date(); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider">
                                        <?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */
                                           if( $attachments->exist() ){
                                                while( $attachment = $attachments->get() ) {
                                                    ?>
                                        <div>
                                            <?php
                                                 echo $attachments->image
                                                 ?>
                                        </div>
                                        </li>
                                        <?php
                                                 } 
                                                ?>
                                        </ul>
                                        <?php }
                                            ?>
                                    </div>
                                    <p>
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                $thumbnail_url = get_the_post_thumbnail_url(null,"large");
                                                printf( '<a class="popup" href="%s" data-featherlight="image">',$thumbnail_url);
                                                the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
                                                echo '</a>';
                                            }

                                            the_content();

                                            wp_link_pages();

                                            ?>
                                    </p>
                                </div>
                                <div class="col-md-10 offset-md-1">
                                    <div class="row">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-8"></div>
                                    </div>
                                </div>
                                <?php if ( comments_open() ): ?>
                                <div class="col-md-10 offset-md-1">
                                    <?php
                                            //comments_template();
                                            ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>

                    <div class="container post-pagination">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <?php
                                the_posts_pagination( array(
                                    "screen_reader_text" => ' ',
                                    "prev_text"          => "New Posts",
                                    "next_text"          => "Old Posts"
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                if ( is_active_sidebar( "footer-left" ) ) {
                    dynamic_sidebar( "footer-left" );
                }
                ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
