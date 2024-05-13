<?php
    $grade = 'C';

    echo match ($grade) {
        'A', 'B' => "sangat baik\n",
        'C' => "cukup\n",
    };


    $score = 10;

    echo match (true) {
        $score > 100 => 'tll',
        $score >= 90 => 'A',
        $score >= 80 => 'B',
        $score >= 70 => 'C',
        default => 'error',
    };
?>