<?php
if( empty($post) ){
    echo 'Странно, но мы не нашли такого топика на нашем сайте';
    return;
}
?>
<div class="row">
    <div class="span12">
        <div id="post-<?=$post['id']?>" class="post">
            <?= $this->template->render( 'blog/_author', array('post'=>$post) ) ?>
            <h1><?= $post['title'] ?> <?= post_control($post) ?></h1>            
            <?= $post['full'] ?>
        </div>
        <hr/>
        <div class="share">
          <noindex>
<script type="text/javascript">(function() {
 if (window.pluso)if (typeof window.pluso.start == "function") return;
 var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
 s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
 s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
 var h=d[g]('head')[0] || d[g]('body')[0];
 h.appendChild(s);
})();</script>
<div class="pluso" data-options="medium,round,line,horizontal,counter,theme=04" data-services="vkontakte,facebook,livejournal,twitter,odnoklassniki,google,moimir,moikrug,evernote,email,bookmark,print" data-background="transparent"></div>          
          </noindex>
        </div>
        <hr/>
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            var disqus_config = function () { 
              this.language = "ru";
            };          
            var disqus_shortname  = 'gemsfromhell';
            var disqus_identifier = 'gemsfromhell<?= $post['id']?>';
            (function() {
                var disqus_config = function () { 
                  this.language = "ru";
                };                
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noindex>
          <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        </noindex>
    </div>
</div>

<?/*
<h3>Комментарии к статья:</h3>
<div class="navline"></div>
<?= find_comments( $comments, 0 ) ?>

<h3 style="margin-top:33px;">Добавить комментарий:</h3>
<div class="navline"></div>
<?= comment_form( $post['id'] ) ?>
*/?>