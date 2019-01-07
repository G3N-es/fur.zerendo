<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./templates/404.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }

    global $content;
?>
<div class="content">
    <div class="container">
        <div class="content-inner">
            <div class="content-title">Search</div>
        </div>

        <div class="content-inner content-sidebyside">
            <div class="content-main">
                <?php
                    if(count($content) > 0){
                        ?><div class="content-list"><?php
                        foreach($content AS $post){
                            zerendo_post($post);
                        }
                        ?></div><?php
                    } else {
                        ?>
                            <h1 class="post-empty"></h1>
                        <?php
                    }
                ?>
            </div>

            <div class="content-aside">
                <?php Theme::plugins("siteSidebar"); ?>
            </div>
        </div>
    </div>
</div>
