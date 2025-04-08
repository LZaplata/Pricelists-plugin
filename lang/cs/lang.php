<?php return [
    'plugin' => [
        'name' => 'Ceníky',
        'description' => 'Plugin pro správu ceníků',
    ],
    'pricelist' => [
        'field' => [
            'name' => [
                'label' => 'Název',
            ],
            'slug' => [
                'label' => 'URL',
            ],
            'items' => [
                'label' => 'Položky',
                'prompt' => 'Přidat položku',
                'form' => [
                    'field' => [
                        'title' => [
                            'label' => 'Titulek',
                            'message' => 'Položky Titulek pole je povinné.',
                        ],
                        'price_1' => [
                            'label' => 'Cena 1',
                        ],
                        'price_2' => [
                            'label' => 'Cena 2',
                        ],
                        'price_3' => [
                            'label' => 'Cena 3',
                        ],
                    ],
                ],
            ],
        ],
        'column' => [
            'created_at' => [
                'label' => 'Vytvořeno',
            ],
            'name' => [
                'label' => 'Název',
            ],
        ],
        'create' => [
            'title' => 'Vytvořit ceník',
            'flash' => 'Ceník byl úspěšně vytvořen',
        ],
        'update' => [
            'title' => 'Upravit ceník',
            'flash' => [
                'update' => 'Ceník byl úspěšně upraven',
                'delete' => 'Ceník byl úspěšně smazán',
            ],
        ],
    ],
    'privileges' => [
        'default' => 'Přístup k pluginu',
    ],
    'component' => [
        'pricelist' => [
            'name' => 'Ceník',
            'description' => 'Zobrazí položky ceníku',
            'slug' => [
                'title' => 'Ceník',
                'description' => 'Vyberte ceník',
            ],
        ],
    ],
];
