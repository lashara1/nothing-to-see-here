<?php

class Logger
{
    public static function get()
    {
        return new Logger();
    }

    public function logError($message)
    {
        $logFile = fopen('application.log', 'w');
        fwrite($logFile, 'ERROR: ' . $message);
        fclose($logFile);
    }

    public function logSuccess($msg)
    {
        $logFile = fopen('application.log', 'a');
        fwrite($logFile, 'SUCCESS: ' . $msg);
    }
}