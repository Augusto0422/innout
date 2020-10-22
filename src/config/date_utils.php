<?php

function getDateAsDateTime($date){
    return is_string($date) ? new DateTime($date) : $date;
}

function isWeekend($date) {
    $inputDate = getDateAsDateTime($date);
    return $inputDate->format('N') >=6;
}

function isBefore($data1, $data2){
    $inputData1 = getDateAsDateTime($data1);
    $inputData2 = getDateAsDateTime($data2);
    return $inputData1 <= $inputData2;
}

function getNextDay ($date) {
    $inputDate = getDateAsDateTime($date);
    $inputDate->modify('+1 day');
    return $inputDate;
}