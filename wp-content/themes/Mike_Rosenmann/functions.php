<?php


function theme_name_scripts() {
    wp_enqueue_style( 'fonts.googl', 'https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display');
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/custom.css');

    wp_enqueue_script( 'bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}



function get_latest_link(){

	$new_post = [];

	$posts = get_posts( array(

	  'post_type'   => 'post'

	));

	foreach ($posts as $key => $value) {
		//print_r($value);
		//echo $value->ID;
		//echo "<br/>";
		$if_check = get_field('button_check',$value->ID);
		//echo $if_check;
		//echo $key->ID;
		$new_post[$key] = array(
          'slug' => $value->post_name,
          'if_check' => get_field('button_check',$value->ID)
		 );

	}
	foreach ($new_post as $key => $value) {
		if($value['if_check'] == 'yes'){
			$res = $value['slug'];
		}else{

		}
	}
	return $res;
}

function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");
	            submit_button();
	        ?>
	    </form>
		</div>
	<?php
}


function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");


function display_logo_element()
{
	?>
    	<input type="text" name="logo_url" id="logo_url" value="<?php echo get_option('logo_url'); ?>" />
    	<span>Use -> get_option('logo_url')</span>
    <?php
}

function display_insta_element()
{
	?>
    	<input type="text" name="insta_url" id="insta_url" value="<?php echo get_option('insta_url'); ?>" />
    	<span>Use -> get_option('insta_url')</span>
    <?php
}

function display_message_element()
{
	?>
    	<input type="text" name="message_url" id="message_url" value="<?php echo get_option('message_url'); ?>" />
    	<span>Use -> get_option('message_url')</span>
    <?php
}
function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    	<span>Use -> get_option('facebook_url')</span>
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");

	add_settings_field("logo_url", "Logo text", "display_logo_element", "theme-options", "section");
	add_settings_field("insta_url", "Instagram Profile Url", "display_insta_element", "theme-options", "section");
    add_settings_field("message_url", "Messanger Profile Url", "display_message_element", "theme-options", "section");
     add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");

    register_setting("section", "logo_url");
    register_setting("section", "insta_url");
    register_setting("section", "message_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_theme_panel_fields");




function get_theme_path(){
    return get_template_directory_uri();
}
