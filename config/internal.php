<?php

return [
    'ips' => array_filter(explode(', ', env('INTERNAL_IPS', ''))),
];