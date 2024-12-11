<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Polo Atacado',
    'description' => 'Atuamos com distribuição de produtos nos segmentos de Papelaria, Brinquedos , Utilidades e Presentes, oferece um mix diversificado de mais de 20.000 itens.',
    'collections' => [],
    'build.source' => env('BUILD_DIR'),
    'email' => 'poloatacado@poloatacado.com.br',
    'address' => [
        'Rodovia BR 040, nº 4.695, km 688',
        'Bairro Kennedy - Contagem',
        'Minas Gerais - Brasil',
        'CEP: 32145-900'
    ],
    'phone' => '(31) 3307-3500',
    'menu' => [
        'Brinquedos',
        'Bebê',
        'Papelaria',
        'Informática',
        'Utilidades',
        'Ferramentas',
        'Jardinagem',
        'Beleza estética',
        'Aviamentos',
        'Natalino',
        'Itens de época'
    ],
    'categories' => [
        'Papelaria' => [
            'BIC',
            'Faber Castell',
            'Pelican',
            'Pentel',
            'Pilot'
        ],
        'Informática' => [
            'Genius',
            'HP',
            'Logitech',
            'Microsoft'
        ],
        'Brinquedos' => [
            'Bandeirante',
            'Chicco',
            'Estrela',
            'Grow',
            'Gugu',
            'Gulliver',
            'Lego'
        ]
    ]
];
