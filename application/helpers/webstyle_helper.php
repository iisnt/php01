<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function default_style(){
        
        //默认css
        $data['style_css']=base_url().'/web-style/bootstrap/css/bootstrap.min.css';
        $data['style_css_main']=base_url().'/web-style/default/css/style.iisnt.css';
        //默认jq
        $data['style_jq']=base_url().'/web-style/default/js/jquery-2.0.3.min.js';
        //默认js
        $data['style_js']=base_url().'/web-style/bootstrap/js/bootstrap.min.js';

        return $data;
    }

    function pure_style(){
        //默认css
        $data['style_css']='http://yui.yahooapis.com/pure/0.3.0/pure-min.css';
        $data['style_css_main']=base_url().'/web-style/default/css/style.iisnt.css';

        return $data;
    }

    function hui_style(){
        //H-hui框架
        $data['style_lib']=base_url().'/web_style/hui/Lib/';
        $data['style_static']=base_url().'/web-style/hui/static/';

        $data['style_css_main']=base_url().'/web-style/default/css/style.iisnt.css';
        $data['style_jq']=base_url().'/web-style/default/js/jquery-2.0.3.min.js';
        return $data;
    }