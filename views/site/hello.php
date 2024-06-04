<?php
    $this->title = 'Список статей';
?>

<h1>Весь список:</h1>
<ul>
    <?php foreach ($var as $item):?>
        <li>
            <a href="/site/view/<?=$item->id?>">
                <?=$item->title?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
