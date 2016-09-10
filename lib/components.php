<?php

/* These functions will print out various components of the web page

*/
function pageOpening($pageTitle, $index) {
printHeader($pageTitle);
?>
</head>
<?php
printNavigation($pageTitle, $index);

}
function printHeader($pageTitle)
{
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href=".//css/header.css">
<link rel="stylesheet" type="text/css" href="mdl/material.css">
<link href="materialDesignIcons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href=".//css/body.css">
   <link rel="stylesheet" href="material-modal-master/dist/css/material-modal.min.css">
   <script src="material-modal-master/src/js/material-modal.js"></script>
   <script src="dialog-polyfill-master/dialog-polyfill.js"></script>
   <link rel="stylesheet" href="dialog-polyfill-master/dialog-polyfill.css">
   <script src="jquery-2.2.2.min.js"></script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo($pageTitle); ?> - Ian Shinbrot</title>
<?php
}

function printNavigation($pageTitle, $page)
{
?>
 <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout__title">
                    <span class="mdl-layout__title"><?php echo($pageTitle); ?> - Ian Shinbrot</span>
                </span>
            </div>
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font mdl-layout--fixed-header">
                  <a class="mdl-navigation__link <?php if ($page=="Home") {echo "is-active\"";} else echo "\""?>href="Home.php">Home</a>
                    <a class="mdl-navigation__link <?php if ($page=="About") {echo "is-active\"";} else echo "\""?>href="About.php">About</a>
                    <a class="mdl-navigation__link <?php if ($page=="Projects") {echo "is-active\"";} else echo "\""?> href="Projects.php">Projects</a>
                    <a class="mdl-navigation__link <?php if ($page=="Contact") {echo "is-active\"";} else echo "\""?>href="Contact.php">Contact</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                     <a class="mdl-navigation__link <?php if ($page=="Home") {echo "is-active\"";} else echo "\""?>href="Home.php">Home</a>
                    <a class="mdl-navigation__link <?php if ($page=="About") {echo "is-active\"";} else echo "\""?>href="About.php">About</a>
                    <a class="mdl-navigation__link <?php if ($page=="Projects") {echo "is-active\"";} else echo "\""?> href="Projects.php">Projects</a>
                    <a class="mdl-navigation__link <?php if ($page=="Contact") {echo "is-active\"";} else echo "\""?>href="Contact.php">Contact</a>
            </nav>
        </div>

<?php
}

function printFooter($pageTitle)
{
?>
 <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo"><?php echo($pageTitle); ?> - Ian Shinbrot</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </div>
            </footer>

<?php

}
