<?php

return [
    'smsApiKey' => env('SMS_API_KEY', 'your api key'),

    'smsSendUrl' => env('SMS_SEND_URL', 'http://yunpian.com/v1/sms/send.json'),

    'smsSendText' => env('SMS_SEND_TEXT', '【siet】您的验证码是 '),
];