<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-cloud
 */

if(empty(get_theme_mod( 'goldy_cloud_pricing_plan_content')) && !is_plugin_active('slivery-extender/slivery-extender.php')){ ?>
<?php
}else{
$goldy_fintess_plan = Kirki::get_option( 'goldy_cloud_pricing_plan_content' );
if(empty($goldy_fintess_plan)){
    $goldy_fintess_plan  = Kirki::get_option( 'goldy_cloud_pricing_plan_content' );
}
?>
<div class="cloud_pricing_plan_section">
    <div class="pricing_plan_section_info">
        <div class="pricing_plan_data wow fadeInUp">
            <div class="pricing_plan_title heading_main_title">
                <h2><?php echo esc_html(get_theme_mod('goldy_cloud_pricing_plan_main_title', 'Pricing Plan'));?></h2>
                <span class="separator"></span>
            </div>
        </div>
        <div class="pricing_plan_main_content wow animate__zoomIn">
            <div class="pricing_plan_inner_data">
                <?php 
                $x = 1;
                foreach ( $goldy_fintess_plan as $info_item ) {
                    ?>
                    <div class="pricing-plan-inner-wrapper" id="pricing_back_id_<?php echo $x; ?>">
                        <div class="pp_inner">
                            <div class="pp_first_content">
                                <h2><?php echo esc_html($info_item['plan_type']); ?></h2>
                                <h2><?php echo esc_html($info_item['price_value']); ?></h2>
                                <p><?php echo esc_html($info_item['plan_time']); ?></p>
                                <svg viewBox="0 0 100 25">
                                    <path d="M0 30 V19 Q30 28 50 20 T100 25 V30z"></path>
                                </svg>
                            </div>
                            <div class="pp_second_content">
                                <div class="pp_description">
                                    <p><?php echo wp_kses_post($info_item['plan_description']); ?></p>
                                </div>
                                <?php 
                                    if(!empty($info_item['link_url'])) {
                                        if(!empty($info_item['link_text'])) {?>
                                    <div class="pp_btn button">
                                        <a href="<?php echo esc_attr($info_item['link_url']); ?>" class="buttons"><?php echo esc_html($info_item['link_text']); ?></a>
                                    </div>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                <?php 
                    $x++; 
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php 
}