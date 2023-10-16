<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Prog 2 | Merancang template sederhana</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>TRIVIA</h1>
                <h2>MEMBUAT TEMPLATE SEDERHANA CODE IGNITER</h2>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web' ?>">HOME</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">ABOUT</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/setting' ?>">SETTING</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>