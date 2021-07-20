<?php

namespace Swagger\Client;

use Firebase\JWT\JWT;
use Fmg\EventsManager\Models\Event;

class ApiConfigFactory
{
    public static function getConfigByEvent(Event $event)
    {
        $secret = $event->zoom_config['zoom_secret'];
        $payload = [
            "iss" => $event->zoom_config['zoom_key'],
            "exp" => time() + 20,
        ];

        $token = JWT::encode($payload, $secret);
        return Configuration::getDefaultConfiguration()->setAccessToken($token);
    }
}