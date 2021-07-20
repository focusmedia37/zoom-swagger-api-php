<?php

namespace Swagger\Client;

use Fmg\EventsManager\Models\Event;
use GuzzleHttp\Client;
use Swagger\Client\Api\ReportsApi;

class WebinarPatrticipantsApi
{
    private static $loadedWebinarsParticipants = [];

    public static function getWebinarParticipantsEmails(Event $event, int $webinarId): array
    {
        if (array_key_exists($webinarId, self::$loadedWebinarsParticipants)) {
            return self::$loadedWebinarsParticipants[$webinarId];
        }

        $apiConfig = ApiConfigFactory::getConfigByEvent($event);
        $reportsApi = new ReportsApi(new Client(), $apiConfig);
        $webinarReport = null;

        try {
            $webinarReport = $reportsApi->reportWebinarParticipants($webinarId);
        } catch (ApiException $exception) {
            return [];
        }

        $participantEmails = array_map(function($participant) {
            return $participant['user_email'];
        }, $webinarReport['participants']);

        self::$loadedWebinarsParticipants[$webinarId] = $participantEmails;
        return $participantEmails;
    }
}