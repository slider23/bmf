<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?= not_empty($post['title'], '') ?> Gems from Hell</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="<?= site_url('static/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Denk+One">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow">

        <link rel="stylesheet" type="text/css" href="<?= site_url('static/css/base.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('static/themelight/styles.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('static/css/jquery.pnotify.default.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('static/css/flash.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('static/jqueryui/blitzer/jquery-ui-1.8.19.custom.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= site_url('static/highlightjs/monokai.css') ?>" />


      <meta property="og:title" content="<?= form_prep(not_empty($post['title'], '')) ?> Gems from Hell" />
      <meta property="og:description" content="<?= form_prep(not_empty($post['description'], 'Gems from Hell')) ?>" />
      <meta property="og:url" content="http://gemsfromhell.com<?= current_url() ?>" />
      <meta name="title" content="<?= form_prep(not_empty($post['title'], '')) ?> Gems from Hell" />
      <meta name="description" content="<?= form_prep(not_empty($post['description'], 'Gems from Hell')) ?>" />
      <meta name='yandex-verification' content='654cd8a0f7b91402' />
    </head>

    <body>
        <?= get_flash(); ?>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="/">Gems from Hell</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/page/about">О блоге</a></li>
                            <li><a href="/blog/feed.rss" class="rss"><span class="icon icon-fire"></span>RSS</a></li>
                        </ul>
                    </div>
                    
                    <div id="login">
                        <? if (user_signed_in()) {
                            $user = current_user();
                            ?>
                            <? if (user_is('admin')) echo anchor('post/form', 'Создать топик'); ?>
                            <?= user_avatar($user, 'mini') ?> <?= anchor('user/profile/' . $user['login'], $user['login']) ?> | <?= anchor('user/logout', 'Выйти') ?>
                        <? }else { ?>
                            <?= anchor('user/login', 'Войти') ?> <? /*| <?= anchor('user/register', 'Регистрация') ?> */ ?>
                        <? } ?>                    
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <?= $content ?>
            <footer>
                <p>Gems from Hell &copy; <a href="http://mrak7.com">DESIGN4UNDERGROUND</a> and <a href="http://aomega.ru">AOmega.ru</a> | Powered by <a href="http://github.com/mpakus/bmf">Open Source Blog System</a></p>
            </footer>
        </div>

        <script type="text/javascript" src="<?= site_url('static/js/jquery-1.9.1.min.js') ?>"></script>
        <script type="text/javascript" src="<?= site_url('static/js/bmf.js') ?>"></script>
        <script type="text/javascript" src="<?= site_url('static/js/jquery.pnotify.min.js') ?>"></script>
        <script type="text/javascript" src="<?= site_url('static/jqueryui/jquery-ui-1.8.19.custom.min.js') ?>"></script>        
        <script type="text/javascript" src="<?= site_url('static/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="http://yandex.st/highlightjs/6.2/highlight.min.js"></script>
        <script type="text/javascript">
            $(function() {
                hljs.initHighlightingOnLoad();
                $('a.delete').click( BMF.Post.destroy );

                // $('a.delcomment').click( BMF.Comment.destroy );
                // $('a.reply').click( BMF.Comment.reply );
            });
        </script>

        <noindex>
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21295213 = new Ya.Metrika({id:21295213,
                    clickmap:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21295213" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- Disqus comments counter near the author -->
<script type="text/javascript">
var disqus_shortname = 'gemsfromhell';
(function () {
var s = document.createElement('script'); s.async = true;
s.type = 'text/javascript';
s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>
        </noindex>
    </body>
</html>
