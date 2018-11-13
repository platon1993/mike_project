<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div class="container-fluid">
    <header class="header">

        <div class="row">
            <nav class="navbar navbar-default ">
                <div class="mobile_menu ">
                    <div class="nav-header">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand mobile-menu-style" href="#">get_field("logo_text")</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Get In Touch</a></li>
                                <li><a href="">About Mike</a></li>
                                <li><a href="">Beast Mode</a></li>
                            </ul>

                        </div>
                    </div>
                    <button name="singlebutton" class="btn btn-primary center-block button-top">Latest blog: "How to be productive"</button>
                </div>
                <div class="laptop_menu">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a class="navbar-brand" href="#"><?php echo get_field("logo_text")?></a>
                        </div>
                        <div class="col-lg-4 col-md-3 center-button">
                            <center> <button name="singlebutton" class="btn btn-primary center-block button-top">Latest blog: "How to be productive"</button></center>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <?php wp_nav_menu(array("name" => "main",
                                        'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'));?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>