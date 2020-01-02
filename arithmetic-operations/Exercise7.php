<?php
function fall(int $initial_velocity, int $initial_position, int $time) {
    $acceleration = -9.81;
    $time = 10;
    $position = (0.5 * (($acceleration * ($time*$time))
            + ($initial_velocity * $time) + ($initial_position)));
    echo $position;
}
fall(0,0,10);