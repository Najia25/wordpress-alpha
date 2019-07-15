<div class="comments">
    <h2 class="comment-title">
        <?php
        $alpha_cn = get_comments_number();
        if( $alpha_cn == 1){
         _e("1 Comment","alpha"); 
        }
        else{
            echo $alpha_cn." "."Comments";
        }
         ?>
    </h2>
    <div class="coment-list">
<?php
wp_list_comments();
if(!comments_open()){
_e("Comments are closed!","alpha");
}
?>
</div>
<div class="comments-pagination">
    <?php 
    the_comments_pagination(array(
      'screen_reader_text' => __("Pagination","alpha"),
      'prev_text' => '<'.__("Previous comments","alpha"),
      'next_text' => '>'.__("Next comments","alpha")
    ));
    
    ?>

</div>
<div class="comment-form">
<?php
comment_form();
?>
</div>
</div>

