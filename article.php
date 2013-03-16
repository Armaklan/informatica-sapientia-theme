<?php include('header.php'); ?>

            <div class="row-fluid content">
                <div class="span7 offset1">

                	<article>
                        <h1><?php $plxShow->artTitle('link'); ?></h1>
                        <div class="postInfo">
                            <ul class="nav nav-pills">
                                <li class=""><i class="icon-calendar"></i><?php $plxShow->artDate(); ?></li>
                                <li class="pull-right"><?php $plxShow->artNbCom(' ( #nb ) <i class=icon-comment></i> ',' ( #nb ) <i class=icon-comment></i> ',' ( #nb ) <i class=icon-comment></i> '); ?></li>
                            </ul>                           
                        </div>

                        <?php $plxShow->artContent(false); ?>

                        <div class="postInfo">
                            <ul class="nav nav-pills">
                                <li class="pull-right"><i class="icon-tag"></i><em><?php $plxShow->artCat(); ?></li>
                            </ul>                           
                        </div>


						<center><?php eval($plxShow->callHook('MySocialButtons')) ?></center>                        


												<!-- commentaires -->
						<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

							<div align="right">
								<a class="btn" data-toggle="modal" data-target="#commentModal">
									<i class="icon-plus"></i> Ajouter un commentaire
								</a>
							</div>
					        <div class="modal hide" id="commentModal">
			                    <form action="<?php $plxShow->artUrl() ?>#form" method="post">
			                        <div class="modal-header">
			                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                            <h3>Ecrire un commentaire</h3>
			                        </div>
			                        <div class="modal-body">
			                            <p class="message_com"><?php $plxShow->comMessage(); ?></p>
			                            <p><i>Avant d'écrire un commentaire, prenez connaissance des quelques <a href="http://armaklan.org/blog/article14/l-art-de-commenter" target="_blank">règles d'usages !</a> </i></p>
			                            <label>Nom*&nbsp;:</label>
			                            <input name="name" type="text" class="input" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
			                            <label>Site&nbsp;:</label>
			                            <input name="site" type="text" class="input" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />
			                            <label>E-mail&nbsp;:</label>
			                            <input name="mail" type="text" class="input" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
			                            <label>Commentaire*&nbsp;:</label>
			                            <textarea name="content" class="textarea"><?php $plxShow->comGet('content',''); ?></textarea>
			                            <?php if($plxShow->plxMotor->aConf['capcha']): ?>
			                                <label><strong>V&eacute;rification anti-spam*</strong>&nbsp;:</label>
			                                <p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /></p>
			                                <input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
			                            <?php endif; ?>
			                        </div>
			                        <div class="modal-footer">
			                            <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
			                            <input type="submit" value="Enregistrer" class="btn btn-primary" />
			                        </div>
			                    </form>
			                </div>


						<?php endif; ?>
			                

                    </article>


                 	<article>


						<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
								<div id="comments">
									<h2>Commentaires</h2>
									<?php while($plxShow->plxMotor->plxRecord_coms->loop()): ?>
										<div id="<?php $plxShow->comId(); ?>" class="comment">
											<div class="info_comment"><p>Par <?php $plxShow->comAuthor('link'); ?><br/> le <?php $plxShow->comDate(); ?></p></div>
											<blockquote><p><?php $plxShow->comContent() ?></p></blockquote>
										</div>

									<?php endwhile; ?>

								</div>

					    <?php endif; ?>



                	</article>
		
                </div>
                <div class="span3 offset1">
					<?php include('sidebar.php'); ?>
                </div>
            </div>
	
<?php include('footer.php'); ?>