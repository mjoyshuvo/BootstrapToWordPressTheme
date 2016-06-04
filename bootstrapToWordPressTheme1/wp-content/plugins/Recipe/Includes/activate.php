<?php
/**
 * Created by PhpStorm.
 * User: Shuvo
 * Date: 6/2/2016
 * Time: 2:09 AM
 */
function r_activate_plugin(){
    if (version_compare(get_bloginfo('version'),'4.2','<' )){
       wp_die(__('You must update wordpress to use this plugin','recipe') );
    }
}