<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: News Magazine
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>News Magazine | Full Width</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css"/>
</head>
<body id="top">
<div class="wrapper col0">
    <div id="topline">
        <p>Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com</p>
        <ul>
            <li><a href="#">Libero</a></li>
            <li><a href="#">Maecenas</a></li>
            <li><a href="#">Mauris</a></li>
            <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
        <br class="clear"/>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="header">
        <div class="fl_left">
            <h1><a href="../index.html"><strong>N</strong>ews <strong>M</strong>agazine</a></h1>
            <p>Free Website Template</p>
        </div>
        <div class="fl_right"><a href="#"><img src="../images/demo/468x60.gif" alt=""/></a></div>
        <br class="clear"/>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
    <div id="topbar">
        <div id="topnav">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="style-demo.html">Style Demo</a></li>
                <li class="active"><a href="full-width.html">Full Width</a></li>
                <li><a href="#">DropDown</a>
                    <ul>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                    </ul>
                </li>
                <li class="last"><a href="#">A Long Link Text</a></li>
            </ul>
        </div>
        <div id="search">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;"
                           onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;"/>
                    <input type="submit" name="go" id="go" value="Search"/>
                </fieldset>
            </form>
        </div>
        <br class="clear"/>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="breadcrumb">
        <ul>
            <li class="first">You Are Here</li>
            <li>&#187;</li>
            <li><a href="#">Home</a></li>
            <li>&#187;</li>
            <li><a href="#">Grand Parent</a></li>
            <li>&#187;</li>
            <li><a href="#">Parent</a></li>
            <li>&#187;</li>
            <li class="current"><a href="#">Child</a></li>
        </ul>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div class="container">

        <?php
        include('connection.php');
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            //        $title = $_POST['title'];
            //        $content = $_POST['content'];
            $query3 = mysqli_query($conn, "select * from test1111 where id ='$id'");
            //      $query1 = mysqli_query($conn, "select * from upload where idupload='$id'");
            $query2 = mysqli_fetch_assoc($query3);
            echo "<h1>" . $query2['title'] . "</h1><br>";
            echo "" . $query2['content'] . "";
        }
        ?>
        <!--    <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>-->
        <!--    <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>-->
        <!--    <ul>-->
        <!--      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>-->
        <!--      <li>Etiam vel sapien et est adipiscing commodo.</li>-->
        <!--      <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>-->
        <!--      <li>Donec et dui dolor, in lacinia leo.</li>-->
        <!--      <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>-->
        <!--    </ul>-->
        <!--    <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet nibh fames nulla curabitudin.</p>-->
        <!--    <ol>-->
        <!--      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>-->
        <!--      <li>Etiam vel sapien et est adipiscing commodo.</li>-->
        <!--      <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>-->
        <!--      <li>Donec et dui dolor, in lacinia leo.</li>-->
        <!--      <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>-->
        <!--    </ol>-->
        <!--    <br class="clear" />-->
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="adblock">
        <div class="fl_left"><a href="#"><img src="../images/demo/468x60.gif" alt=""/></a></div>
        <div class="fl_right"><a href="#"><img src="../images/demo/468x60.gif" alt=""/></a></div>
        <br class="clear"/>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="footer">
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox last">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <br class="clear"/>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="socialise">
        <ul>
            <li><a href="#"><img src="../layout/images/facebook.gif" alt=""/><span>Facebook</span></a></li>
            <li><a href="#"><img src="../layout/images/rss.gif" alt=""/><span>FeedBurner</span></a></li>
            <li class="last"><a href="#"><img src="../layout/images/twitter.gif" alt=""/><span>Twitter</span></a></li>
        </ul>
        <div id="newsletter">
            <h2>NewsLetter Sign Up !</h2>
            <p>Please enter your Email and Name to join.</p>
            <form action="#" method="post">
                <fieldset>
                    <legend>Digital Newsletter</legend>
                    <div class="fl_left">
                        <input type="text" value="Enter name here&hellip;"
                               onfocus="this.value=(this.value=='Enter name here&hellip;')? '' : this.value ;"/>
                        <input type="text" value="Enter email address&hellip;"
                               onfocus="this.value=(this.value=='Enter email address&hellip;')? '' : this.value ;"/>
                    </div>
                    <div class="fl_right">
                        <input type="submit" name="newsletter_go" id="newsletter_go" value="&raquo;"/>
                    </div>
                </fieldset>
            </form>
            <p>To unsubsribe please <a href="#">click here &raquo;</a>.</p>
        </div>
        <br class="clear"/>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
    <div id="copyright">
        <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/"
                                           title="Free Website Templates">OS Templates</a></p>
        <br class="clear"/>
    </div>
</div>
</body>
</html>