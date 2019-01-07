<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./header.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }
?><!DOCTYPE html>
<html lang="<?php echo $site->language(); ?>">
	<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <?php echo Theme::metaTagTitle(); ?>
        <?php echo Theme::metaTagDescription(); ?>

        <link type="text/css" rel="stylesheet" href="<?php echo Theme::src("css/font-awesome.min.css?ver=4.7.0"); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo Theme::src("css/zerendo.general.css?ver=1.0.0"); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo Theme::src("css/zerendo.design.css?ver=1.0.0"); ?>" />
        <?php if(pd_get_option("color-scheme", "white") == "black"){ ?>
            <link type="text/css" rel="stylesheet" href="<?php echo Theme::src("css/zerendo.dark.css?ver=1.0.0"); ?>" />
        <?php } ?>
        <link type="text/css" rel="stylesheet" href="<?php echo Theme::src("css/zerendo.responsive.css?ver=1.0.0"); ?>" />

        <script type="text/javascript" src="<?php echo Theme::src("js/zerendo.js?ver=1.0.0"); ?>"></script>

        <?php Theme::plugins("siteHead"); ?>
	</head>
    <body class="<?php echo pd_body_classes(); ?>">
        <?php Theme::plugins("siteBodyBegin"); ?>
        <div class="topbar">
            <div class="container">
                <div class="container-left">
                    <div class="topbar-date">
                        <?php echo date("l, d. F Y"); ?>
                    </div>
                </div>
                <div class="container-right">
                    <?php
                        echo pd_render_menu("top-menu", array(
                            "container" => false,
                            "menu"      => "ul.topbar-menu",
                            "depth"     => 1
                        ));
                    ?>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="container">
                <div class="header-logo">
                    <a href="<?php echo Theme::siteUrl(); ?>">
                        <span><?php echo Theme::title(); ?></span>
                    </a>
                </div>
                <div id="header-menu" class="header-menu">
                    <?php
                        echo pd_render_menu("main-menu", array(
                            "container" => false,
                            "menu"      => "ul.main-menu.{sub-}menu#main-menu",
                            "children"  => "has-submenu",
                            "active"    => "active",
                            "parent"    => "active",
                            "anchor"    => "active",
                            "depth"     => 3
                        ));
                    ?>
                    <div class="mobile-menu" data-toggle="active" data-target="#header-menu"><span class="fa fa-bars"></span></div>
                </div>
            </div>
        </div>

        <div class="showcase">
            <img src="<?php echo pd_get_option("header-image", "test"); ?>" />

            <div class="showcase-overlay">
                <div class="container">
                    <div class="overlay-item">
                        <?php if(zerendo_whereAmI() !== "Homepage"){ ?>
                            <span class="item-inner animate"><?php echo zerendo_whereAmI(); ?></span>
                            <a href="<?php echo Theme::siteUrl(); ?>"><span>Go back <span class="fa fa-home"></span></span></a>
                        <?php } else { ?>
                            <span class="item-inner"><?php echo zerendo_whereAmI(); ?></span>
                        <?php } ?>
                    </div>
                    <div class="overlay-menu">

                    </div>
                </div>
            </div>
        </div>
