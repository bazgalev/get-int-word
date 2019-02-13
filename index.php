<?php

require 'function.php';

for ($i = 0; $i < 10; $i++) {
    echo getIntWord(rand(-100, 100), 'день', 'дня', 'дней');
    echo '<br>';
}
