<?php return [
    'plugin' => [
        'name' => 'Pricelists',
        'description' => 'Plugin for pricelists management',
    ],
    'pricelist' => [
        'field' => [
            'name' => [
                'label' => 'Name',
            ],
            'slug' => [
                'label' => 'Slug',
            ],
            'items' => [
                'label' => 'Items',
                'prompt' => 'Add new item',
                'form' => [
                    'field' => [
                        'title' => [
                            'label' => 'Title',
                            'message' => 'The Items Title field is required.',
                        ],
                        'price_1' => [
                            'label' => 'Price 1',
                        ],
                        'price_2' => [
                            'label' => 'Price 2',
                        ],
                        'price_3' => [
                            'label' => 'Price 3',
                        ],
                    ],
                ],
            ],
        ],
        'column' => [
            'created_at' => [
                'label' => 'Created',
            ],
            'name' => [
                'label' => 'Name',
            ],
        ],
        'create' => [
            'title' => 'Create pricelist',
            'flash' => 'Pricelist has been successfully created',
        ],
        'update' => [
            'title' => 'Update pricelist',
            'flash' => [
                'update' => 'Pricelist has been successfully updated',
                'delete' => 'Pricelist has been successfully deleted',
            ],
        ],
    ],
    'privileges' => [
        'default' => 'Plugin access',
    ],
    'component' => [
        'pricelist' => [
            'name' => 'Pricelist',
            'description' => 'Display pricelist items',
            'slug' => [
                'title' => 'Pricelist',
                'description' => 'Choose pricelist',
            ],
        ],
    ],
];
