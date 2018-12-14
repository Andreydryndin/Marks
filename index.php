<?php

function pregChars($string){
    $array = preg_split('//', $string, -1, PREG_SPLIT_NO_EMPTY);
    return $array;
}

function revertPunctuationMarks($string){
    $marks = '!?.,:;(){}[]"\'-|<>';
    $marks2 = '?!,.;:)(}{][\'"|-><';
    $marks = pregChars($marks);
    $marks2 = pregChars($marks2);
    $Marks = array_combine($marks,$marks2);
    $string = pregChars($string);

    foreach ($string as $key => $value) {
        if(array_search($value, $Marks) !== false){
            $string[$key] = $Marks[$value];
        }
    }
    $string = implode('',$string);
    return $string;
}

$result = revertPunctuationMarks("hi! how are you?");
//echo $result;

