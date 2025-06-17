<?php

$scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

list($score0,$score1,$score2, $score3, $score4, $score5, $score6, $score7, $score8, $score9) = $scores;

$score_sum = $score0 + $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9;
$score_avg = $score_sum / 10;
echo $score_avg;

?>