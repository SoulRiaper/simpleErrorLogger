<?php

include('Ilogger.php');
class ErrorLogger implements ILogger
{
    private $filepath;
    private $file;
    public function __construct() {
        $this->filepath = (require("config.php")); // get config

        $this->file = fopen($this->filepath["error_path"], 'a') or die('cant open file'); // open logging file
    }
	public function log(string $message)
    {
        fwrite($this->file, "[ ".date("Y.m.d - H:i:s")." ] PHP Error : ".$message."\n");
        fclose($this->file);
	}
}
function ErrorLog($message) // func for easy using 
{
    $logger = new ErrorLogger();
    $logger->log($message);
}