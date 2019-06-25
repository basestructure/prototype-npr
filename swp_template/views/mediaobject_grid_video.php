<?php
        
    if ( ! defined( "ABSPATH" ) ) {
        exit; // Exit if accessed directly
    }

    ?>

    <div class="module-mediaobject module-reverse module-sublevel">
        <div class="module-header"></div>
        <div class="module-inner">
            <div class="item-figure">
                <?php $swp_field = the_post_thumbnail( 'card-ratio169', TRUE ); ?>
                <?php if ( $swp_field ): ?>
                    <div class="item-pic"><?php echo wp_get_attachment_image( $swp_field, $size = 'icon-ratio169' ); ?></div>
                <?php endif ?>
            </div>
            <div class="item-info">
                <div class="item-title">
                    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                </div>
            </div>
        </div>
        <div class="module-footer"></div>
    </div>