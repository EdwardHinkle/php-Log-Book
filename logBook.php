<?php

class logBook
{
    protected $logPath = "/var/log/phplogs/";
    private $logFile;
    
    public function __construct($logFile = 'default.log')
    {
        $this->logFile = $this->logPath . $logFile;
    }
    
    public function addLog($logStatement)
    {
        error_log($logStatement . "\n", 3, $this->logFile);
    }
    
    
    
}

?>