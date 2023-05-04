<?php

namespace Ahmedalkhairy\LaravelVaporEfsLog;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class LaravelVaporEfsLog extends AbstractProcessingHandler implements LoggerInterface
{
    private $efsPath;


    public function __invoke(array $config)
    {
        return new static($config['efsPath'], $config['level'] ?? Logger::DEBUG, $config['bubble'] ?? true);
    }

    public function __construct($efsPath = '', $level = Logger::DEBUG, $bubble = true)
    {
        $this->efsPath = $efsPath;
        parent::__construct($level, $bubble);
    }

    protected function write(array $record): void
    {

        $logPath = $this->efsPath . '.' . date('Y-m-d');
        if (isset($record['formatted'])) {
            file_put_contents($logPath, $record['formatted'] . PHP_EOL, FILE_APPEND);
        } else {
            file_put_contents($logPath, json_encode($record) . PHP_EOL, FILE_APPEND);

        }
    }


    public function emergency($message, array $context = [])
    {
        $this->log(Logger::EMERGENCY, $message, $context);
    }

    public function alert($message, array $context = [])
    {
        $this->log(Logger::ALERT, $message, $context);
    }

    public function critical($message, array $context = [])
    {
        $this->log(Logger::CRITICAL, $message, $context);
    }

    public function error($message, array $context = [])
    {
        $this->log(Logger::ERROR, $message, $context);
    }

    public function warning($message, array $context = [])
    {
        $this->log(Logger::WARNING, $message, $context);
    }

    public function notice($message, array $context = [])
    {
        $this->log(Logger::NOTICE, $message, $context);
    }

    public function info($message, array $context = [])
    {
        $this->log(Logger::INFO, $message, $context);
    }

    public function debug($message, array $context = [])
    {
        $this->log(Logger::DEBUG, $message, $context);
    }

    public function log($level, $message, array $context = [])
    {
        $this->write(['message' => $message, 'context' => $context], $level);
    }
}
