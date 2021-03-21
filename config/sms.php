<?php

return [
    /**
     * URL of SMS gateway
     */
    'username' => env('SMS_URL', 'sms.bizbezzie.com:8080'),

    /**
     * Userid of SMS gateway
     */
    'username' => env('SMS_USERNAME'),

    /**
     * Password of SMS gateway
     */
    'password' => env('SMS_PASSWORD'),

    /**
     * Channel of SMS Gateway
     * 'Trans' = Transactional SMS
     * 'Promo' = Proptional SMS
     */
    'channel' => env('SMS_CHANNEL', 'Trans'),

    /**
     * Sender ID of SMS Gateway
     */
    'senderid' => env('SMS_SENDERID'),

    /**
     * DSC of SMS Gateway
     */
    'dsc' => env('SMS_DSC', false),

    /**
     * Flash SMS
     */
    'flash' => env('SMS_FLASH', false),

    /**
     * Route of SMS Gateway
     */
    'route' => env('SMS_ROUTE', 1),
];