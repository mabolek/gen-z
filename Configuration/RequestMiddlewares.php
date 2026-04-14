<?php

return [
    'backend' => [
        'bmack/gen-z/login-language-override' => [
            'target' => \Bmack\GenZ\Middleware\LoginLanguageOverride::class,
            'after' => [
                'typo3/cms-backend/backend-routing',
            ],
            'before' => [
                'typo3/cms-backend/authentication',
            ],
        ],
    ],
];
