<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./templates/page-static.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }
    global $page;
?>
<div class="content">
    <div class="container">
        <div class="content-inner">
            <div class="content-title"><?php echo $page->title(); ?></div>
            <?php if(!empty($page->description())){ ?>
                <div class="content-subtitle"><?php echo $page->description(); ?></div>
            <?php } ?>
        </div>

        <div class="content-inner content-sidebyside">
            <div class="content-main">
                <?php Theme::plugins("pageBegin"); ?>
                <div class="content-post">
                    <?php
                        $cover = $page->coverImage();
                        if(!empty($cover)){
                            ?>
                                <div class="post-thumbnail">
                                    <img src="<?php echo $cover; ?>" />
                                </div>
                            <?php
                        }
                        echo $page->content();
                    ?>
                </div>
                <?php Theme::plugins("pageEnd"); ?>
            </div>

            <div class="content-aside">
                <?php Theme::plugins("siteSidebar"); ?>
            </div>
        </div>
    </div>
</div>
