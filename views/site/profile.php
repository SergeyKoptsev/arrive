<?php
$this->title = 'Мой профиль';
?>

<pre>
<?php
    var_dump($profile->name);
?>
</pre>

Ваши предки:

<pre>
<?php

foreach ($ancestors as $ancestor) {
    var_dump($ancestor->name);
}
?>
</pre>