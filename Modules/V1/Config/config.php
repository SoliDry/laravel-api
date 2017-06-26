<?php
return [
    'name' => 'V1',
    'query_params'=> [
        'limit' => 15,
        'sort' => 'desc',
        'access_token' => 'db7329d5a3f381875ea6ce7e28fe1ea536d0acaf',
    ],
    'trees'=> [
        'menu' => true,
    ],
    'jwt'=> [
        'enabled' => true,
        'table' => 'user',
        'activate' => 30,
        'expires' => 3600,
    ],
    'state_machine'=> [
        'article'=> [
            'status'=> [
                'enabled' => true,
                'states'=> [
                    'initial' => ['draft'],
                    'draft' => ['published'],
                    'published' => ['archived', 'postponed'],
                    'postponed' => ['published', 'archived'],
                    'archived' => [''],
                ],
            ],
        ],
    ],
    'spell_check'=> [
        'article'=> [
            'description'=> [
                'enabled' => true,
                'language' => 'en',
            ],
        ],
    ],
    'bit_mask'=> [
        'user'=> [
            'permissions'=> [
                'enabled' => true,
                'hide_mask' => true,
                'flags'=> [
                    'publisher' => 1,
                    'editor' => 2,
                    'manager' => 4,
                    'photo_reporter' => 8,
                    'admin' => 16,
                ],
            ],
        ],
    ],
];