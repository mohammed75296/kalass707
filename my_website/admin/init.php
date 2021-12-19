<?php
    $tpl = 'includes/templets/'; //Templet directory
    $css = 'layout/css/';  //css directory
    $js  =  'layout/js/'; //js directory
    $lang = 'includes/lang/';
   
    include $lang.'english.php';
    include $tpl.'heder.php';

    

    if(isset($navbar)){
        include $tpl.'navbar.php';
        include $tpl.'caru.php';

    }elseif(!isset($navbar)){
        include $tpl.'navbar.php';

    }

?>