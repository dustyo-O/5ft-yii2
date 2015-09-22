<?php
/**
 * Created by PhpStorm.
 * User: dusty
 * Date: 22.09.15
 * Time: 9:38
 */

$this->title = $anek['title'];
?>

    <div class='text'>
            <span class='content'>
                <?=$anek['text']?>
            </span>
        <div class='bar'>
            <div class='info'>Анекдот <a href="/a/<?=$anek['id']?>.html">#<?=$anek['id']?></a>&nbsp;&mdash;&nbsp;<span class='fa'></span>


            </div>
            <div class='vote'>
                <div class='good' id='g<?=$anek['id']?>'>&nbsp;</div><div id='a<?=$anek['id']?>' class='rate<?=$anek['rate_class']?>'><?=$anek['rate']?></div><div class='bad'>&nbsp;</div>
            </div>
        </div>
        <div class='clear'></div>

        <div class='clear'></div>
    </div>


<div class='f'>

</div>
