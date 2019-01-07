<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./theme.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.abyss
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }

##
##  YOU CAN CONFIGURE THE SETTINGS BY EDITING THE FUNCTIONS BELOW
##
##  OR YOU DOWNLOAD THE LATEST paw.designer PLUGIN, WHICH HANDLES
##  EVERYTHING FOR YOUR... DON'T WAIT, VISIT THE GITHUB REPO NOW:
##
##  https://www.github.com/pytesNET/paw.designer
##

    /*
     |  THEME CONFIGURATION :: COLOR SCHEME
     |  Available values:
     |      "white"     The white color scheme
     |      "black"     The black color scheme
     */
    pd_set_option("color-scheme", "white");

    /*
     |  THEME CONFIGURATION :: BLOG POSTS PATH
     |  Allows you to restrict the shown blog posts to a specific parent page slug.
     */
    pd_set_option("blog-path", "");

    /*
     |  THEME CONFIGURATION :: HEADER IMAGE
     |  The absolute URL to the header image.
     */
    pd_set_option("header-image", pd_theme_url("img/header-wolf.jpg"));

    /*
     |  THEME CONFIGURATION :: TOP MENU
     |  The header menu as ARRAY.)
     */
    pd_set_menu("top-menu", array(
        "/about-us" => array(
            "title"     => "About Us"
        ),
        "/contact"  => array(
            "title"     => "Contact"
        ),
        "/imprint"  => array(
            "title"     => "Imprint"
        ),
        "/privacy"  => array(
            "title"     => "Privacy Policy"
        )
    ));

    /*
     |  THEME CONFIGURATION :: MAIN MENU
     |  The main menu as ARRAY.
     */
    pd_set_menu("main-menu", array(
        "/"         => array(
            "title"     => "Homepage"
        ),
        "/main"     => array(
            "title"     => "Main Menu",
            "children"  => array(
                "/main/sub1"    => array(
                    "title"     => "Sub Menu #1"
                ),
                "/main/sub2"    => array(
                    "title"     => "Sub Menu #2",
                    "children"  => array(
                        "/main/sub2/sub1"   => array(
                            "title"     => "Sub Sub #1"
                        ),
                        "/main/sub2/sub2"   => array(
                            "title"     => "Sub Sub #2"
                        ),
                        "/main/sub2/sub3"   => array(
                            "title"     => "Sub Sub #3"
                        )
                    )
                ),
                "/main/sub3"    => array(
                    "title"     => "Sub Menu #3"
                )
            )
        ),
        "/layouts"   => array(
            "title"     => "Page Layouts",
            "children"  => array(
                "/layout-fullwidth" => array(
                    "title"     => "Fullwidth"
                )
            )
        )
    ));


    ##
    ##  CONFIGURE OUTPUT WITHIN THE PAW.DESIGNER PLUGIN
    ##
    if(defined("PAW_DESIGNER")){
        /*
         |  CONFIGURE COLOR SCHEME
         */
        pd_configure_option("color-scheme", array(
            "type"          => "select",
            "title"         => pd__("Color Scheme"),
            "description"   => pd__("The used Color Scheme of the theme."),
            "options"       => array(
                "white" => pd__("White Scheme"),
                "black" => pd__("Black Scheme")
            )
        ));

        /*
         |  CONFIGURE BLOG PATH
         */
        pd_configure_option("blog-path", array(
            "type"          => "pages",
            "title"         => pd__("Blog Parent"),
            "description"   => pd__("Select the Parent element where your blog posts gets published."),
            "placeholder"   => pd__("Start typing a page title to see a list of suggestions.")
        ));

        /*
         |  CONFIGURE HEADER IMAGE
         */
        pd_configure_option("header-image", array(
            "type"          => "image",
            "title"         => pd__("Header Image"),
            "description"   => pd__("The used Header Image (at least 1920 x 600).")
        ));

        /*
         |  CONFIGURE TOPBAR MENU
         */
        pd_configure_menu("top-menu", array(
            "title"         => pd__("Top Menu"),
            "description"   => pd__("This menu gets displayed on the top of your page."),
        ));

        /*
         |  CONFIGURE MAIN MENU
         */
        pd_configure_menu("main-menu", array(
            "title"         => pd__("Main Menu"),
            "description"   => pd__("This menu gets displayed after the header image, before the content gets shown."),
        ));
    }
