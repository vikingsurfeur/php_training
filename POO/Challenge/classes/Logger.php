<?php


class Logger
{
    public function __construct()
    {
        fopen('logfile.log', 'a');
        $this->log('Ouverture des logs');
    }

    public function log(string $message)
    {
        file_put_contents(
            'Logfile.log',
            date('Y-m-d H:i:s').' '.$message.PHP_EOL.FILE_APPEND);
    }

    public function __destruct()
    {
        $this->log('Fermeture des logs');
        fclose(fopen('logfile.log', 'a'));
    }
}