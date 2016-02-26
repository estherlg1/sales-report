<?php

include __DIR__ . '/code/Report.php';



$report = new Report();
$something = $report->getSomething();
$page = 'pipline';



include  __DIR__ . '/resources/views/layout.php';
