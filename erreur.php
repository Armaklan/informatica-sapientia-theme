<?php include('header.php'); ?>

            <div class="row-fluid content">
                <div class="span7 offset1">

                	<article>
						<h1 class="title">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h1>
						<p><?php $plxShow->erreurMessage(); ?></p>
						<p><a href="./" title="Accueil du site">Retour page d'accueil</a></p>
                    </article>
		
                </div>
                <div class="span3 offset1">
					<?php include('sidebar.php'); ?>
                </div>
            </div>
	
<?php include('footer.php'); ?>
