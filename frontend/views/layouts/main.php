<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
//var_dump($anek);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= Yii::$app->language ?>" lang="<?= Yii::$app->language ?>">
<head>
    <title><?= $this->title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>"/>
    <link title="" type="application/rss+xml" rel="alternate" href="http://feeds.feedburner.com/5ft/"/>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

        <?= Alert::widget() ?>
        <?= $content ?>


    <?php $this->endBody() ?>
    <!--LiveInternet counter--><script type="text/javascript"><!--
        document.write("<a href='http://www.liveinternet.ru/click' "+
        "target=_blank><img src='http://counter.yadro.ru/hit?t44.6;r"+
        escape(document.referrer)+((typeof(screen)=="undefined")?"":
        ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
        ";"+Math.random()+
        "' alt='' title='LiveInternet' "+
        "border='0' width='31' height='31'><\/a>")
        //--></script><!--/LiveInternet--><script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-11316606-1");
            pageTracker._trackPageview();
        } catch(err) {}</script>
    <!-- Yandex.Metrika -->
    <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
    <script type="text/javascript">
        try { var yaCounter395300 = new Ya.Metrika(395300); } catch(e){}
    </script>
    <noscript><div style="position: absolute;"><img src="//mc.yandex.ru/watch/395300" alt="" /></div></noscript>
    <!-- /Yandex.Metrika -->

</body>
</html>
<?php $this->endPage() ?>
