<?php

namespace hillel_01_04\system;

class Logger
{
    public static function log(string $message, LogType $logType = LogType::ACTION, ?string $fileSlug = 'log'): int|false
    {
        $logPath = APP_DIR . LOG_DIR . "/" . $fileSlug . "_" . date('Y_m_d') . '.txt';
        $message = "[$logType->value][" . date('H:i:s') . "][$message]\n";

        return file_put_contents($logPath, $message, FILE_APPEND);
    }

    public static function action(string $message): int|false
    {
        return self::log($message, LogType::ACTION, 'action');
    }

    public static function info(string $message): int|false
    {
        return self::log($message, LogType::INFO, 'info');
    }

    public static function error(string $message): int|false
    {
        return self::log($message, LogType::ERROR, 'error');
    }


    private static function getLogFile(): string
    {
        return LOG_DIR;
    }
}