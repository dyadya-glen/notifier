<?php

namespace Ntschool\Notifier\Adapter;

use Ntschool\Notifier\NotifierAdapterInterface;

class TelegramNotifierAdapter implements NotifierAdapterInterface
{
    private $url = "https://api.telegram.org/bot<token>/sendMessage?chat_id=<chat_id>&text=";

    public function __construct(string $botToken, string $chatId)
    {
        $this->url = str_replace('<token>', $botToken, $this->url);
        $this->url = str_replace('<chat_id>', $chatId, $this->url);
    }


    public function debug(string $message)
    {
        file_get_contents($this->url . \urlencode('DEBUG: ' . $message));
    }

    public function info(string $message)
    {
        file_get_contents($this->url . \urlencode('INFO: ' . $message));
    }

    public function notice(string $message)
    {
        file_get_contents($this->url . \urlencode('NOTICE: ' . $message));
    }

    public function warning(string $message)
    {
        file_get_contents($this->url . \urlencode('WARNING: ' . $message));
    }

    public function error(string $message)
    {
        file_get_contents($this->url . \urlencode('ERROR: ' . $message));
    }

    public function critical(string $message)
    {
        file_get_contents($this->url . \urlencode('CRITICAL: ' . $message));
    }

    public function alert(string $message)
    {
        file_get_contents($this->url . \urlencode('ALERT: ' . $message));
    }

    public function emergency(string $message)
    {
        file_get_contents($this->url . \urlencode('EMERGENCY: ' . $message));
    }

}