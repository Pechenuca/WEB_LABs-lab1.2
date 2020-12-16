<?php
session_start();
date_default_timezone_set('Russia/Moscow');

function coolPrint($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function checkSession($valuesArr) {
    if (isset($_SESSION['table'])) {
        foreach($valuesArr as $el){
            array_push($_SESSION['table'], $el);
        }
        coolPrint($_SESSION['table']);
    } else {
        $_SESSION['table'] = $valuesArr;
    }
}

$start = microtime(true);
$x = $_GET['x'];
$y = $_GET['y'];
$r = $_GET['r'];
$halfR = $r / 2;
$quarter = 0;
$now= date("d.m.y H:i");
print_r([$x, $y, $r ]);

if ($x < 0 && $y > 0) $quarter = 1;
if ($x > 0 && $y > 0) $quarter = 2;
if ($x > 0 && $y < 0) $quarter = 3;
if ($x < 0 && $y < 0) $quarter = 4;


if ($quarter == 1) {
    $message = "Point_is_out_of_scope";
}

if ($quarter == 2) {
    $y_function = -$x + $halfR;
    if ($y_function >= $y) {
        $message = "The_point_enters_the_area";
    } else {
        $message = "Point_is_out_of_scope";
    }
}

if ($quarter == 3) {
    $distance = $x * $x + $y * $y;
    $distance = sqrt($distance);
    if ($distance > $r) {
        $message = "The_point_enters_the_area";
    } else {
        $message = "Point_is_out_of_scope";
    }

}

if ($quarter == 4) {
    if ($y >= -$halfR && $x >= -$r) {
        $message = 'The_point_enters_the_area';
    } else {
        $message = "Point_is_out_of_scope";
    }
}

if ($quarter == 0) {
    if ($x == 0) {
        if ($y <= $halfR && $y >= $halfR) {
            $message = "The_point_enters_the_area";
        } else {
            $message = "Point_is_out_of_scope";
        }
    } else {
        if ($x <= $r && $x >= -$r) {//то координата X должна быть в диапазоне [R; -R/2]
            $message = "The_point_enters_the_area";
        } else {
            $message = "Point_is_out_of_scope";
        }
    }
}

$finish = microtime(true);
$work_time = $finish - $start;
$timeWork=round($work_time,7);
$today = date("m-d-Y H:i:s");

checkSession([$today, $message, $x, $y, $r, $work_time]); 
//$_SESSION['table'] = null;
coolPrint($_SESSION['table']);


echo "<script type='text/javascript'> document.location = 'http://localhost/index.php'; </script>";
