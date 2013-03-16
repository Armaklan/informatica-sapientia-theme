            <div class="row-fluid">
                <footer>
                    <div class="span3">
                        <fieldset>
                            <legend>Nuage de tag</legend>
                            <?php $plxShow->tagCloud($max='20');  ?>
                        </fieldset>
                    </div>
                    <div class="span6 hidden-phone">
                        <p>Ce blog est sous license libre <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/fr/deed.en">Creative Commons Attribution-ShareAlike 3.0 France License</a> </p>
                        <p><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/fr/deed.en"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/fr/88x31.png" /></a></p>
                    </div>
                    <div class="span3">                        
                        <fieldset>
                            <legend>Suivez-nous</legend>
                            <a href="./blog/feed.php?rss" rel="alternate" title="Syndiquer tout le site"><img src="<?php $plxShow->template(); ?>/image/rss.png" alt="RSS" id="RSS" height="28px" style="height: 28px;" /></a>
                            <a href="https://plus.google.com/115780595015515789252/posts" title="GooglePlus"><img src="<?php $plxShow->template(); ?>/image/gplus.png" alt="G+" id="gplus" height="28px" style="height: 28px;"/></a>
                            <a href="https://twitter.com/armaklan" title="Twitter"><img src="<?php $plxShow->template(); ?>/image/twitter.png" alt="Twitter" id="twitter" height="28px" style="height: 28px;" /></a>
                        </fieldset>
                    </div>
                </footer>
            </div>
    </div>

</body>
</html>