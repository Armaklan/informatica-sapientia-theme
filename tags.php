<?php include('header.php'); ?>

            <div class="row-fluid content">
                <div class="span7 offset1">

                	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
                	<article>
                        <h2><?php $plxShow->artTitle('link'); ?></h2>
                        <div class="postInfo">
                            <ul class="nav nav-pills">
                                <li class=""><i class="icon-calendar"></i><?php $plxShow->artDate(); ?></li>
                                <li class="pull-right"><?php $plxShow->artNbCom(' ( #nb ) <i class=icon-comment></i> ',' ( #nb ) <i class=icon-comment></i> ',' ( #nb ) <i class=icon-comment></i> '); ?></li>
                            </ul>                           
                        </div>
                		<?php $plxShow->artChapo(); ?>        
                        <div class="postInfo">
                            <ul class="nav nav-pills">
                                <li class="pull-right"><i class="icon-tag"></i><em><?php $plxShow->artCat(); ?>, <?php $plxShow->artTags(); ?></em></li>
                            </ul>                           
                        </div>
                        
                    </article>
					<?php endwhile; ?>
		
                </div>
                <div class="span3 offset1">
					<?php include('sidebar.php'); ?>
                </div>
            </div>

			<div class="row-fluid content">
                <div class="span12" style="text-align: center;">
					<p id="pagination"><?php $plxShow->pagination(); ?></p>
                    <p><i><?php $plxShow->tagFeed('rss')?></i></p>
                </div>
            </div>
	
<?php include('footer.php'); ?>
