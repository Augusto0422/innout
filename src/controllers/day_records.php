<?php
session_start();
requireValidSession();

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

loaderTemplateView('day_records', ['today'=>$today]);