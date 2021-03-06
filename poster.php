<!DOCTYPE html>
<?php
  require_once "util/layout_helper.php";

  LayoutHelper::displayHeadTag();
?>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">

<?php
  LayoutHelper::displayNavigationBar();
  LayoutHelper::displayBanner("banner-poster.png");
?>

            <div id="arrows">
                <a href="website.php"><img src="img/left-arrow.png" /></a>
                <a href="illustration.php"><img src="img/right-arrow.png" /></a>
                <a href="index.php"><img src="img/x.png" /></a>
            </div>

            <div id="main">
                <div id="portfolio">
                    <div id="images" class="clearfix">
                        <img src="img/arrested-big.png" />
                        <img src="img/arrested-gob.png" />
                        <img src="img/arrested-michael.png" />
                        <img src="img/arrested-buster.png" />
                    </div><!-- end div id="images" -->
                    <p class="first last">Here's a poster I made for the 2012 Arrested Development contest, hosted by Netflix.</p>
                </div><!-- end div id="web" -->
            </div><!-- end div id="main" -->

<?php
  LayoutHelper::displayFooter();
?>

        </div><!-- end div id="wrapper" -->

<?php
  LayoutHelper::loadCommonJavascriptMethods();
?>

    </body>
</html>