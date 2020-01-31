<?php

use Laminas\ConfigAggregator\ConfigAggregator;

return [
    // Toggle the configuration cache. Set this to boolean false, or remove the
    // directive, to disable configuration caching. Toggling development mode
    // will also disable it by default; clear the configuration cache using
    // `composer clear-config-cache`.
    ConfigAggregator::ENABLE_CACHE => true,

    // Enable debugging; typically used to provide debugging information within templates.
    'debug' => false,

    'mezzio' => [
        // Enable exception-based error handling via standard middleware.
        'raise_throwables' => true,

        // Enable programmatic pipeline: Any `middleware_pipeline` or `routes`
        // configuration will be ignored when creating the `Application` instance.
        'programmatic_pipeline' => true,

        // Provide templates for the error handling middleware to use when
        // generating responses.
        'error_handler' => [
            'template_404' => 'error::404',
            'template_403' => 'error::403',
            'template_error' => 'error::error',
        ],
    ],

    'dependencies' => [
        'lazy_services' => [
            'write_proxy_files' => true,
        ]
    ]
];