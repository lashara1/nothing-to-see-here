<?php

require_once 'Logger.php';


// Do not change this file


function process()
{
    for ($i = 0; $i < 3; $i++) {
        $logger = Logger::get();
        $logger->logError('Error message #' . $i);
        sleep(1);
    }

    $logger = Logger::get();
    $logger->logSuccess('Success message.');
}

process();