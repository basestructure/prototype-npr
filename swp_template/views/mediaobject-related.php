<?php
    
if ( ! defined( "ABSPATH" ) ) {
    exit; // Exit if accessed directly
}

global $use_this_id;

// Get the Post Type name
$obj = get_post_type_object( get_post_type( $use_this_id ) );

?>

<div class="module-mediaobject module-sublevel module-vertical feature-next">
    <div class="module-header">
        <div class="feature-pretitle">RELATED POSTS</div>
    </div>
    <div class="module-inner">
        <div class="item-figure">
        <?php $swp_field = get_the_post_thumbnail( $use_this_id, 'card-ratio169' ); ?>
        <?php if ( $swp_field ): ?>
            <div class="item-pic"><a href="<?php echo get_the_permalink( $use_this_id ); ?>"><?php echo $swp_field; ?></a></div>
        <?php endif ?>
        </div>
        <div class="item-info">
            <div class="item-title">
                <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </div>
        </div>
        <div class="item-info">
            <div class="item-posttype">
                Post Type: <?php echo $obj->labels->singular_name; ?>
            </div>
        </div>
    </div>
    <div class="module-footer"></div>
</div>