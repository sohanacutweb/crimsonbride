<?php
$ver = '1.0';

global $wp;
$settings['galleryID'] = $galleryID;
$settings['post_url'] = add_query_arg($_SERVER['QUERY_STRING'], '', home_url($wp->request));
$settings['module_url'] = plugins_url('/', __FILE__);

wp_enqueue_style('flagallery-amron-skin', plugins_url('/css/amron.css', __FILE__), array(), $ver);
wp_enqueue_style('flagallery-amron-skin-slider', plugins_url('/css/fla_vit_slider.css', __FILE__), null, '2.0');
wp_enqueue_style('flagallery-amron-skin-itemMenu', plugins_url('/css/fla_vit_itemMenu.css', __FILE__), null, '2.0');
wp_enqueue_style('flagallery-amron-skin-modadalWin', plugins_url('/css/fla_vit_modalWin.css', __FILE__), null, '2.0');
wp_enqueue_script('flagallery-amron-skin', plugins_url('/js/amron.js', __FILE__), array(), $ver, true);

?>
<script type="text/javascript">
	(function(){
		this['<?php echo "FlaGallery_".esc_attr($galleryID); ?>']={'settings':<?php echo json_encode($settings);?>, 'data':<?php echo json_encode($data);?>, };
	})();
</script>
