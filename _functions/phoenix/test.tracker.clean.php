<?php

require_once __DIR__.'/../../_phoenix.php';
require_once $settings['functions'].'function.tracker.clean.php';
$result = tracker_clean($connection, $settings, $time);