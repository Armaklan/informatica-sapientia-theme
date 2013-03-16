<?php if(!defined('PLX_ROOT')) exit; ?>		

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="<?php $plxShow->template(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php $plxShow->template(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    
	<!-- Specific -->
    <link href="<?php $plxShow->template(); ?>/main.css" rel="stylesheet" media="screen">

	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./blog/feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./blog/feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./blog/feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./blog/feed.php?rss/commentaires" />

    <script src="<?php $plxShow->template(); ?>/jquery-1.9.1.min.js"></script>
    <script src="<?php $plxShow->template(); ?>/bootstrap/js/bootstrap.min.js"></script>

    <<title>Informatica Sapientia</title>
    <link rel="icon" type="image/png" href="<?php $plxShow->template(); ?>/arma-logo.png" />
</head>

<body>

<div id="main">


        <div class="container-fluid">
            <div class="row-fluid">
                <header>
                    <div class="span2 hidden-phone" >
                        <img src="<?php $plxShow->template(); ?>/arma-logo.png" class="logo img-rounded">
                    </div>
                    <div class="span8">
					    <h2><?php $plxShow->mainTitle('link'); ?></h2>
					    <h2><?php $plxShow->subTitle(); ?></h2>
                    </div>
                    <div class="span2 hidden-phone" style="text-align: right;">
                        <img src="<?php $plxShow->template(); ?>/arma.jpg" class="logo img-rounded">
                    </div>
                </header>
            </div>
            <div class="row-fluid menu">
                <div class="span12">
                    <navigation>
                        <div class="navbar">
                            <div class="navbar-inner">
                                <ul class="nav">
                                	<?php $plxShow->staticList('Accueil'); ?>
                                    <li class="divider-vertical"></li>
                                </ul>
                                <form method="post" 
                                id="searchform" 
                                action="<?php $plxShow->urlRewrite('?search') ?>"
                                class="navbar-search pull-right">
                                	<input type="hidden" name="search" value="search"  />
                                    <input type="text" class="search-query" placeholder="Rechercher...." name="searchfield">
                                    <button type="submit" class="btn btn-link"><i class="icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </navigation>
                </div>
            </div>