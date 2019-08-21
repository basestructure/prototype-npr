<?php
        
    if ( ! defined( "ABSPATH" ) ) {
        exit; // Exit if accessed directly
    }

    ?>

    <div class="module-mediaobject module-sublevel module-vertical feature-next">
        <div class="module-header">
            <div class="feature-pretitle">NEXT</div>
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
        </div>
        <div class="module-footer"></div>
    </div>