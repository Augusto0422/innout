<?php
session_start();
requireValidSession();

loaderModel('WorkingHours');

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loaderTemplateView('day_records', [
    'today'=>$today,
    'records' => $records
]);