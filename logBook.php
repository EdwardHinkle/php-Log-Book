<?php

class logBook
{
    
    private $logFile;
    
    public function __construct($logFile = 'default.log')
    {
        $this->logFile = "/var/log/phplogs/" . $logFile;
    }
    
    public function addLog($logStatement)
    {
        error_log($logStatement . "\n", 3, $this->logFile);
    }
    
    
    
}

?>