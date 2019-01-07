<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./templates/archive.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }
    global $url, $content;

    if($url->whereAmI() === "tag"){
        $tag = new Tag($url->slug());

        $title = "Tag: " . $tag->name();
        $query = pd_query_pages(array(
            "parent"    => pd_get_option("blog-path"),
            "sticky"    => null,
            "tags"      => $tag->key()
        ));
    } else if($url->whereAmI() === "category"){
        $cat = new Category($url->slug());

        $title = "Category: " . $cat->name();
        $desc = $cat->description();
        $query = pd_query_pages(array(
            "parent"    => pd_get_option("blog-path"),
            "sticky"    => null,
            "category"  => $cat->key()
        ));
    } else {
        $title = "Archive";
        $query = $content;
    }
?>
<div class="content">
    <div class="container">
        <div class="content-inner">
            <div class="content-title"><?php echo $title; ?></div>
            <?php if(isset($desc) && strlen($desc) > 0){ ?>
                <div class="content-subtitle"><?php echo $desc; ?></div>
            <?php } ?>
        </div>

        <div class="content-inner content-sidebyside">
            <div class="content-main">
                <?php
                    if(count($query) > 0){
                        ?><div class="content-list"><?php
                        foreach($query AS $post){
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
