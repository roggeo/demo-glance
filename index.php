<?php

include "bootstrap.php";

?>
<!DOCTYPE html>
<!--
Theme default of Glance
-->
<html>
    <head>
        <title>Demo using Glance</title>
        <meta charset="UTF-8">
	<?php $theme->css();?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Demo using Glance</h1>
        <?=$theme->enqueue('img/light.jpg')?>
        <br />
        <?=$theme->img('light.jpg')?>
        <br />
        <?php
        foreach($theme->img(array("books1","books2"), "png") as $book):            
            echo "$book<br/>";            
        endforeach;        
        ?>
        <?=$theme->js('light')?>
        
        <div>
            <p>Other theme</p>
            <ul>
                <li><?=$theme->js('home')?></li>
                <li><?=$theme->js('light')?></li>
            </ul>
            <img src="<?= $theme->enqueue('img/books1.png');?>"/>
            
        </div>
        
    </body>
</html>