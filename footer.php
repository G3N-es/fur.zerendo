<?php
/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./footer.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }
?>
        <div class="footer">
            <div class="container">
                <div class="container-left">
                    <?php echo Sanitize::htmlDecode($site->footer()); ?>
                </div>
                <div class="container-right text-right">
                    fur.<b>zerendo</b> Theme designed by <a href="https://www.pytes.net" class="pytesNET" target="_blank">pytesNET</a><br />
                    Proudly Powered by <a href="https://www.bludit.com" class="bludit" target="_blank">Bludit CMS v3.5.0</a>
                </div>
            </div>
        </div>
        <?php Theme::plugins("siteBodyEnd"); ?>
    </body>
</html>
