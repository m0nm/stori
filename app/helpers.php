<?php

function estimatedReadTime(...$body)
{
    $totalWords = str_word_count(implode(" ", $body));
    $minutesToRead = round($totalWords / 200);

    return (int)max(1, $minutesToRead);
};