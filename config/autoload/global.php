<?php

use Zend\ConfigAggregator\ConfigAggregator;

return [
    'debug' => false,
    ConfigAggregator::ENABLE_CACHE => true,

    'zend-expressive' => [
        'error_handler' => [
            'template_404'   => 'error::404',
            'template_error' => 'error::error'
        ]
    ]
];
