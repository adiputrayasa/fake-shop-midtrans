<?php

return [
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),

    'sandbox_server_key' => env('MIDTRANS_SB_SERVER_KEY'),
    'sandbox_client_key' => env('MIDTRANS_SB_CLIENT_KEY'),

    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED'),
    'is_3ds' => env('MIDTRANS_IS_3DS'),

    'append_notif_url' => null,
    'overrideNotifUrl' => null,
    'payment_idempotency_key' => null,

    'curl_options' => null,
];