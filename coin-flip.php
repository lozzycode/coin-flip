<?php

$rando = rand(1, 100);

if ($rando <= 50) {
    echo 'Heads';
} else if ($rando === 51) {
    echo 'What? Impossible! It landed on its edge';
} else {
    echo 'Tails';
}