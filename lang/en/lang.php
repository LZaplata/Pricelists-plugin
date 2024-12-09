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
                        'price' => [
                            'label' => 'Price',
                            'message' => 'The Items Price field is required.',
                            'message_int' => 'The Items Price field have to be an integer.',
                        ],
                        'price_vat' => [
                            'label' => 'Price VAT',
                            'message' => 'The Items Price VAT field is required.',
                            'message_int' => 'The Items Price VAT field have to be an integer.',
                        ],
                        'price_text' => [
                            'label' => 'Price text',
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
