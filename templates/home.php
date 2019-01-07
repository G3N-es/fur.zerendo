<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./templates/home.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }

    $featured = pd_query_pages(array(
        "parent"    => pd_get_option("blog-path", ""),
        "cover"     => true,
        "sticky"    => false,
        "limit"     => 2
    ));
    $exclude = array();
?>
<div class="content">
    <div class="container">
        <?php if(count($featured) == 2){ ?>
            <div class="content-inner">
                <div class="content-featured">
                    <?php
                        foreach($featured AS $post){
                            $exclude[] = $post->key();
                            ?>
                                <div class="featured-post">
                                    <div class="post-thumbnail">
                                        <a href="<?php echo $post->permalink(); ?>" class="post-thumbnail">
                                            <img src="<?php echo $post->coverImage(); ?>" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="<?php echo $post->permalink(); ?>" class="post-title"><?php echo $post->title(); ?></a>
                                        <div class="post-excerpt">
                                            <?php echo pd_page_excerpt($post); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        <?php } ?>

        <div class="content-inner content-sidebyside">
            <div class="content-main">
                <?php
                    $query = pd_query_pages(array(
                        "parent"    => pd_get_option("blog-path"),
                        "exclude"   => $exclude
                    ));

                    if(count($query) > 0){
                        ?>
                            <div class="content-list">
                                <?php
                                    foreach($query AS $post){
                                        zerendo_post($post);
                                    }
                                ?>
                                <div class="content-pagination">
                                    <?php if(pd_is_next_page()){ ?>
                                        <a href="<?php echo pd_next_page(); ?>" class="pagination-next">Next Posts</a>
                                    <?php } ?>
                                    <?php if(pd_is_prev_page()){ ?>
                                        <a href="<?php echo pd_prev_page(); ?>" class="pagination-prev">Previous Posts</a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php
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
