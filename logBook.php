<?php

class logBook
{
    protected $logPath = "/var/log/phplogs/";
    private $logFile;
    private $keepTime;  // Default setting to show timestamps in log output.
    private $timestamp; // Timestamp of the most recent log
    
    public function __construct($logFile = 'default.log', $keepTime = false)
    {
        $this->logFile = $this->logPath . $logFile;
        $this->keepTime = $keepTime;
        $this->timestamp = NULL;
    }
    
    public function addLog($logStatement, $keepTime = NULL)
    {
        if (is_null($keepTime) && !($keepTime === false)) {
            $keepTime = $this->keepTime;
        }
        if ($keepTime) {
            $timestamp = date("F j, Y, g:i a");
            $t = "[" . $timestamp . "] ";
        }
       error_log($t . $logStatement . "\n", 3, $this->logFile);
    }
    
}

?>