<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./index.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }

    // Render Header
    pd_get_part("header");

    // Render Homepage
    if(pd_is_home(true)){
        pd_get_part("templates", "home");
    } else

    // Render 404
    if(pd_is_404()){
        pd_get_part("templates", "404");
    } else

    // Render Search
    if(pd_is_search()){
        pd_get_part("templates", "search");
    } else

    // Render Archive
    if(pd_is_category() || pd_is_tag()){
        pd_get_part("templates", "archive");
    } else

    // Render Page Templates
    if(pd_is_page()){
        if(pd_is_template("fullwidth")){
            pd_get_part("templates", "page-fullwidth");
        } else if(pd_is_static()){
            pd_get_part("templates", "page-static");
        } else {
            pd_get_part("templates", "page");
        }
    }

    // Render Footer
    pd_get_part("footer");
