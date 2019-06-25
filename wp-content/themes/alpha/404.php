<?php 
get_header();
?>
<body <?php body_class(array("error-css")); ?>>

<div class="errorview">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-text">
                <h1 class="text-center">
                    <?php _e("Sorry! We couldn't find what you were looking for..","alpha"); ?>
                </h1>
                </div>
                
            </div>
        </div>
    </div>
</div>

</body>
<?php 
get_footer();
