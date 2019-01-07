<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./init.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }

    ##
    ##  DEFINE BASICS
    ##
    define("FUR_ZERENDO", "fur.zerendo");
    define("FUR_ZERENDO_VERSION", "1.0.0");


    ##
    ##  LOAD PAW.DESIGNER STUFF
    ##
    if(!function_exists("pd_load_theme")){
        require_once("system/paw-designer.func.php");
    }
    pd_load_theme();


    ##
    ##  THEME FUNCTIONS
    ##

    /*
     |  ZERENDO WHEREAMI
     |  @since  0.1.0
     */
    function zerendo_whereAmI(){
        global $page;

        if(pd_is_home(true)){
            return "Homepage";
        } else if(pd_is_404()){
            return "Error 404";
        } else if(pd_is_search()){
            return "Search";
        } else if(pd_is_category()){
            return "Category Archive";
        } else if(pd_is_tag()){
            return "Tag Archive";
        } else if(pd_is_page() && !pd_is_static()){
            return "Post »" . $page->title() . "«";
        }
        return "Page »" . $page->title() . "«";
    }

    /*
     |  BLOG POST WITHIN LOOPS
     |  @since  0.1.0
     */
    function zerendo_post($post){
        if(!is_a($post, "Page")){
            return false;
        }

        $id = preg_replace("#[^a-z0-9_-]#", "-", $post->key());
        $thumb = $post->coverImage();
        ?>
            <div class="<?php echo pd_page_classes($post, "", "post"); ?>">
                <div class="post-thumbnail">
                    <a href="<?php echo $post->permalink(); ?>">
                        <?php if($thumb){ ?>
                            <img src="<?php echo $post->coverImage(); ?>" />
                        <?php } else { ?>
                            <span class="thumbnail-empty"></span>
                        <?php } ?>
                    </a>
                </div>

                <div class="post-content">
                    <a href="<?php echo $post->permalink(); ?>" class="post-title"><?php echo $post->title(); ?></a>
                    <div class="post-excerpt">
                        <?php echo pd_page_excerpt($post, 175); ?>
                    </div>
                    <div class="post-meta">
                        <a href="<?php echo $post->permalink(); ?>" class="post-readmore">Readmore</a>
                    </div>
                </div>
            </div>
        <?php
    }
