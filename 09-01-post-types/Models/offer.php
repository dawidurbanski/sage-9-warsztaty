<?php

return [
    [
        'type' => 'cpt',
        'name' => 'offer',
        'supports' => [
            'title', 'thumbnail',
        ],
        'config' => [
          'rewrite' => [
              'slug' => 'oferty',
              'pages' => true,
          ],
        ],
    ],
    [
        'type' => 'category',
        'name' => 'type',
        'links' => 'offer',
        'config' => [
          'rewrite' => [
              'slug' => 'rodzaj',
              'hierarchical' => false,
          ],
        ],
    ],
    [
        'type' => 'category',
        'name' => 'destination',
        'links' => 'offer',
        'config' => [
          'rewrite' => [
              'slug' => 'kierunek',
              'hierarchical' => false,
          ],
        ]
    ],
    [
        'type' => 'category',
        'name' => 'continent',
        'links' => 'offer',
        'config' => [
          'rewrite' => [
              'slug' => 'kontynent',
              'hierarchical' => false,
          ],
        ]
    ],
];
