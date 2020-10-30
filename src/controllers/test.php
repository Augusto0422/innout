<?php
//controle temporário
echo User::getCount(['id' =>3]);


// print_r(getLastDayOfMonth('2020-10-04'));
// echo '<br>';
// print_r(getLastDayOfMonth('2020-02'));
// echo '<br>';
// print_r(getLastDayOfMonth(new DateTime()));




// $wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));  

// $workedIntervalString = $wh->getWorkedInterval()->format('%H:%M:%S');
// print_r($workedIntervalString);
// echo '<br>';
// $lunchIntervalString = $wh->getLunchInterval()->format('%H:%M:%S');
// print_r($lunchIntervalString);
// echo '<br>';

// print_r($wh->getExitTime());

// //COntrole Temporário

// $i1 = DateInterval::createFromDateString('9 hours');
// $i2 = DateInterval::createFromDateString('6 hours');

// $r1 = sumIntervals($i1, $i2);
// $r2 = subtractIntervals($i1, $i2);

// print_r($r1);
// echo'<br>';
// print_r($r2);
// echo'<br>';
// print_r(getDateFromInterval($r1));
// echo'<br>';
// print_r(getDateFromInterval($r2));