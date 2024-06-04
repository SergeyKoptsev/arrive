<?php

/** @var yii\web\View $this */

use app\components\Calendar;

$this->title = 'My Calendar';
$calendarWiget = Calendar::getInterval(date('n.Y'), date('n.Y', strtotime('+0 month')));
?>
<span class="nights">Ночей до встречи: <?=$calendarWiget[1];?></span>
<main id="main" class="flex-shrink-0" role="main">
    <div class="calendar">
        <?=$calendarWiget[0];?>
    </div>
</main>

