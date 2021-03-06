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
                <a href="covers.php"><img src="img/left-arrow.png" /></a>
                <a href="cards.php"><img src="img/right-arrow.png" /></a>
                <a href="index.php"><img src="img/x.png" /></a>
            </div>

            <div id="main">
                <div id="portfolio">
                    <div id="images" class="clearfix">
                        <img src="img/records.jpg" />
                        <img src="img/records-big1.jpg" />
                        <img src="img/records-big2.jpg" />
                        <img src="img/records-big3.jpg" />
                    </div><!-- end div id="images" -->
                    <p class="first last">Here's a triptych I created for school, for a record company in Cambridge, MA. These photographs were taken by Jenee Cook.</p>
                </div><!-- end div id="portfolio" -->
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