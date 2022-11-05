<?php
$token = '5642808368:AAHHrPcH58IuBpm8-5VIZyr0ZoJ3FPw9FtU';

$data = [
    'chat_id' => '@ishopsaz',
    'text' => 'Test2 message',
    'parse_mode' => 'HTML'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query($data));
