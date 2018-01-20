<?php
function asif_service_box_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'link_text' => 'See more',
        'icon_type' => 1,
        'upload_icon' => '',
        'choose_icon' => '',
        'box_background' => '',
    ), $atts) );
	
	
    if($type == 1) {
        $link_source = get_page_link($link_to_page);
    } else {
        $link_source = $external_link;
    }
	
    $box_bg_array = wp_get_attachment_image_src( $box_background, 'medium');
	
    $asif_service_box_markup = '
        <div class="asif-service-box">
            <div style="background-image: url('. $box_bg_array[0].')" class="asif-service-icon">
                <div class="asif-service-table">
                    <div class="asif-service-tablecell">';
        if( $icon_type == 1 ) {
            $service_icon_array = wp_get_attachment_image_src( $upload_icon, 'thumbnail');
            $asif_service_box_markup .= '<img src="'.$service_icon_array[0].'" alt="">';
        } else {
            $asif_service_box_markup .= '<i class="'.$choose_icon.'"></i>';
        }
        $asif_service_box_markup .= '
                    </div>
                </div>
            </div>
            <div class="asif-service-content">
                <h3>'.$title.'</h3>
                '.wpautop($desc).'
                <a href="'.$link_source.'" class="service-more-btn">'.$link_text.'</a>
            </div>
        </div>
    ';
    $asif_service_box_markup .= '';
    return $asif_service_box_markup;
}
add_shortcode('asif_service_box', 'asif_service_box_shortcode');
