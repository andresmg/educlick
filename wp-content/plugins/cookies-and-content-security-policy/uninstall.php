<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

$cacsp_options = array(
	'cacsp_option_active', 
	'cacsp_option_actived', 
    'cacsp_option_always_scripts', 
    'cacsp_option_always_images', 
    'cacsp_option_always_frames', 
    'cacsp_option_always_forms', 
    'cacsp_option_always_worker', 
    'cacsp_option_statistics_scripts', 
    'cacsp_option_statistics_images', 
    'cacsp_option_statistics_frames', 
    'cacsp_option_statistics_forms', 
    'cacsp_option_statistics_worker', 
    'cacsp_option_experience_scripts', 
    'cacsp_option_experience_images', 
    'cacsp_option_experience_frames', 
    'cacsp_option_experience_forms', 
    'cacsp_option_experience_worker', 
    'cacsp_option_markerting_scripts', 
    'cacsp_option_markerting_images', 
    'cacsp_option_markerting_frames', 
    'cacsp_option_markerting_forms', 
    'cacsp_option_markerting_worker', 
	'cacsp_option_text_header', 
	'cacsp_option_text_info', 
	'cacsp_option_text_link_text', 
	'cacsp_option_text_settings', 
	'cacsp_option_text_always_allow_header', 
	'cacsp_option_text_always_allow_description', 
	'cacsp_option_text_statistics_header', 
	'cacsp_option_text_statistics_description', 
	'cacsp_option_text_experience_header', 
	'cacsp_option_text_experience_description', 
	'cacsp_option_text_marketing_header', 
	'cacsp_option_text_marketing_description', 
	'save_cacsp_settings_texts', 
	'cacsp_option_settings_button', 
	'cacsp_option_accept_all_button', 
	'cacsp_option_save_button', 
	'cacsp_review_settings_description', 
	'cacsp_review_settings_button', 
	'cacsp_not_allowed_description', 
	'cacsp_not_allowed_button', 
	'cacsp_option_only_csp', 
	'cacsp_option_own_style', 
	'cacsp_option_own_js', 
	'cacsp_option_banner', 
	'cacsp_option_allow_use_site', 
	'cacsp_option_hide_unused_settings_row', 
	'cacsp_option_grandma', 
	'cacsp_option_refuse_button', 
	'cacsp_option_show_refuse_button', 
	'cacsp_option_forms', 
	'cacsp_option_worker', 
	'cacsp_option_blob', 
	'cacsp_option_meta',
	'cacsp_option_debug',
	'cacsp_option_no_x_csp', 
	'cacsp_option_settings_policy_link', 
	'cacsp_option_settings_policy_link_url', 
	'cacsp_option_color_backdrop', 
	'cacsp_option_color_modal_bg', 
	'cacsp_option_color_modal_header_bg', 
	'cacsp_option_color_modal_list_border', 
	'cacsp_option_color_modal_text_color', 
	'cacsp_option_color_modal_header_text_color', 
	'cacsp_option_color_text_on', 
	'cacsp_option_color_off', 
	'cacsp_option_color_on', 
	'cacsp_option_color_settings_button', 
	'cacsp_option_color_settings_button_border', 
	'cacsp_option_color_settings_button_text', 
	'cacsp_option_color_refuse_button', 
	'cacsp_option_color_refuse_button_border', 
	'cacsp_option_color_refuse_button_text', 
	'cacsp_option_color_save_button', 
	'cacsp_option_color_save_button_border', 
	'cacsp_option_color_save_button_text', 
	'cacsp_option_color_accept_button', 
	'cacsp_option_color_accept_button_border', 
	'cacsp_option_color_accept_button_text', 
);

foreach ( $cacsp_options as $cacsp_option ) {
	delete_option( $cacsp_option );
	delete_site_option( $cacsp_option );
}