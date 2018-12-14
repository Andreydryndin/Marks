<?php

function pregChars($string){
    $array = preg_split('//', $string, -1, PREG_SPLIT_NO_EMPTY);
    return $array;
}

function revertPunctuationMarks($string){
    $marks_initial = '!?.,:;(){}[]"\'-|<>';
    $marks_replace = '?!,.;:)(}{][\'"|-><';
    $marks_initial = pregChars($marks_initial);
    $marks_replace = pregChars($marks_replace);
    $Marks_initial = array_combine($marks_initial,$marks_replace);
    $string = pregChars($string);

    foreach ($string as $key => $value) {
        if(array_search($value, $Marks_initial) !== false){
            $string[$key] = $Marks_initial[$value];
        }
    }
    $string = implode('',$string);
    return $string;
}

$result = revertPunctuationMarks("hi! how are you?");
echo $result;

