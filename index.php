<?php
include 'ErrorLogger.php';

try
{
    throw new Exception("program is dedh");
}
catch(Exception $e)
{
    ErrorLog(" ".$e->getMessage());
}