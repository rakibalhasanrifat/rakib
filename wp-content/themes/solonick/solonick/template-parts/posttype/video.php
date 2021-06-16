<?php if(get_post_meta($post->ID,'rnr_bl-video',true)):?>
<div class="fl-wrap blog-media">
    <div class="iframe-holder fl-wrap">
        <div class="resp-video">
            <iframe src="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl-video',true));?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php endif;?>